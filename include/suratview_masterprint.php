<?php
include_once(getabspath("include/suratview_settings.php"));

function DisplayMasterTableInfo_suratview($params)
{
	$detailtable=$params["detailtable"];
	$keys=$params["keys"];
	global $conn,$strTableName;
	$xt = new Xtempl();
	
	$oldTableName=$strTableName;
	$strTableName="suratview";

//$strSQL = "SELECT  surat.sid,  surat.tarikhTerima,  surat.Jenis,  surat.awam,  surat.agensi,  surat.bahagian,  surat.individu,  surat.jawatan,  surat.kategori,  surat.rujukanSurat,  surat.RingkasanKandungan,  surat.tarikhSurat,  surat_individu.Status as status,  surat_individu.iid,  pengguna.pid,  surat.Imbas,  surat.pendaftar  FROM surat_individu  , surat  , pengguna  WHERE (surat.sid = surat_individu.sid) AND (surat_individu.iid = pengguna.iid)  ";

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
$layout->blocks["bare"][] = "mastergrid";$page_layouts["suratview_masterprint"] = $layout;


$showKeys = "";
if($detailtable=="PergerakanSurat")
{
		$where.= GetFullFieldName("sid", "", false)."=".$cipherer->MakeDBValue("sid",$keys[1-1], "", "", true);
	$showKeys .= " "."Pilihan".": ".$keys[1-1];
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
	$keylink.="&key1=".htmlspecialchars(rawurlencode(@$data["sid"]));
	


//	sid - Custom
			$xt->assign("sid_mastervalue", $viewControls->showDBValue("sid", $data, $keylink));

//	tarikhTerima - Short Date
			$xt->assign("tarikhTerima_mastervalue", $viewControls->showDBValue("tarikhTerima", $data, $keylink));

//	Jenis - 
			$xt->assign("Jenis_mastervalue", $viewControls->showDBValue("Jenis", $data, $keylink));

//	awam - 
			$xt->assign("awam_mastervalue", $viewControls->showDBValue("awam", $data, $keylink));

//	agensi - 
			$xt->assign("agensi_mastervalue", $viewControls->showDBValue("agensi", $data, $keylink));

//	bahagian - 
			$xt->assign("bahagian_mastervalue", $viewControls->showDBValue("bahagian", $data, $keylink));

//	individu - 
			$xt->assign("individu_mastervalue", $viewControls->showDBValue("individu", $data, $keylink));

//	jawatan - 
			$xt->assign("jawatan_mastervalue", $viewControls->showDBValue("jawatan", $data, $keylink));

//	kategori - 
			$xt->assign("kategori_mastervalue", $viewControls->showDBValue("kategori", $data, $keylink));

//	rujukanSurat - 
			$xt->assign("rujukanSurat_mastervalue", $viewControls->showDBValue("rujukanSurat", $data, $keylink));

//	RingkasanKandungan - 
			$xt->assign("RingkasanKandungan_mastervalue", $viewControls->showDBValue("RingkasanKandungan", $data, $keylink));

//	tarikhSurat - Short Date
			$xt->assign("tarikhSurat_mastervalue", $viewControls->showDBValue("tarikhSurat", $data, $keylink));

//	status - 
			$xt->assign("status_mastervalue", $viewControls->showDBValue("status", $data, $keylink));

//	pendaftar - 
			$xt->assign("pendaftar_mastervalue", $viewControls->showDBValue("pendaftar", $data, $keylink));
	$xt->display("suratview_masterprint.htm");
	$strTableName=$oldTableName;

}

?>