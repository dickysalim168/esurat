<?php
include_once(getabspath("include/bahagian_agensi_settings.php"));

function DisplayMasterTableInfo_bahagian_agensi($params)
{
	$detailtable = $params["detailtable"];
	$keys = $params["keys"];
	global $conn,$strTableName;
	$xt = new Xtempl();
	$oldTableName = $strTableName;
	$strTableName = "bahagian_agensi";
	
	$settings = new ProjectSettings($strTableName, PAGE_LIST);
	$cipherer = new RunnerCipherer($strTableName);
	
	$masterQuery = $settings->getSQLQuery();
	
	$viewControls = new ViewControlsContainer($settings, PAGE_LIST);

$where = "";
$mKeys = array();
$showKeys = "";

global $page_styles, $page_layouts, $page_layout_names, $container_styles;

$layout = new TLayout("masterlist","PurificAqua","MobileAqua");
$layout->blocks["bare"] = array();
$layout->containers["0"] = array();

$layout->containers["0"][] = array("name"=>"masterlistheader","block"=>"","substyle"=>1);


$layout->skins["0"] = "empty";
$layout->blocks["bare"][] = "0";
$layout->containers["mastergrid"] = array();

$layout->containers["mastergrid"][] = array("name"=>"masterlistfields","block"=>"","substyle"=>1);


$layout->skins["mastergrid"] = "grid";
$layout->blocks["bare"][] = "mastergrid";$page_layouts["bahagian_agensi_masterlist"] = $layout;


if($detailtable == "individu")
{
		$where.= GetFullFieldName("baid", "", false)."=".$cipherer->MakeDBValue("baid",$keys[1-1], "", "", true);
	$showKeys .= " "."Baid".": ".$keys[1-1];
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
	$keylink.="&key1=".htmlspecialchars(rawurlencode(@$data["baid"]));
	


//	jid - 
			$value="";
	
			$xt->assign("jid_mastervalue", $viewControls->showDBValue("jid", $data, $keylink));

//	namaBahagian - 
			$value="";
	
			$xt->assign("namaBahagian_mastervalue", $viewControls->showDBValue("namaBahagian", $data, $keylink));

	$layout = GetPageLayout("bahagian_agensi", 'masterlist');
	if($layout)
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');
	
	$xt->display("bahagian_agensi_masterlist.htm");
	
	$strTableName=$oldTableName;
}

?>