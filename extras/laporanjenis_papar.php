<?php

include 'config.php';

//error_reporting(0);

 /*
header("Content-Type: application/vnd.ms-word");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("content-disposition: attachment;filename=LaporanMengikutKategori.doc");
 */

?>

<html xmlns:v="urn:schemas-microsoft-com:vml"
xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:w="urn:schemas-microsoft-com:office:word"
xmlns:m="http://schemas.microsoft.com/office/2004/12/omml"
xmlns="http://www.w3.org/TR/REC-html40">
<head><meta http-equiv=Content-Type content="text/html; charset=utf-8"><title></title>
<style>
v\:* {behavior:url(#default#VML);}
o\:* {behavior:url(#default#VML);}
w\:* {behavior:url(#default#VML);}
.shape {behavior:url(#default#VML);}
</style>
<style>
@page
{
    mso-page-orientation: landscape;
    size:29.7cm 21cm;    margin:1cm 1cm 1cm 1cm;
}
@page Section1 {
    mso-header-margin:.5in;
    mso-footer-margin:.5in;
    mso-header: h1;
    mso-footer: f1;
    }
div.Section1 { page:Section1; }

p.MsoFooter, li.MsoFooter, div.MsoFooter
{
    margin:0in;
    margin-bottom:.0001pt;
    mso-pagination:widow-orphan;
    tab-stops:center 3.0in right 6.0in;
    font-size:12.0pt;
}


</style>
<xml>
<w:WordDocument>
<w:View></w:View>
<w:Zoom></w:Zoom>
<w:DoNotOptimizeForBrowser/>
</w:WordDocument>
</xml>
</head>

                   
                   <body lang=EN-US style='tab-interval:.5in'>
                   
                            <div class=Section1>
                            
                            
                            
                            
        <center>        

<?php
$to = date("Y-m-d", strtotime($_GET['to']));
$from = date("Y-m-d", strtotime($_GET['from']));  

$dari = date("d/m/Y",strtotime($_GET['from']));

$hingga = date("d/m/Y",strtotime($_GET['to']));  

$jenis = $_GET['jenis'];

if($_GET['jenis'] == 'Semua')
{
 $jenis2 = " ";
}
else
{
 $jenis2 = " AND Jenis = '".$_GET['jenis']."'";
}


//translator

$sql = "SELECT * from pejawatan_staffdetails";
$qid = mysql_query($sql);
while($data = mysql_fetch_array($qid))
{
$pendaftar[$data['staff_id']] = $data['name'];
}

$sqlx = "SELECT * from surat_jenis";
$qidx = mysql_query($sqlx);
while($datax = mysql_fetch_array($qidx))
{
$jenist[$datax['jid']] = $datax['jenis'];
}

?>

<div align="center"> <h3>
    <?php
    
     echo "PEJABAT DAERAH/TANAH SEPANG <br>";
     echo "L2 : Laporan Surat Mengikut Jenis <br>";
     echo "Jenis: ".$jenist[$jenis]."<br>";
     echo "Dari $dari hingga $hingga";
     
     ?>
    
</h3> </div>
<table width="100%" border="1" cellpadding="0" cellspacing="0">
   <tr bgcolor="#FF7C80">
    <td height="20" width="28"><b>Bil</b></td>
    <td width="140"><b>Status</b></td>
    <td width="130"><b>Tarikh Kemasukan</b></td>
    <td width="105"><b>Tarikh Surat</b></td>
    <td width="105"><b>Tarikh Terima</b>&nbsp;</td>
    <td width="175"><b>Pendaftar</b></td>
    <td width="91"><b>No. Rujukan</b></td>
    <td width="105"><b>Jenis</b></td>
    <td width="350"><b>Perkara</b>&nbsp;</td>
    <td><b>Pilihan</b> &nbsp;</td>
  </tr>
 <?php
$i = 1;
      $sql="SELECT * FROM surat WHERE tarikhKemasukkan >= '$from 00:00:00' AND tarikhKemasukkan <= '$to' $jenis2"; 
      $qid = mysql_query($sql);
      while($data = mysql_fetch_array($qid))
      {   

$kemasukan = date("d-m-Y",strtotime($data['tarikhKemasukkan']));
$terima = date("d-m-Y",strtotime($data['tarikhSurat']));
$surat = date("d-m-Y",strtotime($data['tarikhTerima']));

if($data["TindakanTotal"] == '' || $data["TindakanTotal"] == 'Belum Selesai')
{
$TindakanTotal = " <font color='red'>Belum Selesai</font> ";

}
else
{
$TindakanTotal = " <font color='green'> Selesai</font> ";

}


?> 
  <tr height="20">
    <td height="20" align="laporanjenis_papar"><?php echo $i++ ?>.</td>
    <td><?php echo $TindakanTotal ?></td>
    <td><?php echo $kemasukan ?></td>
    <td><?php echo $surat ?></td>
    <td><?php echo $terima ?></td>
    <td><?php echo $pendaftar[$data['pendaftar']] ?></td>
    <td><?php echo $data['rujukanSurat'] ?></td>
    <td><?php echo $jenist[$data['Jenis']] ?></td>
    <td><?php echo $data['RingkasanKandungan'] ?></td>
    <?php
      if(isset($data['Imbas']))
      {
    ?>
    <td><a href="../upload/<?php echo $data['Imbas'] ?>" target="_blank">Lihat Surat</a></td>
    <?php
       }
       else
       {
   ?>
     <td>Tiada Surat</td>
   <?php    
       }
    ?>
  </tr>

<?php
}


//count semua
      $sql2 ="SELECT count(1) FROM surat WHERE tarikhKemasukkan >= '$from 00:00:00' AND tarikhKemasukkan <= '$to' $jenis2"; 
      $qid2 = mysql_query($sql2);
      $data2 = mysql_fetch_array($qid2);

      $semua = $data2['count(1)'];

//count selesai
      $sql3 ="SELECT count(1) FROM surat WHERE tarikhKemasukkan >= '$from 00:00:00' AND tarikhKemasukkan <= '$to' $jenis2   AND TindakanTotal = 'Selesai'"; 
      $qid3 = mysql_query($sql3);
      $data3 = mysql_fetch_array($qid3);

      $selesai = $data3['count(1)'];
      
//count belum selesai
if($semua == '0')
{
$belumselesai = '0';
}
else
{
$belumselesai = $semua - $selesai;       
}  

?>
</table>

<h3 align="left">Bilangan Surat</h3>
<table align="left" style="width:30%" border="1" cellpadding="0" cellspacing="0">
  <tr  >
    <td width="50%"><font color='red'><b>Belum Selesai</b></font></td>
    <td align="right"><?php echo $belumselesai ?> &nbsp;</td>
  </tr>
  <tr>
    <td><font color='green'> <b>Selesai</b></font></td>
    <td align="right"><?php echo $selesai ?> &nbsp;</td>
  </tr>
<tr bgcolor="#A6A6A6">
    <td><b>Jumlah</b></td>
    <td align="right"><b><?php echo $semua ?> </b>&nbsp;</td>
  </tr>
</table>

                                    
                                    <?php
                                     
echo "</body>";
echo "</html>";

?>
