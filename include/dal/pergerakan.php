<?php
$dalTablepergerakan = array();
$dalTablepergerakan["pid"] = array("type"=>3,"varname"=>"pid");
$dalTablepergerakan["tarikh"] = array("type"=>7,"varname"=>"tarikh");
$dalTablepergerakan["daripada_bahagian"] = array("type"=>3,"varname"=>"daripada_bahagian");
$dalTablepergerakan["kepada_bahagian"] = array("type"=>3,"varname"=>"kepada_bahagian");
$dalTablepergerakan["catatan"] = array("type"=>200,"varname"=>"catatan");
$dalTablepergerakan["sid"] = array("type"=>3,"varname"=>"sid");
	$dalTablepergerakan["pid"]["key"]=true;
$dal_info["pergerakan"]=&$dalTablepergerakan;

?>