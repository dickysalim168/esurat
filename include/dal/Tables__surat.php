<?php
$dalTablesurat = array();
$dalTablesurat["sid"] = array("type"=>3,"varname"=>"sid");
$dalTablesurat["tarikhTerima"] = array("type"=>7,"varname"=>"tarikhTerima");
$dalTablesurat["Jenis"] = array("type"=>3,"varname"=>"Jenis");
$dalTablesurat["awam"] = array("type"=>3,"varname"=>"awam");
$dalTablesurat["agensi"] = array("type"=>3,"varname"=>"agensi");
$dalTablesurat["bahagian"] = array("type"=>200,"varname"=>"bahagian");
$dalTablesurat["individu"] = array("type"=>3,"varname"=>"individu");
$dalTablesurat["jawatan"] = array("type"=>200,"varname"=>"jawatan");
$dalTablesurat["kategori"] = array("type"=>200,"varname"=>"kategori");
$dalTablesurat["rujukanSurat"] = array("type"=>200,"varname"=>"rujukanSurat");
$dalTablesurat["RingkasanKandungan"] = array("type"=>201,"varname"=>"RingkasanKandungan");
$dalTablesurat["tarikhSurat"] = array("type"=>7,"varname"=>"tarikhSurat");
$dalTablesurat["status"] = array("type"=>200,"varname"=>"status");
$dalTablesurat["Imbas"] = array("type"=>201,"varname"=>"Imbas");
$dalTablesurat["pendaftar"] = array("type"=>3,"varname"=>"pendaftar");
$dalTablesurat["tarikhKemasukkan"] = array("type"=>7,"varname"=>"tarikhKemasukkan");
$dalTablesurat["TindakanTotal"] = array("type"=>200,"varname"=>"TindakanTotal");
	$dalTablesurat["sid"]["key"]=true;

$dal_info["Tables__surat"] = &$dalTablesurat;
?>