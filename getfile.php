<?php 
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");
session_cache_limiter("none");


include("include/dbcommon.php");


$table = postvalue("table");
$strTableName = GetTableByShort($table);

if (!checkTableName($table))
{
	exit(0);
}

include("include/".$table."_variables.php");


if(!isLogged() || !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search"))
{ 
	return;
}

$strFilename= postvalue("filename");
$ext=substr($strFilename,strlen($strFilename)-4);

$ctype = getContentTypeByExtension($ext);

$field = postvalue("field");
if(!$gSettings->checkFieldPermissions($field))
	exit();

if(!$gQuery->HasGroupBy())
{
	// Do not select any fields except current (file) field.
	// If query has 'group by' clause then other fields are used in it and we may not simply cut 'em off.
	// Just don't do anything in that case.
	$gQuery->RemoveAllFieldsExcept($gSettings->getFieldIndex($field));
}


//	construct sql
$keysArr = $gSettings->getTableKeys();
$keys = array();
foreach ($keysArr as $ind=>$k)
{	
	$keys[$k]=postvalue("key".($ind+1));
}
$where=KeyWhere($keys);

if ($gSettings->getAdvancedSecurityType() == ADVSECURITY_VIEW_OWN)
{
	$where=whereAdd($where,SecuritySQL("Search"));	
}


$sql = $gQuery->gSQLWhere($where);

$rs = db_query($sql,$conn);
if(!$rs || !($data=db_fetch_array($rs)))
{
	return;
}
$value=db_stripslashesbinary($data[$field]);
header("Content-Type: ".$ctype);
header("Content-Disposition: attachment;Filename=\"".$strFilename."\"");
header("Cache-Control: private");
SendContentLength(strlen_bin($value));
echoBinary($value);
return;

?>
