<?php
include("../include/dbcommon.php");

include("../extras/config.php");

$path = "../upload/";

$year_folder = $path . date("Y");
$month_folder = $year_folder . '/' . date("m");

!file_exists($year_folder) && mkdir($year_folder , 0777);
!file_exists($month_folder) && mkdir($month_folder, 0777);

$path = $month_folder .'/'.$_GET['f'];
    
$file = 'raw/'.$_GET['f'];    


if (!copy($file, $path)) {
    echo "failed to copy $file...\n";
}
else
{

//update imbas table
$sid = $_SESSION['sid'];

$Imbas =  date("Y"). '/' . date("m").'/'.$_GET['f'];


     $sql = "UPDATE surat SET Imbas = '$Imbas' WHERE sid = '$sid'";
    
  //  echo $sql;
 //   exit;
    
     mysql_query($sql);

     
//remove raw file after copy
if (is_file($file))
  {
    unlink($file);
  }

  

echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Salinan surat asal telah berjaya dimasukkan')
        window.opener.location.reload(true);
        window.close();
    </SCRIPT>");
    
    
    
}
 
?>
