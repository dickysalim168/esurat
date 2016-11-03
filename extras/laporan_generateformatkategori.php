<?php
include "config.php";
error_reporting(0);


if($_GET['format'] == 'html')
{

include "laporankategori_papar.php";  

}

if($_GET['format'] == "excel")
{

include "laporankategori_generate.php";
   
}





?>
