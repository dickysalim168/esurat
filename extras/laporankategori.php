<?php
include "config.php";
error_reporting(0);
?>
<html>
 <head>

         
  
 <!-- JS CALENDAR Start -->
    <!-- calendar stylesheet -->
    <link rel="stylesheet" type="text/css" media="all" href="extras/jscalendar/style.css" title="Blue">
    <!-- main calendar program -->
    <script type="text/javascript" src="extras/jscalendar/calendar.js"></script>
    <script type="text/javascript" src="extras/jscalendar/calendar-en.js"></script>
    <!-- the following script defines the Calendar.setup helper function, which makes
           adding a calendar a matter of 1 or 2 lines of code. -->
    <script type="text/javascript" src="extras/jscalendar/calendar-setup.js"></script>
<!-- JS CALENDAR COMPLETE -->
    
 <link rel="stylesheet" href="table.css" type="text/css" media="screen" />
 
 <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Laporan Sistem eSurat</title>

<!-- Meta Tags -->
<meta charset="utf-8">
<meta name="generator" content="Wufoo">
<meta name="robots" content="index, follow">

<!-- CSS -->
<link href="css/structure.css" rel="stylesheet">
<link href="css/form.css" rel="stylesheet">

<!-- JavaScript -->
<script src="scripts/wufoo.js"></script>

 </head>
 
<body>
<div class="container-fluid">
<div class="row-fluid">

    
  <div class="span10">
<form method='get' action='laporan_generateformatkategori.php'>



<?php

        if(empty($_GET['from']))
       {
           $_GET['from'] = "01-01-2016";
       }
       
        if(empty($_GET['to']))
       {
           $_GET['to'] = date('d-m-Y');
       }
  //time
  $fromt  =  date("d M Y",strtotime($_GET['from']));
  $tot    =  date("d M Y",strtotime($_GET['to']));
  $time = "Dari <b>$fromt</b> hingga <b>$tot</b>";

  ?>

  
<p><b>Laporan Surat Mengikut Kategori</b></p>  
<b>PILIH TARIKH <b><br>   
Dari &nbsp; &nbsp; : 

<input name="from" id="from" type="text" value="<?php echo $_GET['from']?>"/>
<button type="reset" id="from_b">...</button>
<script type="text/javascript">
    Calendar.setup({
        inputField     :    "from",      // id of the input field
        ifFormat       :    "%d-%m-%Y",       // format of the input field
        button         :    "from_b",   // trigger for the calendar (button ID)
        singleClick    :    false,           // double-click mode
        step           :    1                // show all years in drop-down boxes (instead of every other year as default)
    });
</script> 
<br>
Hingga : 
 
<input name="to" id="to" type="text" value="<?php echo $_GET['to']?>"/>
<button type="reset" id="to_b">...</button>
<script type="text/javascript">
    Calendar.setup({
        inputField     :    "to",      // id of the input field
        ifFormat       :    "%d-%m-%Y",       // format of the input field
        button         :    "to_b",   // trigger for the calendar (button ID)
        singleClick    :    false,           // double-click mode
        step           :    1                // show all years in drop-down boxes (instead of every other year as default)
    });
</script> 


<br><br>

PILIH KATEGORI
<br>
Kategori &nbsp; &nbsp;: 

		<select name="kategori" class="kategori">
 	  
		  <?php
		$sql="SELECT * FROM drop_kategori";
		$qid = mysql_query($sql);

		while($data = mysql_fetch_array($qid))
		{
			echo '<option value="'.$data['Kategori'].'">'.$data['Kategori'].'</option>';
			
		}
      echo '<option value="Semua">Semua</option>';
		?>
	  
		</select>

 <?php
  echo "<br><br>";
  ?>

      PILIH FORMAT LAPORAN :
      <br>
      <select name="format">
      <option value='html' selected>HTML</option>
      <option value='excel' >Microsoft Excel</option>
      </select>
      <br><br>

  <?php
     echo "<input type='submit' value='Jana Laporan'>";
  echo " (<a href='laporankategori_generate.php'>Set Semula</a>)";

?>

</form>
<br>


</div>
</div>
</div>



</body>
</html>