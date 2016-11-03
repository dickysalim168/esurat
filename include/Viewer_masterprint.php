<?php
include_once(getabspath("include/Viewer_settings.php"));

function DisplayMasterTableInfo_Viewer($params)
{
	$detailtable=$params["detailtable"];
	$keys=$params["keys"];
	global $conn,$strTableName;
	$xt = new Xtempl();
	
	$oldTableName=$strTableName;
	$strTableName="Viewer";

//$strSQL = "SELECT  siid,  Tarikh,  sid,  Penghantar,  Penerima,  Catatan,  Status,  Email_Status  FROM surat_individu  ORDER BY Tarikh DESC  ";

	$cipherer = new RunnerCipherer($strTableName);
	$settings = new ProjectSettings($strTableName, PAGE_PRINT);
	
	$masterQuery = $settings->getSQLQuery();
	$viewControls = new ViewControlsContainer($settings, PAGE_PRINT);

$where="";

global $pageObject, $page_styles, $page_layouts, $page_layout_names, $container_styles;
$layout = new TLayout("masterprint","Purific1Aqua","MobileAqua");
$layout->blocks["bare"] = array();
$layout->containers["0"] = array();

$layout->containers["0"][] = array("name"=>"masterprintheader","block"=>"","substyle"=>1);


$layout->skins["0"] = "empty";
$layout->blocks["bare"][] = "0";
$layout->containers["mastergrid"] = array();

$layout->containers["mastergrid"][] = array("name"=>"masterprintfields","block"=>"","substyle"=>1);


$layout->skins["mastergrid"] = "grid";
$layout->blocks["bare"][] = "mastergrid";$page_layouts["Viewer_masterprint"] = $layout;


$showKeys = "";
if($detailtable=="surat_individu")
{
		$where.= GetFullFieldName("sid", "", false)."=".$cipherer->MakeDBValue("sid",$keys[1-1], "", "", true);
	$showKeys .= " "."Sid".": ".$keys[1-1];
	$xt->assign('showKeys',$showKeys);
	
}
if(!$where)
{
	$strTableName=$oldTableName;
	return;
}
	$str = SecuritySQL("Export");
	if(strlen($str))
		$where.=" and ".$str;
	
	$strWhere = whereAdd($masterQuery->m_where->toSql($masterQuery),$where);
	if(strlen($strWhere))
		$strWhere=" where ".$strWhere." ";
	$strSQL = $masterQuery->HeadToSql().' '.$masterQuery->FromToSql().$strWhere.$masterQuery->TailToSql();

//	$strSQL=AddWhere($strSQL,$where);

	LogInfo($strSQL);
	$rs=db_query($strSQL,$conn);
	$data = $cipherer->DecryptFetchedArray($rs);
	if(!$data)
	{
		$strTableName=$oldTableName;
		return;
	}
	$keylink="";
	$keylink.="&key1=".htmlspecialchars(rawurlencode(@$data["siid"]));
	


//	siid - Custom
			$xt->assign("siid_mastervalue", $viewControls->showDBValue("siid", $data, $keylink));

//	Tarikh - Short Date
			$xt->assign("Tarikh_mastervalue", $viewControls->showDBValue("Tarikh", $data, $keylink));

//	sid - 
			$xt->assign("sid_mastervalue", $viewControls->showDBValue("sid", $data, $keylink));

//	Penghantar - 
			$xt->assign("Penghantar_mastervalue", $viewControls->showDBValue("Penghantar", $data, $keylink));

//	Penerima - 
			$xt->assign("Penerima_mastervalue", $viewControls->showDBValue("Penerima", $data, $keylink));

//	Catatan - 
			$xt->assign("Catatan_mastervalue", $viewControls->showDBValue("Catatan", $data, $keylink));

//	Status - 
			$xt->assign("Status_mastervalue", $viewControls->showDBValue("Status", $data, $keylink));
	$xt->display("Viewer_masterprint.htm");
	$strTableName=$oldTableName;

}

?>