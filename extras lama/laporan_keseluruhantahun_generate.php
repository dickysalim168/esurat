<?php
include "config.php";

header("Content-Type: application/vnd.ms-word");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("content-disposition: attachment;filename=LaporanKeseluruhan.doc");


echo "<html>";
echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=Windows-1252\">";
echo "<body>";


$year = $_GET['year'];

$bahagian = $_GET['bahagian'];

 $sqlx = "SELECT * FROM pejawatan_ref_department where id = $bahagian ";
 $qidx = mysql_query($sqlx);
 $datax= mysql_fetch_array($qidx);


?>

<h3><b>Laporan Penerima Sistem Surat Tahun <?php echo $year ?></b></h3>
<h3><b>Bahagian : <?php echo $datax['name']?></b></h3>                                  
                                       
<table width="600" border="1" CELLSPACING="0" CELLPADDING="0">
                                          <tr bgcolor='#FF8E01' >
    <td width="64">Bil</td>
    <td width="248">Bulan</td>
    <td width="166">Jumlah Kemasukkan Surat</td>
  </tr>
  <tr align='center'>
    <td>1.</td>
    <td>Jan</td>
    <td>
    <?php
    
      $sql = "SELECT count(1) FROM 
	`surat_individu`, `pejawatan_staffdetails` WHERE
	`surat_individu`.`Penerima` = `pejawatan_staffdetails`.staff_id
	AND
	`surat_individu`.Tarikh >= '$year-01-01'
	AND
	`surat_individu`.Tarikh  <= '$year-01-31'
	AND
	`pejawatan_staffdetails`.dept_id = $bahagian 	";

      $qid = mysql_query($sql);
      $data = mysql_fetch_array($qid);
      //echo $sql;
      //exit; 
    echo $data['count(1)']    
    ?>
    &nbsp;
    </td>
  </tr>
  <tr align='center'>
    <td>2.</td>
    <td>Feb</td>
    <td>
    <?php
      $sql = "SELECT count(1) FROM 
	`surat_individu`, `pejawatan_staffdetails` WHERE
	`surat_individu`.`Penerima` = `pejawatan_staffdetails`.staff_id
	AND
	`surat_individu`.Tarikh >= '$year-02-01'
	AND
	`surat_individu`.Tarikh  <= '$year-02-31'
	AND
	`pejawatan_staffdetails`.dept_id = $bahagian 	";
      $qid = mysql_query($sql);
      $data = mysql_fetch_array($qid);
     // echo $sql;
     // exit; 
    echo $data['count(1)']    
    ?>
    &nbsp;
    </td>
  </tr>
  <tr align='center'>
    <td>3.</td>
    <td>Mac</td>
    <td>
    <?php
      $sql = "SELECT count(1) FROM 
	`surat_individu`, `pejawatan_staffdetails` WHERE
	`surat_individu`.`Penerima` = `pejawatan_staffdetails`.staff_id
	AND
	`surat_individu`.Tarikh >= '$year-03-01'
	AND
	`surat_individu`.Tarikh  <= '$year-03-31'
	AND
	`pejawatan_staffdetails`.dept_id = $bahagian 
	";
      $qid = mysql_query($sql);
      $data = mysql_fetch_array($qid);
     // echo $sql;
     // exit; 
    echo $data['count(1)']    
    ?>
    &nbsp;
    </td>
  </tr>
  <tr align='center'>
    <td>4.</td>
    <td>Apr</td>
    <td>
    <?php
      $sql = "SELECT count(1) FROM 
	`surat_individu`, `pejawatan_staffdetails` WHERE
	`surat_individu`.`Penerima` = `pejawatan_staffdetails`.staff_id
	AND
	`surat_individu`.Tarikh >= '$year-04-01'
	AND
	`surat_individu`.Tarikh  <= '$year-04-31'
	AND
	`pejawatan_staffdetails`.dept_id = $bahagian 	";
      $qid = mysql_query($sql);
      $data = mysql_fetch_array($qid);
     // echo $sql;
     // exit; 
    echo $data['count(1)']    
    ?>
    &nbsp;
    </td>
  </tr>
  <tr align='center'>
    <td>5.</td>
    <td>Mei</td>
    <td>
    <?php
      $sql = "SELECT count(1) FROM 
	`surat_individu`, `pejawatan_staffdetails` WHERE
	`surat_individu`.`Penerima` = `pejawatan_staffdetails`.staff_id
	AND
	`surat_individu`.Tarikh >= '$year-05-01'
	AND
	`surat_individu`.Tarikh  <= '$year-05-31'
	AND
	`pejawatan_staffdetails`.dept_id = $bahagian 	";
      $qid = mysql_query($sql);
      $data = mysql_fetch_array($qid);
     // echo $sql;
     // exit; 
    echo $data['count(1)']    
    ?>
    &nbsp;
    </td>
  </tr>
  <tr align='center'>
    <td>6.</td>
    <td>Jun</td>
    <td>
    <?php
      $sql = "SELECT count(1) FROM 
	`surat_individu`, `pejawatan_staffdetails` WHERE
	`surat_individu`.`Penerima` = `pejawatan_staffdetails`.staff_id
	AND
	`surat_individu`.Tarikh >= '$year-06-01'
	AND
	`surat_individu`.Tarikh  <= '$year-06-31'
	AND
	`pejawatan_staffdetails`.dept_id = $bahagian 	";
      $qid = mysql_query($sql);
      $data = mysql_fetch_array($qid);
     // echo $sql;
     // exit; 
    echo $data['count(1)']    
    ?>
    &nbsp;
    </td>
  </tr>
  <tr align='center'>
    <td>7.</td>
    <td>Jul</td>
    <td>
    <?php
      $sql = "SELECT count(1) FROM 
	`surat_individu`, `pejawatan_staffdetails` WHERE
	`surat_individu`.`Penerima` = `pejawatan_staffdetails`.staff_id
	AND
	`surat_individu`.Tarikh >= '$year-07-01'
	AND
	`surat_individu`.Tarikh  <= '$year-07-31'
	AND
	`pejawatan_staffdetails`.dept_id = $bahagian 	";
      $qid = mysql_query($sql);
      $data = mysql_fetch_array($qid);
     // echo $sql;
     // exit; 
    echo $data['count(1)']    
    ?>
    &nbsp;
    </td>
  </tr>
  <tr align='center'>
    <td>8.</td>
    <td>Aug</td>
    <td>
    <?php
      $sql = "SELECT count(1) FROM 
	`surat_individu`, `pejawatan_staffdetails` WHERE
	`surat_individu`.`Penerima` = `pejawatan_staffdetails`.staff_id
	AND
	`surat_individu`.Tarikh >= '$year-08-01'
	AND
	`surat_individu`.Tarikh  <= '$year-08-31'
	AND
	`pejawatan_staffdetails`.dept_id = $bahagian 	";
      $qid = mysql_query($sql);
      $data = mysql_fetch_array($qid);
     // echo $sql;
     // exit; 
    echo $data['count(1)']    
    ?>
    &nbsp;
    </td>
  </tr>
  <tr align='center'>
    <td>9.</td>
    <td>Sept</td>
    <td>
    <?php
      $sql = "SELECT count(1) FROM 
	`surat_individu`, `pejawatan_staffdetails` WHERE
	`surat_individu`.`Penerima` = `pejawatan_staffdetails`.staff_id
	AND
	`surat_individu`.Tarikh >= '$year-09-01'
	AND
	`surat_individu`.Tarikh  <= '$year-09-31'
	AND
	`pejawatan_staffdetails`.dept_id = $bahagian 	";
      $qid = mysql_query($sql);
      $data = mysql_fetch_array($qid);
     // echo $sql;
     // exit; 
    echo $data['count(1)']    
    ?>
    &nbsp;
    </td>
  </tr>
  <tr align='center'>
    <td>10.</td>
    <td>Okt</td>
    <td>
    <?php
      $sql = "SELECT count(1) FROM 
	`surat_individu`, `pejawatan_staffdetails` WHERE
	`surat_individu`.`Penerima` = `pejawatan_staffdetails`.staff_id
	AND
	`surat_individu`.Tarikh >= '$year-10-01'
	AND
	`surat_individu`.Tarikh  <= '$year-10-31'
	AND
	`pejawatan_staffdetails`.dept_id = $bahagian 	";
      $qid = mysql_query($sql);
      $data = mysql_fetch_array($qid);
     // echo $sql;
     // exit; 
    echo $data['count(1)']    
    ?>
    &nbsp;
    </td>
  </tr>
  <tr align='center'>
    <td>11.</td>
    <td>Nov</td>
    <td>
    <?php
      $sql = "SELECT count(1) FROM 
	`surat_individu`, `pejawatan_staffdetails` WHERE
	`surat_individu`.`Penerima` = `pejawatan_staffdetails`.staff_id
	AND
	`surat_individu`.Tarikh >= '$year-11-01'
	AND
	`surat_individu`.Tarikh  <= '$year-11-31'
	AND
	`pejawatan_staffdetails`.dept_id = $bahagian 	";
      $qid = mysql_query($sql);
      $data = mysql_fetch_array($qid);
     // echo $sql;
     // exit; 
    echo $data['count(1)']    
    ?>
    &nbsp;
    </td>
  </tr>
  <tr align='center'>
    <td>12.</td>
    <td>Dec</td>
    <td>
    <?php
      $sql = "SELECT count(1) FROM 
	`surat_individu`, `pejawatan_staffdetails` WHERE
	`surat_individu`.`Penerima` = `pejawatan_staffdetails`.staff_id
	AND
	`surat_individu`.Tarikh >= '$year-12-01'
	AND
	`surat_individu`.Tarikh  <= '$year-12-31'
	AND
	`pejawatan_staffdetails`.dept_id = $bahagian 	";
      $qid = mysql_query($sql);
      $data = mysql_fetch_array($qid);
     // echo $sql;
     // exit; 
    echo $data['count(1)']    
    ?>
    &nbsp;
    </td>
  </tr>
   <tr align='center'>
    <td colspan="2"><b>Jumlah Keseluruhan</b></td>
    <td><b>
    <?php
      $sql = "SELECT count(1) FROM 
	`surat_individu`, `pejawatan_staffdetails` WHERE
	`surat_individu`.`Penerima` = `pejawatan_staffdetails`.staff_id
	AND
	`surat_individu`.Tarikh >= '$year-01-01'
	AND
	`surat_individu`.Tarikh  <= '$year-12-31'
	AND
	`pejawatan_staffdetails`.dept_id = $bahagian 	";
      $qid = mysql_query($sql);
      $data = mysql_fetch_array($qid);
     // echo $sql;
     // exit; 
    echo $data['count(1)']    
    ?>
    &nbsp;
    </b></td>
  </tr>  
</table>


                                    
<?php
                                     
echo "</body>";
echo "</html>";

?>