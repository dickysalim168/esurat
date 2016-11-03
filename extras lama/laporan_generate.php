<?php
include "config.php";
error_reporting(0);


if($_GET['jenis'] == "a")
{

include "laporan_surat_2.php";
   
}


if($_GET['jenis'] == "b")
{

include "laporan_bilangan.php";
   
}

if($_GET['jenis'] == "c")
{

include "laporan_kemasukkan.php";
   
}


if($_GET['jenis'] == "d")
{

include "laporan_keseluruhantahun.php";
   
}

if($_GET['jenis'] == "d2")
{

include "laporan_keseluruhantahun2.php";
   
}

if($_GET['jenis'] == "e")
{

include "laporan_keseluruhantarikh.php";
   
}



?>
