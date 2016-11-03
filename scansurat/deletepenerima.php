<?php

     $siid = $_GET['siid'];
     include 'config.php';

     	//get the info form table
     
 // $sql ="SELECT * FROM surat_individu where siid = $siid";
//	$qid = mysql_query($sql);
//	$data = mysql_fetch_array($qid);
	
//	shell_exec("del edocument\\$data[tahun]\\$data[bulan]\\$data[nama]");

//  echo "del edocument\\$data[tahun]\\$data[bulan]\\$data[nama]";



  $sql ="delete from surat_individu where siid = $siid";
	mysql_query($sql);
	

?>


<script>
      history.go(-1);
</script>