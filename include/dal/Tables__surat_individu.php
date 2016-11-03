<?php
$dalTablesurat_individu = array();
$dalTablesurat_individu["siid"] = array("type"=>3,"varname"=>"siid");
$dalTablesurat_individu["Tarikh"] = array("type"=>135,"varname"=>"Tarikh");
$dalTablesurat_individu["sid"] = array("type"=>3,"varname"=>"sid");
$dalTablesurat_individu["Penghantar"] = array("type"=>3,"varname"=>"Penghantar");
$dalTablesurat_individu["Minit"] = array("type"=>201,"varname"=>"Minit");
$dalTablesurat_individu["Penerima"] = array("type"=>3,"varname"=>"Penerima");
$dalTablesurat_individu["Catatan"] = array("type"=>201,"varname"=>"Catatan");
$dalTablesurat_individu["Status"] = array("type"=>3,"varname"=>"Status");
$dalTablesurat_individu["Email_Status"] = array("type"=>3,"varname"=>"Email_Status");
	$dalTablesurat_individu["siid"]["key"]=true;

$dal_info["Tables__surat_individu"] = &$dalTablesurat_individu;
?>