<?php
include "config.php";
error_reporting(0);


if($_GET['format'] == 'html')
{

include "laporanjenis_papar.php"; 

}

if($_GET['format'] == "excel")
{

include "laporanjenis_generate.php";
   
}





?>
