<?php
include "config.php";
        
session_start();

                $siid  = mysql_real_escape_string($_GET['siid']);
                $catatan  = ucfirst ( mysql_real_escape_string($_GET['catatan']));

  //update.
  $sql = "UPDATE surat_individu set Catatan = '$catatan' WHERE siid=". $siid. "  LIMIT 1";
  mysql_query($sql);

 //echo $sql;
  
 echo "<script>window.history.go(-1)</script>";
  exit;

            
?>   