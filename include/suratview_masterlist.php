<?php
include_once(getabspath("include/suratview_settings.php"));

function DisplayMasterTableInfo_suratview($params)
{
	$detailtable = $params["detailtable"];
	$keys = $params["keys"];
	global $conn,$strTableName;
	$xt = new Xtempl();
	$oldTableName = $strTableName;
	$strTableName = "suratview";
	
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
$layout->blocks["bare"][] = "mastergrid";$page_layouts["suratview_masterlist"] = $layout;


if($detailtable == "PergerakanSurat")
{
		$where.= GetFullFieldName("sid", "", false)."=".$cipherer->MakeDBValue("sid",$keys[1-1], "", "", true);
	$showKeys .= " "."Pilihan".": ".$keys[1-1];
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
	$keylink.="&key1=".htmlspecialchars(rawurlencode(@$data["sid"]));
	


//	sid - Custom
			$value="";
	
			$xt->assign("sid_mastervalue", $viewControls->showDBValue("sid", $data, $keylink));

//	tarikhTerima - Short Date
			$value="";
	
			$xt->assign("tarikhTerima_mastervalue", $viewControls->showDBValue("tarikhTerima", $data, $keylink));

//	Jenis - 
			$value="";
	
			$xt->assign("Jenis_mastervalue", $viewControls->showDBValue("Jenis", $data, $keylink));

//	awam - 
			$value="";
	
			$xt->assign("awam_mastervalue", $viewControls->showDBValue("awam", $data, $keylink));

//	agensi - 
			$value="";
	
			$xt->assign("agensi_mastervalue", $viewControls->showDBValue("agensi", $data, $keylink));

//	bahagian - 
			$value="";
	
			$xt->assign("bahagian_mastervalue", $viewControls->showDBValue("bahagian", $data, $keylink));

//	individu - 
			$value="";
	
			$xt->assign("individu_mastervalue", $viewControls->showDBValue("individu", $data, $keylink));

//	jawatan - 
			$value="";
	
			$xt->assign("jawatan_mastervalue", $viewControls->showDBValue("jawatan", $data, $keylink));

//	kategori - 
			$value="";
	
			$xt->assign("kategori_mastervalue", $viewControls->showDBValue("kategori", $data, $keylink));

//	rujukanSurat - 
			$value="";
	
			$xt->assign("rujukanSurat_mastervalue", $viewControls->showDBValue("rujukanSurat", $data, $keylink));

//	RingkasanKandungan - 
			$value="";
	
			$xt->assign("RingkasanKandungan_mastervalue", $viewControls->showDBValue("RingkasanKandungan", $data, $keylink));

//	tarikhSurat - Short Date
			$value="";
	
			$xt->assign("tarikhSurat_mastervalue", $viewControls->showDBValue("tarikhSurat", $data, $keylink));

//	status - 
			$value="";
	
			$xt->assign("status_mastervalue", $viewControls->showDBValue("status", $data, $keylink));

//	pendaftar - 
			$value="";
	
			$xt->assign("pendaftar_mastervalue", $viewControls->showDBValue("pendaftar", $data, $keylink));

	$layout = GetPageLayout("suratview", 'masterlist');
	if($layout)
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');
	
	$xt->display("suratview_masterlist.htm");
	
	$strTableName=$oldTableName;
}

?>