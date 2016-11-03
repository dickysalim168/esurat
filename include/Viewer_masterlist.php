<?php
include_once(getabspath("include/Viewer_settings.php"));

function DisplayMasterTableInfo_Viewer($params)
{
	$detailtable = $params["detailtable"];
	$keys = $params["keys"];
	global $conn,$strTableName;
	$xt = new Xtempl();
	$oldTableName = $strTableName;
	$strTableName = "Viewer";
	
	$settings = new ProjectSettings($strTableName, PAGE_LIST);
	$cipherer = new RunnerCipherer($strTableName);
	
	$masterQuery = $settings->getSQLQuery();
	
	$viewControls = new ViewControlsContainer($settings, PAGE_LIST);

$where = "";
$mKeys = array();
$showKeys = "";

global $page_styles, $page_layouts, $page_layout_names, $container_styles;

$layout = new TLayout("masterlist","Purific1Aqua","MobileAqua");
$layout->blocks["bare"] = array();
$layout->containers["0"] = array();

$layout->containers["0"][] = array("name"=>"masterlistheader","block"=>"","substyle"=>1);


$layout->skins["0"] = "empty";
$layout->blocks["bare"][] = "0";
$layout->containers["mastergrid"] = array();

$layout->containers["mastergrid"][] = array("name"=>"masterlistfields","block"=>"","substyle"=>1);


$layout->skins["mastergrid"] = "grid";
$layout->blocks["bare"][] = "mastergrid";$page_layouts["Viewer_masterlist"] = $layout;


if($detailtable == "surat_individu")
{
		$where.= GetFullFieldName("sid", "", false)."=".$cipherer->MakeDBValue("sid",$keys[1-1], "", "", true);
	$showKeys .= " "."Sid".": ".$keys[1-1];
	$xt->assign('showKeys',$showKeys);
}
	if(!$where)
	{
		$strTableName = $oldTableName;
		return;
	}
	$str = SecuritySQL("Search");
	if(strlen($str))
		$where.= " and ".$str;

	$strWhere = whereAdd($masterQuery->WhereToSql(),$where);
	if(strlen($strWhere))
		$strWhere = " where ".$strWhere." ";
	$strSQL = $masterQuery->HeadToSql().' '.$masterQuery->FromToSql().$strWhere.$masterQuery->TailToSql();

//	$strSQL = AddWhere($strSQL,$where);
	LogInfo($strSQL);
	$rs = db_query($strSQL,$conn);
	$data = $cipherer->DecryptFetchedArray($rs);
	if(!$data)
	{
		$strTableName = $oldTableName;
		return;
	}
	$keylink = "";
	$keylink.="&key1=".htmlspecialchars(rawurlencode(@$data["siid"]));
	


//	siid - Custom
			$value="";
	
			$xt->assign("siid_mastervalue", $viewControls->showDBValue("siid", $data, $keylink));

//	Tarikh - Short Date
			$value="";
	
			$xt->assign("Tarikh_mastervalue", $viewControls->showDBValue("Tarikh", $data, $keylink));

//	sid - 
			$value="";
	
			$xt->assign("sid_mastervalue", $viewControls->showDBValue("sid", $data, $keylink));

//	Penghantar - 
			$value="";
	
			$xt->assign("Penghantar_mastervalue", $viewControls->showDBValue("Penghantar", $data, $keylink));

//	Penerima - 
			$value="";
	
			$xt->assign("Penerima_mastervalue", $viewControls->showDBValue("Penerima", $data, $keylink));

//	Catatan - 
			$value="";
	
			$xt->assign("Catatan_mastervalue", $viewControls->showDBValue("Catatan", $data, $keylink));

//	Status - 
			$value="";
	
			$xt->assign("Status_mastervalue", $viewControls->showDBValue("Status", $data, $keylink));

	$layout = GetPageLayout("Viewer", 'masterlist');
	if($layout)
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');
	
	$xt->display("Viewer_masterlist.htm");
	
	$strTableName=$oldTableName;
}

?>