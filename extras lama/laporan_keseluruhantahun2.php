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
<title>Laporan Sistem eSurat</title>

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
<h1>Laporan Sistem eSurat</h1>
<hr>
<div class="row-fluid">
<div class="span2">
 
    <?php
    include "menu.php";
    ?>
    </div>
    
  <div class="span10">

 <p><b>Laporan Keseluruhan Pendaftaran Sistem PTGS Mengikut Tahun</b></p>  


<form method='get' action='laporan_keseluruhantahun_generate2.php'>
PILIH TAHUN
<br>
Tahun :

<select name='year'>
<option value='2013' selected>2013</option>
<option value='2014' >2014</option>
<option value='2015' >2015</option>
</select>

<br> 

<?php

 
  if(empty($_GET['from']))
 {
     $_GET['from'] = "01-01-2009";
 }
 
  if(empty($_GET['to']))
 {
     $_GET['to'] = date('d-m-Y');
 }
 


?> 
 

<br>
  <input type='submit' value='Papar'>
(<a href='laporan_keseluruhantahun.php'>Set Semula</a>)
 
</form>

</div>
</div>
</div>



</body>
</html>