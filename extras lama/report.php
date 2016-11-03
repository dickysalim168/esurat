<html>
 <head>
 <style>
    body {
    font-family : arial;
    background-image:url('arrow.jpg');
background-repeat:no-repeat;
background-attachment:fixed;
background-position:right top; 
    }
 </style>
 
 <link rel="stylesheet" href="table.css" type="text/css" media="screen" />

 </head>
 
 <body>
 
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


<h1>Laporan Sistem eSurat </h1>


<form method='get' action='laporan_generate.php'>

      PILIH JENIS LAPORAN :
      <select name="jenis">
      <option value='a' selected>Laporan Senarai Surat</option>
      <option value='b' >Laporan Bilangan Surat</option>

      </select>
      <br>  <br> 

<?php
include "config.php";
 

 
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

 
  
  echo "TARIKH :";
  echo "<br>";
  ?>
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
  echo "<br>";
   echo "<input type='submit' value='Papar'>";


  
  echo "</form><hr>";

?> 
<br><br>
<div align='right'><input type='button' value='[x] Tutup Laporan' onclick='window.close();'></div>

<br>

<p align="center">
<b><font color=black> &copy;  <?php echo date("Y");?> Copyright Pejabat Tanah dan Galian Selangor. All Rights Reserved.</font></b></p>

