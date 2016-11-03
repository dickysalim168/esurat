<?php
include "config.php";
error_reporting(0);
?>
<html>
 <head>

     <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
          <link href="css/bootstrap-responsive.css" rel="stylesheet" media="screen">
           
  
 <!-- JS CALENDAR Start -->
    <!-- calendar stylesheet -->
    <link rel="stylesheet" type="text/css" media="all" href="jscalendar/style.css" title="Blue">
    <!-- main calendar program -->
    <script type="text/javascript" src="jscalendar/calendar.js"></script>
    <script type="text/javascript" src="jscalendar/calendar-en.js"></script>
    <!-- the following script defines the Calendar.setup helper function, which makes
           adding a calendar a matter of 1 or 2 lines of code. -->
    <script type="text/javascript" src="jscalendar/calendar-setup.js"></script>
<!-- JS CALENDAR COMPLETE -->
    
 <link rel="stylesheet" href="table.css" type="text/css" media="screen" />
 
 <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Laporan Sistem Aduan</title>

<script type="text/javascript" src="tabber.js"></script>
<link rel="stylesheet" href="example.css" TYPE="text/css" MEDIA="screen">
<link rel="stylesheet" href="example-print.css" TYPE="text/css" MEDIA="print">

<script type="text/javascript">

/* Optional: Temporarily hide the "tabber" class so it does not "flash"
   on the page as plain HTML. After tabber runs, the class is changed
   to "tabberlive" and it will appear. */

document.write('<style type="text/css">.tabber{display:none;}<\/style>');
</script>

 </head>
 
<body>
<div class="container-fluid">
<h1>Laporan Aduan PTGS</h1>
<hr>
<div class="row-fluid">
<div class="span2">
 
    <?php
    include "menu.php";
    ?>
    </div>
    
  <div class="span10">
<form method='get' action='laporan_surat_generate.php'>



<?php

  if(empty($_GET['from']))
 {
     $_GET['from'] = "01-01-2009";
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

  
<p><b>SUMBER PENERIMAAN ADUAN</b></p>  
PILIH TARIKH <br>   
Dari : 

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

Hingga 
 
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
 <?php
  echo "<br>";
   echo "<input type='submit' value='Papar'>";
  echo " (<a href='index.php'>Set Semula</a>)";

?> 
</form>
<br><br>

<form method='get' action='sumbertahun.php'>
PILIH TAHUN
<br>
Tahun :

<select name='year'>
<option value='2009' selected>2009</option>
<option value='2010' >2010</option>
<option value='2011' >2011</option>
<option value='2012' >2012</option>
<option value='2013' >2013</option>
<option value='2014' >2014</option>
<option value='2015' >2015</option>
</select>

<br>
  <input type='submit' value='Papar'>
(<a href='index.php'>Set Semula</a>)
 
</form>


</div>
</div>
</div>



</body>
</html>