<?php
include "config.php";


	$fileTempName = $_FILES['RemoteFile']['tmp_name'];	
	$fileSize = $_FILES['RemoteFile']['size'];
	$fileName = $_FILES['RemoteFile']['name'];
	

$sid = $_GET['sid'];
$Imbas = $_GET['Imbas'];



$uploaddir = '../upload/';
$uploadfile = $uploaddir . $Imbas;

echo "<p>";

if (move_uploaded_file($fileTempName, $uploadfile)) 
{
     $sql = "UPDATE surat SET Imbas = '$Imbas' WHERE sid = '$sid'";
     mysql_query($sql);

     exit;
  
} 
else 
{
   echo "Upload failed";
}


