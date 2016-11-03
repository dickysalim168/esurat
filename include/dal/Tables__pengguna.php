<?php
$dalTablepengguna = array();
$dalTablepengguna["pid"] = array("type"=>3,"varname"=>"pid");
$dalTablepengguna["NoKP"] = array("type"=>200,"varname"=>"NoKP");
$dalTablepengguna["Password"] = array("type"=>200,"varname"=>"Password");
$dalTablepengguna["Email"] = array("type"=>200,"varname"=>"Email");
$dalTablepengguna["Nama"] = array("type"=>200,"varname"=>"Nama");
$dalTablepengguna["Bahagian"] = array("type"=>3,"varname"=>"Bahagian");
$dalTablepengguna["Jawatan"] = array("type"=>3,"varname"=>"Jawatan");
$dalTablepengguna["Level"] = array("type"=>3,"varname"=>"Level");
$dalTablepengguna["iid"] = array("type"=>3,"varname"=>"iid");
$dalTablepengguna["Status"] = array("type"=>200,"varname"=>"Status");
	$dalTablepengguna["pid"]["key"]=true;

$dal_info["Tables__pengguna"] = &$dalTablepengguna;
?>