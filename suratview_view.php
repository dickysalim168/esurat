<?php 
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
include("include/suratview_variables.php");
include('include/xtempl.php');
include('classes/viewpage.php');
include("classes/searchclause.php");

add_nocache_headers();

//	check if logged in
if(!isLogged() || CheckPermissionsEvent($strTableName, 'S') && !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search"))
{ 
	$_SESSION["MyURL"]=$_SERVER["SCRIPT_NAME"]."?".$_SERVER["QUERY_STRING"];
	header("Location: login.php?message=expired"); 
	return;
}

$layout = new TLayout("view2","PurificAqua","MobileAqua");
$layout->blocks["top"] = array();
$layout->skins["pdf"] = "empty";
$layout->blocks["top"][] = "pdf";
$layout->containers["view"] = array();

$layout->containers["view"][] = array("name"=>"viewheader","block"=>"","substyle"=>2);


$layout->containers["view"][] = array("name"=>"wrapper","block"=>"","substyle"=>1, "container"=>"fields");


$layout->containers["fields"] = array();

$layout->containers["fields"][] = array("name"=>"viewfields","block"=>"","substyle"=>1);


$layout->containers["fields"][] = array("name"=>"viewbuttons","block"=>"","substyle"=>2);


$layout->skins["fields"] = "fields";

$layout->skins["view"] = "1";
$layout->blocks["top"][] = "view";
$layout->containers["details"] = array();

$layout->containers["details"][] = array("name"=>"viewdetails","block"=>"detail_tables","substyle"=>1);


$layout->skins["details"] = "empty";
$layout->blocks["top"][] = "details";$page_layouts["suratview_view"] = $layout;


$layout = new TLayout("viewtab","PurificAqua","MobileAqua");
$layout->blocks["bare"] = array();
$layout->containers["1"] = array();

$layout->containers["1"][] = array("name"=>"viewtabfield","block"=>"","substyle"=>1);


$layout->skins["1"] = "fields";
$layout->blocks["bare"][] = "1";$page_layouts["suratview_view_PTG1"] = $layout;

$layout = new TLayout("viewtab","PurificAqua","MobileAqua");
$layout->blocks["bare"] = array();
$layout->containers["1"] = array();

$layout->containers["1"][] = array("name"=>"viewtabfield","block"=>"","substyle"=>1);


$layout->skins["1"] = "fields";
$layout->blocks["bare"][] = "1";$page_layouts["suratview_view_Agensi1"] = $layout;

$layout = new TLayout("viewtab","PurificAqua","MobileAqua");
$layout->blocks["bare"] = array();
$layout->containers["1"] = array();

$layout->containers["1"][] = array("name"=>"viewtabfield","block"=>"","substyle"=>1);


$layout->skins["1"] = "fields";
$layout->blocks["bare"][] = "1";$page_layouts["suratview_view_Awam1"] = $layout;


$layout = new TLayout("list7","PurificAqua","MobileAqua");
$layout->blocks["center"] = array();
$layout->containers["bigblock"] = array();

$layout->containers["bigblock"][] = array("name"=>"wrapper","block"=>"","substyle"=>1, "container"=>"recordcontrols");


$layout->containers["recordcontrols"] = array();

$layout->containers["recordcontrols"][] = array("name"=>"recordcontrols_new","block"=>"newrecord_controls_block","substyle"=>1);



$layout->skins["recordcontrols"] = "2";

$layout->containers["bigblock"][] = array("name"=>"wrapper","block"=>"","substyle"=>1, "container"=>"message");


$layout->containers["message"] = array();

$layout->containers["message"][] = array("name"=>"message","block"=>"message_block","substyle"=>1);


$layout->skins["message"] = "2";

$layout->containers["bigblock"][] = array("name"=>"wrapper","block"=>"","substyle"=>1, "container"=>"grid");


$layout->containers["grid"] = array();

$layout->containers["grid"][] = array("name"=>"grid","block"=>"grid_block","substyle"=>1);


$layout->skins["grid"] = "grid";

$layout->containers["bigblock"][] = array("name"=>"wrapper","block"=>"","substyle"=>1, "container"=>"pagination");


$layout->containers["pagination"] = array();

$layout->containers["pagination"][] = array("name"=>"pagination","block"=>"pagination_block","substyle"=>1);


$layout->skins["pagination"] = "2";

$layout->skins["bigblock"] = "1";
$layout->blocks["center"][] = "bigblock";$layout->blocks["left"] = array();
$layout->containers["left"] = array();

$layout->containers["left"][] = array("name"=>"searchpanel","block"=>"searchPanel","substyle"=>1);


$layout->skins["left"] = "menu";
$layout->blocks["left"][] = "left";$layout->blocks["top"] = array();
$layout->skins["master"] = "empty";
$layout->blocks["top"][] = "master";
$layout->containers["toplinks"] = array();

$layout->containers["toplinks"][] = array("name"=>"loggedas","block"=>"security_block","substyle"=>1);



$layout->containers["toplinks"][] = array("name"=>"toplinks_advsearch","block"=>"asearch_link","substyle"=>1);






$layout->skins["toplinks"] = "empty";
$layout->blocks["top"][] = "toplinks";
$layout->containers["hmenu"] = array();

$layout->containers["hmenu"][] = array("name"=>"hmenu","block"=>"menu_block","substyle"=>1);


$layout->skins["hmenu"] = "hmenu";
$layout->blocks["top"][] = "hmenu";
$layout->containers["search"] = array();

$layout->containers["search"][] = array("name"=>"search","block"=>"searchform_block","substyle"=>1);


$layout->containers["search"][] = array("name"=>"search_buttons","block"=>"searchformbuttons_block","substyle"=>1);


$layout->containers["search"][] = array("name"=>"details_found","block"=>"details_block","substyle"=>1);


$layout->containers["search"][] = array("name"=>"page_of","block"=>"pages_block","substyle"=>1);


$layout->containers["search"][] = array("name"=>"recsperpage","block"=>"recordspp_block","substyle"=>1);


$layout->skins["search"] = "1";
$layout->blocks["top"][] = "search";$page_layouts["pergerakan_list"] = $layout;


//$cipherer = new RunnerCipherer($strTableName);
	
$xt = new Xtempl();

$query = $gQuery->Copy();

$filename = "";	
$message = "";
$key = array();
$next = array();
$prev = array();
$all = postvalue("all");
$pdf = postvalue("pdf");
$mypage = 1;

//Show view page as popUp or not
$inlineview = (postvalue("onFly") ? true : false);

//If show view as popUp, get parent Id
if($inlineview)
	$parId = postvalue("parId");
else
	$parId = 0;

//Set page id	
if(postvalue("id"))
	$id = postvalue("id");
else
	$id = 1;

//$isNeedSettings = true;//($inlineview && postvalue("isNeedSettings") == 'true') || (!$inlineview);	
	
// assign an id
$xt->assign("id",$id);

//array of params for classes
$params = array("pageType" => PAGE_VIEW, "id" => $id, "tName" => $strTableName);
$params["xt"] = &$xt;
$params["all"] = $all;

//Get array of tabs for edit page
$params['useTabsOnView'] = $gSettings->useTabsOnView();
if($params['useTabsOnView'])
	$params['arrViewTabs'] = $gSettings->getViewTabs();
$pageObject = new ViewPage($params);

// SearchClause class stuff
$pageObject->searchClauseObj->parseRequest();
$_SESSION[$strTableName.'_advsearch'] = serialize($pageObject->searchClauseObj);

// proccess big google maps

// add button events if exist
$pageObject->addButtonHandlers();

//For show detail tables on master page view
$dpParams = array();
if($pageObject->isShowDetailTables && !isMobile())
{
	$ids = $id;
	$dpPermis = $pageObject->getPermissions("pergerakan");
	if ($dpPermis['search']){
		$mKeys["pergerakan"] = $pageObject->pSet->getMasterKeysByDetailTable("pergerakan");
		$dpParams['strTableNames'][] = "pergerakan";
		$dpParams['ids'][] = ++$ids;
	}
	$pageObject->jsSettings['tableSettings'][$strTableName]['dpParams'] = array();
}

//	Before Process event
if($eventObj->exists("BeforeProcessView"))
	$eventObj->BeforeProcessView($conn, $pageObject);
	
//	read current values from the database
$data = $pageObject->getCurrentRecordInternal();

if (!sizeof($data)) {
	header("Location: suratview_list.php?a=return");
	exit();
}

$out = "";
$first = true;
$fieldsArr = array();
$arr = array();
$arr['fName'] = "iid";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("iid");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "pid";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("pid");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "tarikhSurat";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("tarikhSurat");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "tarikhTerima";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("tarikhTerima");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "rujukanSurat";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("rujukanSurat");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "RingkasanKandungan";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("RingkasanKandungan");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "Jenis";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("Jenis");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "kategori";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("kategori");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "bahagian";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("bahagian");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "individu";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("individu");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "jawatan";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("jawatan");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "agensi";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("agensi");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "awam";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("awam");
$fieldsArr[] = $arr;

$mainTableOwnerID = $pageObject->pSet->getTableOwnerIdField();
$ownerIdValue="";

$pageObject->setGoogleMapsParams($fieldsArr);

while($data)
{
	$xt->assign("show_key1", htmlspecialchars($pageObject->showDBValue("sid", $data)));

	$keylink="";
	$keylink.="&key1=".htmlspecialchars(rawurlencode(@$data["sid"]));

////////////////////////////////////////////
//iid - 
	
	$value = $pageObject->showDBValue("iid", $data, $keylink);
	if($mainTableOwnerID=="iid")
		$ownerIdValue=$value;
	$xt->assign("iid_value",$value);
	if(!$pageObject->isAppearOnTabs("iid"))
		$xt->assign("iid_fieldblock",true);
	else
		$xt->assign("iid_tabfieldblock",true);
////////////////////////////////////////////
//pid - 
	
	$value = $pageObject->showDBValue("pid", $data, $keylink);
	if($mainTableOwnerID=="pid")
		$ownerIdValue=$value;
	$xt->assign("pid_value",$value);
	if(!$pageObject->isAppearOnTabs("pid"))
		$xt->assign("pid_fieldblock",true);
	else
		$xt->assign("pid_tabfieldblock",true);
////////////////////////////////////////////
//tarikhSurat - Short Date
	
	$value = $pageObject->showDBValue("tarikhSurat", $data, $keylink);
	if($mainTableOwnerID=="tarikhSurat")
		$ownerIdValue=$value;
	$xt->assign("tarikhSurat_value",$value);
	if(!$pageObject->isAppearOnTabs("tarikhSurat"))
		$xt->assign("tarikhSurat_fieldblock",true);
	else
		$xt->assign("tarikhSurat_tabfieldblock",true);
////////////////////////////////////////////
//tarikhTerima - Short Date
	
	$value = $pageObject->showDBValue("tarikhTerima", $data, $keylink);
	if($mainTableOwnerID=="tarikhTerima")
		$ownerIdValue=$value;
	$xt->assign("tarikhTerima_value",$value);
	if(!$pageObject->isAppearOnTabs("tarikhTerima"))
		$xt->assign("tarikhTerima_fieldblock",true);
	else
		$xt->assign("tarikhTerima_tabfieldblock",true);
////////////////////////////////////////////
//rujukanSurat - 
	
	$value = $pageObject->showDBValue("rujukanSurat", $data, $keylink);
	if($mainTableOwnerID=="rujukanSurat")
		$ownerIdValue=$value;
	$xt->assign("rujukanSurat_value",$value);
	if(!$pageObject->isAppearOnTabs("rujukanSurat"))
		$xt->assign("rujukanSurat_fieldblock",true);
	else
		$xt->assign("rujukanSurat_tabfieldblock",true);
////////////////////////////////////////////
//RingkasanKandungan - 
	
	$value = $pageObject->showDBValue("RingkasanKandungan", $data, $keylink);
	if($mainTableOwnerID=="RingkasanKandungan")
		$ownerIdValue=$value;
	$xt->assign("RingkasanKandungan_value",$value);
	if(!$pageObject->isAppearOnTabs("RingkasanKandungan"))
		$xt->assign("RingkasanKandungan_fieldblock",true);
	else
		$xt->assign("RingkasanKandungan_tabfieldblock",true);
////////////////////////////////////////////
//Jenis - 
	
	$value = $pageObject->showDBValue("Jenis", $data, $keylink);
	if($mainTableOwnerID=="Jenis")
		$ownerIdValue=$value;
	$xt->assign("Jenis_value",$value);
	if(!$pageObject->isAppearOnTabs("Jenis"))
		$xt->assign("Jenis_fieldblock",true);
	else
		$xt->assign("Jenis_tabfieldblock",true);
////////////////////////////////////////////
//kategori - 
	
	$value = $pageObject->showDBValue("kategori", $data, $keylink);
	if($mainTableOwnerID=="kategori")
		$ownerIdValue=$value;
	$xt->assign("kategori_value",$value);
	if(!$pageObject->isAppearOnTabs("kategori"))
		$xt->assign("kategori_fieldblock",true);
	else
		$xt->assign("kategori_tabfieldblock",true);
////////////////////////////////////////////
//bahagian - 
	
	$value = $pageObject->showDBValue("bahagian", $data, $keylink);
	if($mainTableOwnerID=="bahagian")
		$ownerIdValue=$value;
	$xt->assign("bahagian_value",$value);
	if(!$pageObject->isAppearOnTabs("bahagian"))
		$xt->assign("bahagian_fieldblock",true);
	else
		$xt->assign("bahagian_tabfieldblock",true);
////////////////////////////////////////////
//individu - 
	
	$value = $pageObject->showDBValue("individu", $data, $keylink);
	if($mainTableOwnerID=="individu")
		$ownerIdValue=$value;
	$xt->assign("individu_value",$value);
	if(!$pageObject->isAppearOnTabs("individu"))
		$xt->assign("individu_fieldblock",true);
	else
		$xt->assign("individu_tabfieldblock",true);
////////////////////////////////////////////
//jawatan - 
	
	$value = $pageObject->showDBValue("jawatan", $data, $keylink);
	if($mainTableOwnerID=="jawatan")
		$ownerIdValue=$value;
	$xt->assign("jawatan_value",$value);
	if(!$pageObject->isAppearOnTabs("jawatan"))
		$xt->assign("jawatan_fieldblock",true);
	else
		$xt->assign("jawatan_tabfieldblock",true);
////////////////////////////////////////////
//agensi - 
	
	$value = $pageObject->showDBValue("agensi", $data, $keylink);
	if($mainTableOwnerID=="agensi")
		$ownerIdValue=$value;
	$xt->assign("agensi_value",$value);
	if(!$pageObject->isAppearOnTabs("agensi"))
		$xt->assign("agensi_fieldblock",true);
	else
		$xt->assign("agensi_tabfieldblock",true);
////////////////////////////////////////////
//awam - 
	
	$value = $pageObject->showDBValue("awam", $data, $keylink);
	if($mainTableOwnerID=="awam")
		$ownerIdValue=$value;
	$xt->assign("awam_value",$value);
	if(!$pageObject->isAppearOnTabs("awam"))
		$xt->assign("awam_fieldblock",true);
	else
		$xt->assign("awam_tabfieldblock",true);

/////////////////////////////////////////////////////////////
if($pageObject->isShowDetailTables && !isMobile())
{
	if(count($dpParams['ids']))
	{
		$xt->assign("detail_tables",true);
		include('classes/listpage.php');
		include('classes/listpage_embed.php');
		include('classes/listpage_dpinline.php');
	}
	
	$dControlsMap = array();
	
	for($d=0;$d<count($dpParams['ids']);$d++)
	{
		$options = array();
		//array of params for classes
		$options["mode"] = LIST_DETAILS;
		$options["pageType"] = PAGE_LIST;
		$options["masterPageType"] = PAGE_VIEW;
		$options["mainMasterPageType"] = PAGE_VIEW;
		$options['masterTable'] = "suratview";
		$options['firstTime'] = 1;
		
		$strTableName = $dpParams['strTableNames'][$d];
		include_once("include/".GetTableURL($strTableName)."_settings.php");
		if(!CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search"))
		{
			$strTableName = "suratview";
			continue;
		}
		
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
		$options['flyId'] = $pageObject->genId()+1;
		$mkr = 1;
		foreach($mKeys[$strTableName] as $mk)
			$options['masterKeysReq'][$mkr++] = $data[$mk];

		$listPageObject = ListPage::createListPage($strTableName, $options);
		
		// prepare code
		$listPageObject->prepareForBuildPage();
		
		// show page
		if($listPageObject->permis[$strTableName]['search'] && $listPageObject->rowsFound)
		{
			//set page events
			foreach($listPageObject->eventsObject->events as $event => $name)
				$listPageObject->xt->assign_event($event, $listPageObject->eventsObject, $event, array());
			
			//add detail settings to master settings
			$listPageObject->fillSetCntrlMaps();
			$pageObject->jsSettings['tableSettings'][$strTableName]	= $listPageObject->jsSettings['tableSettings'][$strTableName];
			$dControlsMap[$strTableName] = $listPageObject->controlsMap;
			foreach($listPageObject->jsSettings['global']['shortTNames'] as $keySet=>$val)
			{
				if(!array_key_exists($keySet,$pageObject->settingsMap["globalSettings"]['shortTNames']))
					$pageObject->settingsMap["globalSettings"]['shortTNames'][$keySet] = $val;
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
	}
	$pageObject->controlsMap['dControlsMap'] = $dControlsMap;
	$strTableName = "suratview";
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Begin prepare for Next Prev button
if(!@$_SESSION[$strTableName."_noNextPrev"] && !$inlineview && !$pdf)
{
	$pageObject->getNextPrevRecordKeys($data,"Search",$next,$prev);
}
//End prepare for Next Prev button
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


if ($pageObject->googleMapCfg['isUseGoogleMap'])
{
	$pageObject->initGmaps();
}

$pageObject->addCommonJs();

//fill tab groups name and sections name to controls
$pageObject->fillCntrlTabGroups();

if(!$inlineview)
{
	$pageObject->body["begin"].="<script type=\"text/javascript\" src=\"include/loadfirst.js\"></script>\r\n";
		$pageObject->body["begin"].= "<script type=\"text/javascript\" src=\"include/lang/".getLangFileName(mlang_getcurrentlang()).".js\"></script>";		
	
	$pageObject->jsSettings['tableSettings'][$strTableName]["keys"] = $pageObject->jsKeys;
	$pageObject->jsSettings['tableSettings'][$strTableName]['keyFields'] = $pageObject->keyFields;
	$pageObject->jsSettings['tableSettings'][$strTableName]["prevKeys"] = $prev;
	$pageObject->jsSettings['tableSettings'][$strTableName]["nextKeys"] = $next; 
	
	// assign body end
	$pageObject->body['end'] = array();
	$pageObject->body['end']["method"] = "assignBodyEnd";
	$pageObject->body['end']["object"] = &$pageObject;
	
	$xt->assign("body",$pageObject->body);
	$xt->assign("flybody",true);
}
else
{
	$xt->assign("footer",false);
	$xt->assign("header",false);
	$xt->assign("flybody",$pageObject->body);
	$xt->assign("body",true);
	$xt->assign("pdflink_block",false);
	
	$pageObject->fillSetCntrlMaps();
	
	$returnJSON['controlsMap'] = $pageObject->controlsHTMLMap;
	$returnJSON['viewControlsMap'] = $pageObject->viewControlsHTMLMap;
	$returnJSON['settings'] = $pageObject->jsSettings;
}
$xt->assign("style_block",true);
$xt->assign("stylefiles_block",true);

$editlink="";
$editkeys=array();
	$editkeys["editid1"]=postvalue("editid1");
foreach($editkeys as $key=>$val)
{
	if($editlink)
		$editlink.="&";
	$editlink.=$key."=".$val;
}
$xt->assign("editlink_attrs","id=\"editLink".$id."\" name=\"editLink".$id."\" onclick=\"window.location.href='suratview_edit.php?".$editlink."'\"");

$strPerm = GetUserPermissions($strTableName);
if(CheckSecurity($ownerIdValue,"Edit") && !$inlineview && strpos($strPerm, "E")!==false)
	$xt->assign("edit_button",true);
else
	$xt->assign("edit_button",false);

if(!$pdf && !$all && !$inlineview)
{
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Begin show Next Prev button
	$nextlink=$prevlink="";
	if(count($next))
	{
		$xt->assign("next_button",true);
	 		$nextlink .="editid1=".htmlspecialchars(rawurlencode($next[1-1]));
		$xt->assign("nextbutton_attrs","id=\"nextButton".$id."\"");
	}
	else 
		$xt->assign("next_button",false);
	if(count($prev))
	{
		$xt->assign("prev_button",true);
			$prevlink .="editid1=".htmlspecialchars(rawurlencode($prev[1-1]));
		$xt->assign("prevbutton_attrs","id=\"prevButton".$id."\"");
	}
	else 
		$xt->assign("prev_button",false);
//End show Next Prev button
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	$xt->assign("back_button",true);
	$xt->assign("backbutton_attrs","id=\"backButton".$id."\"");
}

$oldtemplatefile = $pageObject->templatefile;

if(!$all)
{
	if($eventObj->exists("BeforeShowView"))
	{
		$templatefile = $pageObject->templatefile;
		$eventObj->BeforeShowView($xt,$templatefile,$data, $pageObject);
		$pageObject->templatefile = $templatefile;
	}
	if(!$pdf)
	{
		if(!$inlineview)
			$xt->display($pageObject->templatefile);
		else{
				$xt->load_template($pageObject->templatefile);
				$returnJSON['html'] = $xt->fetch_loaded('style_block').$xt->fetch_loaded('body');
				if(count($pageObject->includes_css))
					$returnJSON['CSSFiles'] = array_unique($pageObject->includes_css);
				if(count($pageObject->includes_cssIE))
					$returnJSON['CSSFilesIE'] = array_unique($pageObject->includes_cssIE);				
				$returnJSON['idStartFrom'] = $id+1;
				$returnJSON["additionalJS"] = $pageObject->grabAllJsFiles();
				echo (my_json_encode($returnJSON)); 
			}
	}
	break;
}
}


?>
