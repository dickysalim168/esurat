<?php
include "config.php";
        
session_start();

                $siid  = mysql_real_escape_string($_GET['siid']);
                $minit  = ucfirst ( mysql_real_escape_string($_GET['minit']));

  //update.
  $sql = "UPDATE surat_individu set Minit = '$minit' WHERE siid=". $siid. "  LIMIT 1";
  mysql_query($sql);

 // echo $sql;
                                                              
 echo "<script>window.history.go(-1)</script>";
  exit;

            
?>   