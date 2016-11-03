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



?>

<h3><b>Laporan Keseluruhan Pendaftaran Surat Tahun <?php echo $year ?></b></h3>
                             
                                       
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
    
      $sql = "SELECT count(1) FROM surat WHERE tarikhTerima >= '$year-01-01' AND tarikhTerima <= '$year-01-31'"; 
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
      $sql = "SELECT count(1) FROM surat WHERE  tarikhTerima >= '$year-02-01' AND tarikhTerima <= '$year-02-29'"; 
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
      $sql = "SELECT count(1) FROM surat WHERE tarikhTerima >= '$year-03-01' AND tarikhTerima <= '$year-03-31'"; 
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
      $sql = "SELECT count(1) FROM surat WHERE tarikhTerima >= '$year-04-01' AND tarikhTerima <= '$year-04-30'"; 
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
      $sql = "SELECT count(1) FROM surat WHERE tarikhTerima >= '$year-05-01' AND tarikhTerima <= '$year-05-31'"; 
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
      $sql = "SELECT count(1) FROM surat WHERE tarikhTerima >= '$year-06-01' AND tarikhTerima <= '$year-06-30'"; 
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
      $sql = "SELECT count(1) FROM surat WHERE tarikhTerima >= '$year-07-01' AND tarikhTerima <= '$year-07-31'"; 
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
      $sql = "SELECT count(1) FROM surat WHERE tarikhTerima >= '$year-08-01' AND tarikhTerima <= '$year-08-31'"; 
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
      $sql = "SELECT count(1) FROM surat WHERE tarikhTerima >= '$year-09-01' AND tarikhTerima <= '$year-09-30'"; 
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
      $sql = "SELECT count(1) FROM surat WHERE tarikhTerima >= '$year-10-01' AND tarikhTerima <= '$year-10-31'"; 
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
      $sql = "SELECT count(1) FROM surat WHERE tarikhTerima >= '$year-11-01' AND tarikhTerima <= '$year-11-30'"; 
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
      $sql = "SELECT count(1) FROM surat WHERE tarikhTerima >= '$year-12-01' AND tarikhTerima <= '$year-12-31'"; 
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
      $sql = "SELECT count(1) FROM surat WHERE tarikhTerima >= '$year-01-01' AND tarikhTerima <= '$year-12-31'"; 
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