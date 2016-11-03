<?php
include("../include/dbcommon.php");
include "config.php";        
//session_start();

                $status  = mysql_real_escape_string($_GET['status']);
                $sid = $_SESSION['sid'];
                $iid = $_SESSION['iid'];
  //update.
  $sql = "UPDATE surat_individu set Status= '$status' WHERE sid= '$sid' AND  Penerima= '$iid' LIMIT 5";
  mysql_query($sql);

 // echo $sql;
 // exit;
 
 echo "<script>window.history.go(-1)</script>";
  exit;
             
            
?>                                                                 