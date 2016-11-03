<?php
include_once(getabspath("include/PergerakanSurat_settings.php"));

function DisplayMasterTableInfo_PergerakanSurat($params)
{
	$detailtable=$params["detailtable"];
	$keys=$params["keys"];
	global $conn,$strTableName;
	$xt = new Xtempl();
	
	$oldTableName=$strTableName;
	$strTableName="PergerakanSurat";

//$strSQL = "SELECT pid,   tarikh,   daripada_bahagian,   kepada_bahagian,   catatan,   sid  FROM pergerakan ";

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
$layout->blocks["bare"][] = "mastergrid";$page_layouts["PergerakanSurat_masterprint"] = $layout;


$showKeys = "";
if($detailtable=="pergerakanbahagian")
{
		$where.= GetFullFieldName("pid", "", false)."=".$cipherer->MakeDBValue("pid",$keys[1-1], "", "", true);
	$showKeys .= " "."Pid".": ".$keys[1-1];
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
	$keylink.="&key1=".htmlspecialchars(rawurlencode(@$data["pid"]));
	


//	tarikh - Short Date
			$xt->assign("tarikh_mastervalue", $viewControls->showDBValue("tarikh", $data, $keylink));

//	daripada_bahagian - Custom
			$xt->assign("daripada_bahagian_mastervalue", $viewControls->showDBValue("daripada_bahagian", $data, $keylink));

//	kepada_bahagian - Custom
			$xt->assign("kepada_bahagian_mastervalue", $viewControls->showDBValue("kepada_bahagian", $data, $keylink));

//	catatan - 
			$xt->assign("catatan_mastervalue", $viewControls->showDBValue("catatan", $data, $keylink));
	$xt->display("PergerakanSurat_masterprint.htm");
	$strTableName=$oldTableName;

}

?>