<?php 
include("include/dbcommon.php");

@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

add_nocache_headers();
include("include/TambahPergerakan_variables.php");
include('include/xtempl.php');
include('classes/addpage.php');

global $globalEvents;

//	check if logged in
if(!isLogged() || CheckPermissionsEvent($strTableName, 'A') && !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Add"))
{ 
	$_SESSION["MyURL"]=$_SERVER["SCRIPT_NAME"]."?".$_SERVER["QUERY_STRING"];
	
	header("Location: login.php?message=expired"); 
	return;
}

if ((sizeof($_POST)==0) && (postvalue('ferror'))){
	if (postvalue("inline")){
		$returnJSON['success'] = false;
		$returnJSON['message'] = "Error occurred";
		$returnJSON['fatalError'] = true;
		echo "<textarea>".htmlspecialchars(my_json_encode($returnJSON))."</textarea>";
		exit();
	}
	else if (postvalue("fly")){
		echo -1;
		exit();
	}
	else {
		$_SESSION["message_add"] = "<< "."Error occurred"." >>";
	}
}

$layout = new TLayout("","","Mobile");
$page_layouts[""] = $layout;



$filename = "";
$status = "";
$message = "";
$mesClass = "";
$usermessage = "";
$error_happened = false;
$readavalues = false;

$keys = array();
$showValues = array();
$showRawValues = array();
$showFields = array();
$showDetailKeys = array();
$IsSaved = false;
$HaveData = true;
$popUpSave = false;

$sessionPrefix = $strTableName;

$onFly = false;
if(postvalue("onFly"))
	$onFly = true;

if(@$_REQUEST["editType"]=="inline")
	$inlineadd = ADD_INLINE;
elseif(@$_REQUEST["editType"]==ADD_POPUP)
{
	$inlineadd = ADD_POPUP;
	if(@$_POST["a"]=="added" && postvalue("field")=="" && postvalue("category")=="")
		$popUpSave = true;	
}
elseif(@$_REQUEST["editType"]==ADD_MASTER)
	$inlineadd = ADD_MASTER;
elseif($onFly)
{
	$inlineadd = ADD_ONTHEFLY;
	$sessionPrefix = $strTableName."_add";
}
else
	$inlineadd = ADD_SIMPLE;

if($inlineadd == ADD_INLINE)
	$templatefile = "TambahPergerakan_inline_add.htm";
else
	$templatefile = "TambahPergerakan_add.htm";

$id = postvalue("id");
if(intval($id)==0)
	$id = 1;

//If undefined session value for mastet table, but exist post value master table, than take second
//It may be happen only when use dpInline mode on page add
if(!@$_SESSION[$sessionPrefix."_mastertable"] && postvalue("mastertable"))
	$_SESSION[$sessionPrefix."_mastertable"] = postvalue("mastertable");
	
$xt = new Xtempl();
	
// assign an id
$xt->assign("id",$id);
	
$auditObj = GetAuditObject($strTableName);

//array of params for classes
$params = array("pageType" => PAGE_ADD,"id" => $id,"mode" => $inlineadd);

////////////////////// data picker
$params["calendar"] = true;

////////////////////// time picker

$params['xt'] = &$xt;
$params['tName'] = $strTableName;
$params['includes_js'] = $includes_js;
$params['locale_info'] = $locale_info;
$params['includes_css'] = $includes_css;
$params['useTabsOnAdd'] = $gSettings->useTabsOnAdd();
$params['templatefile'] = $templatefile;
$params['includes_jsreq'] = $includes_jsreq;
$params['pageAddLikeInline'] = ($inlineadd==ADD_INLINE);
$params['needSearchClauseObj'] = false;
$params['strOriginalTableName'] = $strOriginalTableName;

if($params['useTabsOnAdd'])
	$params['arrAddTabs'] = $gSettings->getAddTabs();
	
$pageObject = new AddPage($params);

if(isset($_REQUEST['afteradd'])){
		header('Location: TambahPergerakan_add.php');
	if($eventObj->exists("AfterAdd") && isset($_SESSION['after_add_data'][$_REQUEST['afteradd']])){
	
		$data = $_SESSION['after_add_data'][$_REQUEST['afteradd']];
		$eventObj->AfterAdd($data['avalues'], $data['keys'],$data['inlineadd'], $pageObject);
	
	}
	unset($_SESSION['after_add_data'][$_REQUEST['afteradd']]);
	
	foreach (is_array($_SESSION['after_add_data']) ? $_SESSION['after_add_data'] : array() as $k=>$v){
		if (!is_array($v) or !array_key_exists('time',$v)) {
			unset($_SESSION['after_add_data'][$k]);
			continue;
		}
		if ($v['time'] < time() - 3600){
			unset($_SESSION['after_add_data'][$k]);
		}
	}
		exit;
}

//Get detail table keys	
$detailKeys = $pageObject->detailKeysByM;

//Array of fields, which appear on add page
$addFields = $pageObject->getFieldsByPageType();

// add button events if exist
if ($inlineadd==ADD_SIMPLE)
	$pageObject->addButtonHandlers();

$url_page=substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1,12);

//For show detail tables on master page add
if($inlineadd==ADD_SIMPLE || $inlineadd==ADD_MASTER || $inlineadd==ADD_POPUP)
{
	$dpParams = array();
	if($pageObject->isShowDetailTables  && !isMobile())
	{
		$ids = $id;
		$countDetailsIsShow = 0;
		$pageObject->jsSettings['tableSettings'][$strTableName]['isShowDetails'] = $countDetailsIsShow > 0 ? true : false;
		$pageObject->jsSettings['tableSettings'][$strTableName]['dpParams'] = array('tableNames'=>$dpParams['strTableNames'], 'ids'=>$dpParams['ids']);
	}
}

//	Before Process event
if($eventObj->exists("BeforeProcessAdd"))
	$eventObj->BeforeProcessAdd($conn, $pageObject);

// proccess captcha
if ($inlineadd==ADD_SIMPLE || $inlineadd==ADD_MASTER || $inlineadd==ADD_POPUP)
	if($pageObject->captchaExists())
		$pageObject->doCaptchaCode();
	
// insert new record if we have to
if(@$_POST["a"]=="added")
{
	$afilename_values=array();
	$avalues=array();
	$blobfields=array();
//	processing lantikan_date - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_lantikan_date = $pageObject->getControl("lantikan_date", $id);
		$control_lantikan_date->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing lantikan_date - end
//	processing sah_date - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_sah_date = $pageObject->getControl("sah_date", $id);
		$control_sah_date->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing sah_date - end
//	processing pencen_date - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_pencen_date = $pageObject->getControl("pencen_date", $id);
		$control_pencen_date->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing pencen_date - end
//	processing gaji_date - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_gaji_date = $pageObject->getControl("gaji_date", $id);
		$control_gaji_date->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing gaji_date - end
//	processing skim_pencen - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_skim_pencen = $pageObject->getControl("skim_pencen", $id);
		$control_skim_pencen->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing skim_pencen - end
//	processing tamatkontrak_date - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_tamatkontrak_date = $pageObject->getControl("tamatkontrak_date", $id);
		$control_tamatkontrak_date->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing tamatkontrak_date - end
//	processing nofail - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_nofail = $pageObject->getControl("nofail", $id);
		$control_nofail->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing nofail - end
//	processing name - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd==ADD_INLINE;
	if($inlineAddOption)
	{
		$control_name = $pageObject->getControl("name", $id);
		$control_name->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing name - end
//	processing post_id - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd==ADD_INLINE;
	if($inlineAddOption)
	{
		$control_post_id = $pageObject->getControl("post_id", $id);
		$control_post_id->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing post_id - end
//	processing dept_id - start
	$inlineAddOption = true;
	$inlineAddOption = $inlineadd==ADD_INLINE;
	if($inlineAddOption)
	{
		$control_dept_id = $pageObject->getControl("dept_id", $id);
		$control_dept_id->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing dept_id - end
//	processing grade_id - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_grade_id = $pageObject->getControl("grade_id", $id);
		$control_grade_id->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing grade_id - end
//	processing start_date - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_start_date = $pageObject->getControl("start_date", $id);
		$control_start_date->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing start_date - end
//	processing scheme_id - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_scheme_id = $pageObject->getControl("scheme_id", $id);
		$control_scheme_id->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing scheme_id - end
//	processing username - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_username = $pageObject->getControl("username", $id);
		$control_username->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing username - end
//	processing password - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_password = $pageObject->getControl("password", $id);
		$control_password->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing password - end
//	processing type - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_type = $pageObject->getControl("type", $id);
		$control_type->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing type - end
//	processing level - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_level = $pageObject->getControl("level", $id);
		$control_level->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing level - end




	$failed_inline_add=false;
//	add filenames to values
	foreach($afilename_values as $akey=>$value)
		$avalues[$akey]=$value;
	
//	before Add event
	$retval = true;
	if($eventObj->exists("BeforeAdd"))
		$retval = $eventObj->BeforeAdd($avalues,$usermessage,(bool)$inlineadd, $pageObject);
	if($retval && $pageObject->isCaptchaOk)
	{
		//add or set updated lat-lng values for all map fileds with 'UpdateLatLng' ticked
		setUpdatedLatLng($avalues, $pageObject->cipherer->pSet);
		
		$_SESSION[$strTableName."_count_captcha"] = $_SESSION[$strTableName."_count_captcha"]+1;
		if(DoInsertRecord($strOriginalTableName,$avalues,$blobfields,$id,$pageObject, $pageObject->cipherer))
		{
			$IsSaved=true;
//	after edit event
			if($auditObj || $eventObj->exists("AfterAdd"))
			{
				foreach($keys as $idx=>$val)
					$avalues[$idx]=$val;
			}
			
			if($auditObj)
				$auditObj->LogAdd($strTableName,$avalues,$keys);
				
// Give possibility to all edit controls to clean their data				
//	processing lantikan_date - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_lantikan_date->afterSuccessfulSave();
			}
//	processing lantikan_date - end
//	processing sah_date - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_sah_date->afterSuccessfulSave();
			}
//	processing sah_date - end
//	processing pencen_date - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_pencen_date->afterSuccessfulSave();
			}
//	processing pencen_date - end
//	processing gaji_date - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_gaji_date->afterSuccessfulSave();
			}
//	processing gaji_date - end
//	processing skim_pencen - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_skim_pencen->afterSuccessfulSave();
			}
//	processing skim_pencen - end
//	processing tamatkontrak_date - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_tamatkontrak_date->afterSuccessfulSave();
			}
//	processing tamatkontrak_date - end
//	processing nofail - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_nofail->afterSuccessfulSave();
			}
//	processing nofail - end
//	processing name - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd==ADD_INLINE;
			if($inlineAddOption)
			{
				$control_name->afterSuccessfulSave();
			}
//	processing name - end
//	processing post_id - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd==ADD_INLINE;
			if($inlineAddOption)
			{
				$control_post_id->afterSuccessfulSave();
			}
//	processing post_id - end
//	processing dept_id - start
			$inlineAddOption = true;
			$inlineAddOption = $inlineadd==ADD_INLINE;
			if($inlineAddOption)
			{
				$control_dept_id->afterSuccessfulSave();
			}
//	processing dept_id - end
//	processing grade_id - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_grade_id->afterSuccessfulSave();
			}
//	processing grade_id - end
//	processing start_date - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_start_date->afterSuccessfulSave();
			}
//	processing start_date - end
//	processing scheme_id - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_scheme_id->afterSuccessfulSave();
			}
//	processing scheme_id - end
//	processing username - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_username->afterSuccessfulSave();
			}
//	processing username - end
//	processing password - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_password->afterSuccessfulSave();
			}
//	processing password - end
//	processing type - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_type->afterSuccessfulSave();
			}
//	processing type - end
//	processing level - start
			$inlineAddOption = true;
			if($inlineAddOption)
			{
				$control_level->afterSuccessfulSave();
			}
//	processing level - end

			$afterAdd_id = '';	
			if($eventObj->exists("AfterAdd") && $inlineadd!=ADD_MASTER){
				$eventObj->AfterAdd($avalues,$keys,(bool)$inlineadd, $pageObject);
			} else if ($eventObj->exists("AfterAdd") && $inlineadd==ADD_MASTER){
				if($onFly)
					$eventObj->AfterAdd($avalues,$keys,(bool)$inlineadd, $pageObject);
				else{
					$afterAdd_id = generatePassword(20);	
				
					$_SESSION['after_add_data'][$afterAdd_id] = array(
						'avalues'=>$avalues,
						'keys'=>$keys,
						'inlineadd'=>(bool)$inlineadd,
						'time' => time()
					);	
				}
			}
				
			if($inlineadd==ADD_SIMPLE || $inlineadd==ADD_MASTER)
			{
				$permis = array();
				$keylink = "";$k = 0;
				foreach($keys as $idx=>$val)
				{
					if($k!=0)
						$keylink .="&";
					$keylink .="editid".(++$k)."=".htmlspecialchars(rawurlencode(@$val));
				}
				$permis = $pageObject->getPermissions();				
				if (count($keys))
				{
					$message .="</br>";
					if($pageObject->pSet->hasEditPage() && $permis['edit'])
						$message .='&nbsp;<a href=\'TambahPergerakan_edit.php?'.$keylink.'\'>'."Sunting".'</a>&nbsp;';
					if($pageObject->pSet->hasViewPage() && $permis['search'])
						$message .='&nbsp;<a href=\'TambahPergerakan_view.php?'.$keylink.'\'>'."Lihat".'</a>&nbsp;';
				}
				$mesClass = "mes_ok";	
			}
		}
		elseif($inlineadd!=ADD_INLINE)
			$mesClass = "mes_not";	
	}
	else
	{
		$message = $usermessage;
		$status = "DECLINED";
		$readavalues = true;
	}
}
if($message)
	$message = "<div class='message ".$mesClass."'>".$message."</div>";

// PRG rule, to avoid POSTDATA resend
if (no_output_done() && $inlineadd==ADD_SIMPLE && $IsSaved)
{
	// saving message
	$_SESSION["message_add"] = ($message ? $message : "");
	// redirect
	header("Location: TambahPergerakan_".$pageObject->getPageType().".php");
	// turned on output buffering, so we need to stop script
	exit();
}

if($inlineadd==ADD_MASTER && $IsSaved)
	$_SESSION["message_add"] = ($message ? $message : "");
	
// for PRG rule, to avoid POSTDATA resend. Saving mess in session
if($inlineadd==ADD_SIMPLE && isset($_SESSION["message_add"]))
{
	$message = $_SESSION["message_add"];
	unset($_SESSION["message_add"]);
}

$defvalues=array();

//	copy record
if(array_key_exists("copyid1",$_REQUEST) || array_key_exists("editid1",$_REQUEST))
{
	$copykeys=array();
	if(array_key_exists("copyid1",$_REQUEST))
	{
		$copykeys["staff_id"]=postvalue("copyid1");
	}
	else
	{
		$copykeys["staff_id"]=postvalue("editid1");
	}
	$strWhere=KeyWhere($copykeys);
	$strSQL = $gQuery->gSQLWhere($strWhere);

	LogInfo($strSQL);
	$rs = db_query($strSQL,$conn);
	$defvalues = $pageObject->cipherer->DecryptFetchedArray($rs);
	if(!$defvalues)
		$defvalues=array();
//	clear key fields
	$defvalues["staff_id"]="";
//call CopyOnLoad event
	if($eventObj->exists("CopyOnLoad"))
		$eventObj->CopyOnLoad($defvalues,$strWhere, $pageObject);
}
else
{
}



if($readavalues)
{
	$defvalues["lantikan_date"]=@$avalues["lantikan_date"];
	$defvalues["sah_date"]=@$avalues["sah_date"];
	$defvalues["pencen_date"]=@$avalues["pencen_date"];
	$defvalues["gaji_date"]=@$avalues["gaji_date"];
	$defvalues["skim_pencen"]=@$avalues["skim_pencen"];
	$defvalues["tamatkontrak_date"]=@$avalues["tamatkontrak_date"];
	$defvalues["nofail"]=@$avalues["nofail"];
	$defvalues["grade_id"]=@$avalues["grade_id"];
	$defvalues["start_date"]=@$avalues["start_date"];
	$defvalues["scheme_id"]=@$avalues["scheme_id"];
	$defvalues["username"]=@$avalues["username"];
	$defvalues["password"]=@$avalues["password"];
	$defvalues["type"]=@$avalues["type"];
	$defvalues["level"]=@$avalues["level"];
}

if($eventObj->exists("ProcessValuesAdd"))
	$eventObj->ProcessValuesAdd($defvalues, $pageObject);


//for basic files
$includes="";

if($inlineadd!=ADD_INLINE)
{
	if($inlineadd!=ADD_ONTHEFLY && $inlineadd!=ADD_POPUP)
	{
		$includes .="<script language=\"JavaScript\" src=\"include/loadfirst.js\"></script>\r\n";
				$includes.="<script type=\"text/javascript\" src=\"include/lang/".getLangFileName(mlang_getcurrentlang()).".js\"></script>";
		if (!isMobile())
			$includes.="<div id=\"search_suggest\"></div>\r\n";
	}
	
	if(!$pageObject->isAppearOnTabs("lantikan_date"))
		$xt->assign("lantikan_date_fieldblock",true);
	else
		$xt->assign("lantikan_date_tabfieldblock",true);
	$xt->assign("lantikan_date_label",true);
	if(isEnableSection508())
		$xt->assign_section("lantikan_date_label","<label for=\"".GetInputElementId("lantikan_date", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("sah_date"))
		$xt->assign("sah_date_fieldblock",true);
	else
		$xt->assign("sah_date_tabfieldblock",true);
	$xt->assign("sah_date_label",true);
	if(isEnableSection508())
		$xt->assign_section("sah_date_label","<label for=\"".GetInputElementId("sah_date", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("pencen_date"))
		$xt->assign("pencen_date_fieldblock",true);
	else
		$xt->assign("pencen_date_tabfieldblock",true);
	$xt->assign("pencen_date_label",true);
	if(isEnableSection508())
		$xt->assign_section("pencen_date_label","<label for=\"".GetInputElementId("pencen_date", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("gaji_date"))
		$xt->assign("gaji_date_fieldblock",true);
	else
		$xt->assign("gaji_date_tabfieldblock",true);
	$xt->assign("gaji_date_label",true);
	if(isEnableSection508())
		$xt->assign_section("gaji_date_label","<label for=\"".GetInputElementId("gaji_date", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("skim_pencen"))
		$xt->assign("skim_pencen_fieldblock",true);
	else
		$xt->assign("skim_pencen_tabfieldblock",true);
	$xt->assign("skim_pencen_label",true);
	if(isEnableSection508())
		$xt->assign_section("skim_pencen_label","<label for=\"".GetInputElementId("skim_pencen", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("tamatkontrak_date"))
		$xt->assign("tamatkontrak_date_fieldblock",true);
	else
		$xt->assign("tamatkontrak_date_tabfieldblock",true);
	$xt->assign("tamatkontrak_date_label",true);
	if(isEnableSection508())
		$xt->assign_section("tamatkontrak_date_label","<label for=\"".GetInputElementId("tamatkontrak_date", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("nofail"))
		$xt->assign("nofail_fieldblock",true);
	else
		$xt->assign("nofail_tabfieldblock",true);
	$xt->assign("nofail_label",true);
	if(isEnableSection508())
		$xt->assign_section("nofail_label","<label for=\"".GetInputElementId("nofail", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("grade_id"))
		$xt->assign("grade_id_fieldblock",true);
	else
		$xt->assign("grade_id_tabfieldblock",true);
	$xt->assign("grade_id_label",true);
	if(isEnableSection508())
		$xt->assign_section("grade_id_label","<label for=\"".GetInputElementId("grade_id", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("start_date"))
		$xt->assign("start_date_fieldblock",true);
	else
		$xt->assign("start_date_tabfieldblock",true);
	$xt->assign("start_date_label",true);
	if(isEnableSection508())
		$xt->assign_section("start_date_label","<label for=\"".GetInputElementId("start_date", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("scheme_id"))
		$xt->assign("scheme_id_fieldblock",true);
	else
		$xt->assign("scheme_id_tabfieldblock",true);
	$xt->assign("scheme_id_label",true);
	if(isEnableSection508())
		$xt->assign_section("scheme_id_label","<label for=\"".GetInputElementId("scheme_id", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("username"))
		$xt->assign("username_fieldblock",true);
	else
		$xt->assign("username_tabfieldblock",true);
	$xt->assign("username_label",true);
	if(isEnableSection508())
		$xt->assign_section("username_label","<label for=\"".GetInputElementId("username", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("password"))
		$xt->assign("password_fieldblock",true);
	else
		$xt->assign("password_tabfieldblock",true);
	$xt->assign("password_label",true);
	if(isEnableSection508())
		$xt->assign_section("password_label","<label for=\"".GetInputElementId("password", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("type"))
		$xt->assign("type_fieldblock",true);
	else
		$xt->assign("type_tabfieldblock",true);
	$xt->assign("type_label",true);
	if(isEnableSection508())
		$xt->assign_section("type_label","<label for=\"".GetInputElementId("type", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("level"))
		$xt->assign("level_fieldblock",true);
	else
		$xt->assign("level_tabfieldblock",true);
	$xt->assign("level_label",true);
	if(isEnableSection508())
		$xt->assign_section("level_label","<label for=\"".GetInputElementId("level", $id, PAGE_ADD)."\">","</label>");
	
	
	
	if($inlineadd!=ADD_ONTHEFLY && $inlineadd!=ADD_POPUP)
	{
		$pageObject->body["begin"] .= $includes;
				$xt->assign("backbutton_attrs","id=\"backButton".$id."\"");
		$xt->assign("back_button",true);
	}
	else
	{		
		$xt->assign("cancelbutton_attrs", "id=\"cancelButton".$id."\"");
		$xt->assign("cancel_button",true);
		$xt->assign("header","");
	}
	$xt->assign("save_button",true);
}
$xt->assign("savebutton_attrs","id=\"saveButton".$id."\"");
$xt->assign("message_block",true);
$xt->assign("message",$message);
if(!strlen($message))
{
	$xt->displayBrickHidden("message");
}

//	show readonly fields
$linkdata="";

$i = 0;
$jsKeys = array();
$keyFields = array();
foreach($keys as $field=>$value)
{
	$keyFields[$i] = $field;
	$jsKeys[$i++] = $value;
}

if(@$_POST["a"]=="added" && $inlineadd==ADD_ONTHEFLY)
{
	if( !$error_happened && $status!="DECLINED")
	{
		$addedData = GetAddedDataLookupQuery($pageObject, $keys, false);
		$data =& $addedData[0];	
		
		if($data)
		{
			$respData = array($addedData[1]["linkField"] => @$data[$addedData[1]["linkFieldIndex"]], $addedData[1]["displayField"] => @$data[$addedData[1]["displayFieldIndex"]]);
		}
		else
		{
			$respData = array($addedData[1]["linkField"] => @$avalues[$addedData[1]["linkField"]], $addedData[1]["displayField"] => @$avalues[$addedData[1]["displayField"]]);
		}		
		$returnJSON['success'] = true;
		$returnJSON['keys'] = $jsKeys;
		$returnJSON['keyFields'] = $keyFields;
		$returnJSON['vals'] = $respData;
		$returnJSON['fields'] = $showFields;
	}
	else
	{
		$returnJSON['success'] = false;
		$returnJSON['message'] = $message;
	}
	echo "<textarea>".htmlspecialchars(my_json_encode($returnJSON))."</textarea>";
	exit();
}

if(@$_POST["a"]=="added" && ($inlineadd == ADD_INLINE || $inlineadd == ADD_MASTER || $inlineadd==ADD_POPUP)) 
{
	//Preparation   view values
	//	get current values and show edit controls
	$dispFieldAlias = "";
	$data=0;
	$linkAndDispVals = array();
	if(count($keys))
	{
		$where=KeyWhere($keys);
			
		$forLookup = postvalue('forLookup');
		if ($forLookup)
		{
			$addedData = GetAddedDataLookupQuery($pageObject, $keys, true);
			$data =& $addedData[0];
			$linkAndDispVals = array('linkField' => $addedData[0][$addedData[1]["linkField"]], 'displayField' => $addedData[0][$addedData[1]["displayField"]]);
		}
		else
		{
			$strSQL = $gQuery->gSQLWhere_having_fromQuery('', $where, '');		
		
			LogInfo($strSQL);
			$rs=db_query($strSQL,$conn);
			$data = $pageObject->cipherer->DecryptFetchedArray($rs);
		}
	}
	if(!$data)
	{
		$data=$avalues;
		$HaveData=false;
	}
	//check if correct values added

	$keylink="";
	$keylink.="&key1=".htmlspecialchars(rawurlencode(@$data["staff_id"]));
	
////////////////////////////////////////////
//	lantikan_date
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("lantikan_date", $data, $keylink);
		$showValues["lantikan_date"] = $value;
		$showFields[] = "lantikan_date";
				$showRawValues["lantikan_date"] = substr($data["lantikan_date"],0,100);
	}	
//	sah_date
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("sah_date", $data, $keylink);
		$showValues["sah_date"] = $value;
		$showFields[] = "sah_date";
				$showRawValues["sah_date"] = substr($data["sah_date"],0,100);
	}	
//	pencen_date
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("pencen_date", $data, $keylink);
		$showValues["pencen_date"] = $value;
		$showFields[] = "pencen_date";
				$showRawValues["pencen_date"] = substr($data["pencen_date"],0,100);
	}	
//	gaji_date
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("gaji_date", $data, $keylink);
		$showValues["gaji_date"] = $value;
		$showFields[] = "gaji_date";
				$showRawValues["gaji_date"] = substr($data["gaji_date"],0,100);
	}	
//	skim_pencen
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("skim_pencen", $data, $keylink);
		$showValues["skim_pencen"] = $value;
		$showFields[] = "skim_pencen";
				$showRawValues["skim_pencen"] = substr($data["skim_pencen"],0,100);
	}	
//	tamatkontrak_date
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("tamatkontrak_date", $data, $keylink);
		$showValues["tamatkontrak_date"] = $value;
		$showFields[] = "tamatkontrak_date";
				$showRawValues["tamatkontrak_date"] = substr($data["tamatkontrak_date"],0,100);
	}	
//	nofail
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("nofail", $data, $keylink);
		$showValues["nofail"] = $value;
		$showFields[] = "nofail";
				$showRawValues["nofail"] = substr($data["nofail"],0,100);
	}	
//	name
	$display = false;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("name", $data, $keylink);
		$showValues["name"] = $value;
		$showFields[] = "name";
				$showRawValues["name"] = substr($data["name"],0,100);
	}	
//	post_id
	$display = false;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("post_id", $data, $keylink);
		$showValues["post_id"] = $value;
		$showFields[] = "post_id";
				$showRawValues["post_id"] = substr($data["post_id"],0,100);
	}	
//	dept_id
	$display = false;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("dept_id", $data, $keylink);
		$showValues["dept_id"] = $value;
		$showFields[] = "dept_id";
				$showRawValues["dept_id"] = substr($data["dept_id"],0,100);
	}	
//	grade_id
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("grade_id", $data, $keylink);
		$showValues["grade_id"] = $value;
		$showFields[] = "grade_id";
				$showRawValues["grade_id"] = substr($data["grade_id"],0,100);
	}	
//	start_date
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("start_date", $data, $keylink);
		$showValues["start_date"] = $value;
		$showFields[] = "start_date";
				$showRawValues["start_date"] = substr($data["start_date"],0,100);
	}	
//	scheme_id
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("scheme_id", $data, $keylink);
		$showValues["scheme_id"] = $value;
		$showFields[] = "scheme_id";
				$showRawValues["scheme_id"] = substr($data["scheme_id"],0,100);
	}	
//	username
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("username", $data, $keylink);
		$showValues["username"] = $value;
		$showFields[] = "username";
				$showRawValues["username"] = substr($data["username"],0,100);
	}	
//	password
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("password", $data, $keylink);
		$showValues["password"] = $value;
		$showFields[] = "password";
				$showRawValues["password"] = substr($data["password"],0,100);
	}	
//	type
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("type", $data, $keylink);
		$showValues["type"] = $value;
		$showFields[] = "type";
				$showRawValues["type"] = substr($data["type"],0,100);
	}	
//	level
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$value = $pageObject->showDBValue("level", $data, $keylink);
		$showValues["level"] = $value;
		$showFields[] = "level";
				$showRawValues["level"] = substr($data["level"],0,100);
	}	
	
	// for custom expression for display field
	if ($dispFieldAlias)
	{
		$showValues[] = $data[$dispFieldAlias];	
		$showFields[] = $dispFieldAlias;
		$showRawValues[] = substr($data[$dispFieldAlias],0,100);
	}
	
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_POPUP)
	{	
		if($IsSaved && count($showValues))
		{
			$returnJSON['success'] = true;
			if($HaveData){
				$returnJSON['noKeys'] = false;
			}else{
				$returnJSON['noKeys'] = true;
			}
			
			$returnJSON['keys'] = $jsKeys;
			$returnJSON['keyFields'] = $keyFields;
			$returnJSON['vals'] = $showValues;
			$returnJSON['fields'] = $showFields;
			$returnJSON['rawVals'] = $showRawValues;
			$returnJSON['detKeys'] = $showDetailKeys;
			$returnJSON['userMess'] = $usermessage;
			$returnJSON['hrefs'] = $pageObject->buildDetailGridLinks($showDetailKeys);
			// add link and display value if list page is lookup with search
			if(array_key_exists('linkField', $linkAndDispVals))
			{
				$returnJSON['linkValue'] = $linkAndDispVals['linkField'];
				$returnJSON['displayValue'] = $linkAndDispVals['displayField'];
			}
			if($globalEvents->exists("IsRecordEditable", $strTableName))
			{ 
				if(!$globalEvents->IsRecordEditable($showRawValues, true, $strTableName))
					$returnJSON['nonEditable'] = true;
			}
			
			if($inlineadd==ADD_POPUP && isset($_SESSION[$strTableName."_count_captcha"]) || $_SESSION[$strTableName."_count_captcha"]>0 || $_SESSION[$strTableName."_count_captcha"]<5)
				$returnJSON['hideCaptcha'] = true;
		}
		else
		{
			$returnJSON['success'] = false;
			$returnJSON['message'] = $message;
			if(!$pageObject->isCaptchaOk)
				$returnJSON['captcha'] = false;
		}
		echo "<textarea>".htmlspecialchars(my_json_encode($returnJSON))."</textarea>";
		exit();
	}
} 

/////////////////////////////////////////////////////////////
if($inlineadd==ADD_MASTER)
{
	$respJSON = array();
	if(($_POST["a"]=="added" && $IsSaved))
	{
		$respJSON['afterAddId'] = $afterAdd_id;
		$respJSON['success'] = true;
		$respJSON['fields'] = $showFields;
		$respJSON['vals'] = $showValues;
		if($onFly){
			if($HaveData)
				$respJSON['noKeys'] = false;
			else
				$respJSON['noKeys'] = true;
			$respJSON['keys'] = $jsKeys;
			$respJSON['keyFields'] = $keyFields;
			$respJSON['rawVals'] = $showRawValues;
			$respJSON['detKeys'] = $showDetailKeys;
			$respJSON['userMess'] = $usermessage;
			$respJSON['hrefs'] = $pageObject->buildDetailGridLinks($showDetailKeys);
			if($globalEvents->exists("IsRecordEditable", $strTableName))
			{
				if(!$globalEvents->IsRecordEditable($showRawValues, true, $strTableName))
					$respJSON['nonEditable'] = true;
			}
		}
		$respJSON['mKeys'] = array();
		for($i=0;$i<count($dpParams['ids']);$i++)
		{
			$data=0;
			if(count($keys))
			{
				$where=KeyWhere($keys);
							$strSQL = $gQuery->gSQLWhere($where);
				LogInfo($strSQL);
				$rs = db_query($strSQL,$conn);
				$data = $pageObject->cipherer->DecryptFetchedArray($rs);
			}
			if(!$data)
				$data=$avalues;
			
			$mKeyId = 1;
			foreach($mKeys[$dpParams['strTableNames'][$i]] as $mk)
			{
				if($data[$mk])
					$respJSON['mKeys'][$dpParams['strTableNames'][$i]]['masterkey'.$mKeyId++] = $data[$mk];
				else
					$respJSON['mKeys'][$dpParams['strTableNames'][$i]]['masterkey'.$mKeyId++] = '';
			}
		}
		if(isset($_SESSION[$strTableName."_count_captcha"]) || $_SESSION[$strTableName."_count_captcha"]>0 || $_SESSION[$strTableName."_count_captcha"]<5)
			$respJSON['hidecaptcha'] = true;
	}
	else{
			$respJSON['success'] = false;
			if(!$pageObject->isCaptchaOk)
				$respJSON['captcha'] = false;
			else
				$respJSON['error'] = $message;
			if($onFly)
				$respJSON['message'] = $message;
		}
	echo "<textarea>".htmlspecialchars(my_json_encode($respJSON))."</textarea>";
	exit();
}

/////////////////////////////////////////////////////////////
//	prepare Edit Controls
/////////////////////////////////////////////////////////////

//	validation stuff
$regex='';
$regexmessage='';
$regextype = '';
$control = array();

foreach($addFields as $fName)
{
	$gfName = GoodFieldName($fName);
	$controls = array('controls'=>array());
	if(!$detailKeys || !in_array($fName, $detailKeys) || $fName == postvalue("category"))
	{
		$control[$gfName] = array();
		$control[$gfName]["func"] = "xt_buildeditcontrol";
		$control[$gfName]["params"] = array();
		$control[$gfName]["params"]["id"] = $id;
		$control[$gfName]["params"]["ptype"] = PAGE_ADD;
		$control[$gfName]["params"]["field"] = $fName;
		$control[$gfName]["params"]["value"] = @$defvalues[$fName];
		$control[$gfName]["params"]["pageObj"] = $pageObject;
		if($pageObject->pSet->isUseRTE($fName))
			$_SESSION[$strTableName."_".$fName."_rte"] = @$defvalues[$fName];
		
		//	Begin Add validation
		$arrValidate = $pageObject->pSet->getValidation($fName);
		$control[$gfName]["params"]["validate"] = $arrValidate;
		//	End Add validation
	}
	$controls["controls"]['ctrlInd'] = 0;
	$controls["controls"]['id'] = $id;
	$controls["controls"]['fieldName'] = $fName;
	//if richEditor for field
	if($pageObject->pSet->isUseRTE($fName))
	{
		if(!$detailKeys || !in_array($fName, $detailKeys))
			$control[$gfName]["params"]["mode"]="add";
		$controls["controls"]['mode'] = "add";
	}
	else
	{
		if($inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		{
			if(!$detailKeys || !in_array($fName, $detailKeys) || $fName == postvalue("category"))	
				$control[$gfName]["params"]["mode"]="inline_add";
			$controls["controls"]['mode'] = "inline_add";
		}
		else
		{
			if(!$detailKeys || !in_array($fName, $detailKeys) || $fName == postvalue("category"))	
				$control[$gfName]["params"]["mode"]="add";
			$controls["controls"]['mode'] = "add";
		}
	}
	
	if(!$detailKeys || !in_array($fName, $detailKeys))
		$xt->assignbyref($gfName."_editcontrol",$control[$gfName]);
	elseif($detailKeys && in_array($fName, $detailKeys))
		$controls["controls"]['value'] = @$defvalues[$fName];
	
	// category control field
	$strCategoryControl = $pageObject->isDependOnField($fName);
	
	if($strCategoryControl!==false && in_array($strCategoryControl, $addFields))
		$vals = array($fName => @$defvalues[$fName], $strCategoryControl => @$defvalues[$strCategoryControl]);
	else
		$vals = array($fName => @$defvalues[$fName]);
	
	$preload = $pageObject->fillPreload($fName, $vals);
	if($preload!==false)
	{
		$controls["controls"]['preloadData'] = $preload;
		if(!@$defvalues[$fName] && count($preload["vals"])>0)
			$defvalues[$fName] = $preload["vals"][0];
	}
	$pageObject->fillControlsMap($controls);
	
	//fill field tool tips
	$pageObject->fillFieldToolTips($fName);
	
	// fill special settings for timepicker
	if($pageObject->pSet->getEditFormat($fName) == 'Time')
		$pageObject->fillTimePickSettings($fName, @$defvalues[$fName]);
	
	if((($detailKeys && in_array($fName, $detailKeys)) || $fName == postvalue("category")) && array_key_exists($fName, $defvalues))
	{
		$value = $pageObject->showDBValue($fName, $defvalues);
		
		$xt->assign($gfName."_editcontrol", $value);
	}
}

//fill tab groups name and sections name to controls
$pageObject->fillCntrlTabGroups();

/////////////////////////////////////////////////////////////
if($pageObject->isShowDetailTables && ($inlineadd==ADD_SIMPLE || $inlineadd==ADD_POPUP) && !isMobile())
{
	if(count($dpParams['ids']))
	{
		$xt->assign("detail_tables",true);
		include('classes/listpage.php');
		include('classes/listpage_embed.php');
		include('classes/listpage_dpinline.php');
		include("classes/searchclause.php");
	}
	
	$dControlsMap = array();
		
	$flyId = $ids+1;
	for($d=0;$d<count($dpParams['ids']);$d++)
	{
		$options = array();
		//array of params for classes
		$options["mode"] = LIST_DETAILS;
		$options["pageType"] = PAGE_LIST;
		$options["masterPageType"] = PAGE_ADD;
		$options["mainMasterPageType"] = PAGE_ADD;
		$options['masterTable'] = "TambahPergerakan";
		$options['firstTime'] = 1;
		
		$strTableName = $dpParams['strTableNames'][$d];
		include_once("include/".GetTableURL($strTableName)."_settings.php");
		
		$layout = GetPageLayout(GoodFieldName($strTableName), PAGE_LIST);
		if($layout)
		{
			$rtl = $xt->getReadingOrder() == 'RTL' ? 'RTL' : '';
			$xt->cssFiles[] = array("stylepath" => "styles/".$layout->style.'/style'.$rtl.".css"
				, "pagestylepath" => "pagestyles/".$layout->name.$rtl.".css");
			$xt->IEcssFiles[] = array("stylepathIE" => "styles/".$layout->style.'/styleIE'.".css");
		}	
			
		$options['xt'] = new Xtempl();
		$options['id'] = $dpParams['ids'][$d];
		$options['flyId'] = $flyId++;
		$mkr = 1;
		
		foreach($mKeys[$strTableName] as $mk)
		{
			if($defvalues[$mk])
				$options['masterKeysReq'][$mkr++] = $defvalues[$mk];
			else
				$options['masterKeysReq'][$mkr++] = '';
		}
		$listPageObject = ListPage::createListPage($strTableName,$options);
		
		// prepare code
		$listPageObject->prepareForBuildPage();
		$flyId = $listPageObject->recId+1;
		
		//set page events
		foreach($listPageObject->eventsObject->events as $event => $name)
			$listPageObject->xt->assign_event($event, $listPageObject->eventsObject, $event, array());
		
		//add detail settings to master settings
		$listPageObject->fillSetCntrlMaps();
		$pageObject->jsSettings['tableSettings'][$strTableName]	= $listPageObject->jsSettings['tableSettings'][$strTableName];

		$dControlsMap[$strTableName] = $listPageObject->controlsMap;
		
		foreach($listPageObject->jsSettings["global"]["shortTNames"] as $tName => $shortTName){
			$pageObject->settingsMap["globalSettings"]["shortTNames"][$tName] = $shortTName;
		}
		
		//Add detail's js files to master's files
		$pageObject->copyAllJSFiles($listPageObject->grabAllJSFiles());
		
		//Add detail's css files to master's files
		$pageObject->copyAllCSSFiles($listPageObject->grabAllCSSFiles());
		
		$xtParams = array("method"=>'showPage', "params"=> false);
		$xtParams['object'] = $listPageObject;
		$xt->assign("displayDetailTable_".GoodFieldName($listPageObject->tName), $xtParams);
		$pageObject->controlsMap['dpTablesParams'][] = array('tName'=>$strTableName, 'id'=>$options['id']);
	}
	$pageObject->controlsMap['dControlsMap'] = $dControlsMap;
	$strTableName = "TambahPergerakan";
}
/////////////////////////////////////////////////////////////
//fill jsSettings and ControlsHTMLMap
$pageObject->fillSetCntrlMaps();

$pageObject->addCommonJs();

//For mobile version in apple device

if($inlineadd == ADD_SIMPLE)
{
	$pageObject->body['end'] = array();
	$pageObject->body['end']["method"] = "assignBodyEnd";
	$pageObject->body['end']["object"] = &$pageObject;
	$xt->assign("body", $pageObject->body);
	$xt->assign("flybody",true);
}

if($inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_MASTER || $inlineadd==ADD_POPUP)
{ 
	$xt->assign("footer",false);
	$xt->assign("header",false);
	$xt->assign("flybody", $pageObject->body);
	$xt->assign("body",true);
}	

$xt->assign("style_block",true);

if($eventObj->exists("BeforeShowAdd"))
	$eventObj->BeforeShowAdd($xt, $templatefile, $pageObject);
	
if($inlineadd != ADD_SIMPLE)
{
	$returnJSON['controlsMap'] = $pageObject->controlsHTMLMap;
	$returnJSON['viewControlsMap'] = $pageObject->viewControlsHTMLMap;
	$returnJSON['settings'] = $pageObject->jsSettings;	
}

if($inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
{
	$xt->load_template($templatefile);
	$returnJSON['html'] = $xt->fetch_loaded('style_block').$xt->fetch_loaded('body');
	if(count($pageObject->includes_css))
		$returnJSON['CSSFiles'] = array_unique($pageObject->includes_css);
	if(count($pageObject->includes_cssIE))
		$returnJSON['CSSFilesIE'] = array_unique($pageObject->includes_cssIE);
	$returnJSON["additionalJS"] = $pageObject->grabAllJsFiles();
	$returnJSON['idStartFrom'] = $id+1;	
	echo (my_json_encode($returnJSON)); 
}
elseif ($inlineadd == ADD_INLINE)
{
	$xt->load_template($templatefile);
	$returnJSON["html"] = array();
	foreach($addFields as $fName)
	{
		$returnJSON["html"][$fName] = $xt->fetchVar(GoodFieldName($fName)."_editcontrol");	
	}	
	$returnJSON["additionalJS"] = $pageObject->grabAllJsFiles();
	$returnJSON["additionalCSS"] = $pageObject->grabAllCSSFiles();
	echo (my_json_encode($returnJSON)); 
}
else
	$xt->display($templatefile);

function GetAddedDataLookupQuery($pageObject, $keys, $forLookup)
{
	global $conn, $strTableName, $strOriginalTableName;
	
	$LookupSQL = "";
	$linkfield = "";
	$dispfield = "";
	$noBlobReplace = false;
	$lookupFieldName = "";
	
	if($LookupSQL && $nLookupType != LT_QUERY)
		$LookupSQL.=" from ".AddTableWrappers($strOriginalTableName);
		
	$data = 0;
	$lookupIndexes = array("linkFieldIndex" => 0, "displayFieldIndex" => 0);
	if(count($keys))
	{
		$where = KeyWhere($keys);
		if($nLookupType == LT_QUERY){
			$LookupSQL = $lookupQueryObj->toSql(whereAdd($lookupQueryObj->m_where->toSql($lookupQueryObj), $where));
		}else 
			$LookupSQL.=" where ".$where;
		$lookupIndexes = GetLookupFieldsIndexes($lookupPSet, $lookupFieldName);
		LogInfo($LookupSQL);
		if($forLookup){
			$rs=db_query($LookupSQL,$conn);
			$data = $pageObject->cipherer->DecryptFetchedArray($rs);
		}else if($LookupSQL)
		{
			$rs = db_query($LookupSQL,$conn);
			$data = db_fetch_numarray($rs);
			$data[$lookupIndexes["linkFieldIndex"]] = $pageObject->cipherer->DecryptField($linkFieldName, $data[$lookupIndexes["linkFieldIndex"]]);
			if($nLookupType == LT_QUERY)
				$data[$lookupIndexes["displayFieldIndex"]] = $pageObject->cipherer->DecryptField($dispfield, $data[$lookupIndexes["displayFieldIndex"]]);		
		}
	}

	return array($data, array("linkField" => $linkFieldName, "displayField" => $dispfield
		, "linkFieldIndex" => $lookupIndexes["linkFieldIndex"], "displayFieldIndex" => $lookupIndexes["displayFieldIndex"]));
}	
	
?>
