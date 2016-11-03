<?php
include "config.php";
        
session_start();

                $siid  = mysql_real_escape_string($_GET['siid']);

  //update.
  $sql = "DELETE FROM `surat_individu` WHERE `surat_individu`.`siid` = $siid";
   mysql_query($sql);
   
 // echo $sql;
// exit;
 
 echo "<script>window.history.go(-1)</script>";
  exit;

            
?>   