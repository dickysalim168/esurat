<?php

     $did = $_GET['did'];
     include 'config.php';

     	//get the info form table
     
  $sql ="SELECT * FROM document where did = $did";
	$qid = mysql_query($sql);
	$data = mysql_fetch_array($qid);
	
	shell_exec("del edocument\\$data[tahun]\\$data[bulan]\\$data[nama]");

//  echo "del edocument\\$data[tahun]\\$data[bulan]\\$data[nama]";



  $sql ="delete from document where did = $did";
	mysql_query($sql);
	

?>


<script>
      history.go(-1);
</script>