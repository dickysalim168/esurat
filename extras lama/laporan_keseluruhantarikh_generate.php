<?php
include "config.php";

header("Content-Type: application/vnd.ms-word");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("content-disposition: attachment;filename=LaporanKeseluruhanTarikh.doc");


echo "<html>";
echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=Windows-1252\">";
echo "<body>";

  
$to = date("Y-m-d", strtotime($_GET['to']));
$from = date("Y-m-d", strtotime($_GET['from']));  

?>

<h3><b>Laporan Keseluruhan Penerima Surat PTGS Dari <?php echo date("d/m/Y",strtotime($_GET['from'])) ;?> Hingga <?php echo date("d/m/Y",strtotime($_GET['to']));?></b></h3>
                                                                      

<table width="700" border="1" CELLSPACING="0" CELLPADDING="0">
 <tr bgcolor='#FF8E01'  align='center'>
    <td width="58">Bil</td>
    <td width="260">Bahagian</td>
    <td width="160">Jumlah Kemasukkan</td>
  </tr>
  
  <?php
  $i = 1;
   $total = 0;
  $sql = "SELECT * FROM pejawatan_ref_department ORDER BY name"; 
  $qid = mysql_query($sql);
  while($data = mysql_fetch_array($qid))
  {
  
  ?>
  <tr  align='center'>
    <td><?php echo $i++  ?>&nbsp;</td>
    <td><?php echo $data['name']  ?>&nbsp;</td>
    <td>
    <?php

       // $sql2 = "SELECT count(1) FROM surat WHERE bahagian = '$data[name]' AND tarikhTerima >= '$from' AND tarikhTerima  <= '$to'"; 
$sql2 ="SELECT count(1) FROM 
	`surat_individu`, `pejawatan_staffdetails` WHERE
	`surat_individu`.`Penerima` = `pejawatan_staffdetails`.staff_id
	AND
	`surat_individu`.Tarikh >= '$from'
	AND
	`surat_individu`.Tarikh  <= '$to'
	AND
	`pejawatan_staffdetails`.dept_id = $data[id]
	";

        $qid2 = mysql_query($sql2);
        $data2 = mysql_fetch_array($qid2);
     

//echo $sql2;
     echo $data2['count(1)'];
     
     $total += $data2['count(1)']; 
    ?>  
    &nbsp;
    </td>
  </tr>
  <?php
  }
  ?>
    <tr align='center'>
    <td colspan="2"><b>Jumlah Keseluruhan</b></td>
    <td><b>
    <?php
    echo $total   
    ?>
    &nbsp;
    </b></td>
  </tr>  
</table>


                                    
<?php
                                     
echo "</body>";
echo "</html>";

?>