<?php
include "config.php";

header("Content-Type: application/vnd.ms-word");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("content-disposition: attachment;filename=LaporanSurat.doc");


echo "<html>";
echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=Windows-1252\">";
echo "<body>";


   $sql = "SELECT * FROM surat_jenis ";  
   $qid = mysql_query($sql);   
   while($data = mysql_fetch_array($qid))
   {
        $jenis[$data['jid']] = $data['jenis'];
   }
   

  
$to = date("Y-m-d", strtotime($_GET['to']));
$from = date("Y-m-d", strtotime($_GET['from']));  

?>

<h3><b>LAPORAN JUMLAH SURAT DARI TEMPOH <?php echo date("d/m/Y",strtotime($_GET['from'])) ;?> HINGGA <?php echo date("d/m/Y",strtotime($_GET['to']));?></b></h3>
                                  

                                          <table width="100%" border="1" CELLSPACING="1" CELLPADDING="1" align ="center">
                                            <tr bgcolor='#FF8E01' >
                                              <td>Bil</td>
                                              <td>Tarikh Surat</td>
                                              <td>Tarikh Terima</td>
                                              <td>No. Rujukan Surat</td>
                                              <td width="400">Ringkasan Kandungan</td>
                                              <td>Jenis</td>
                                              <td>Kategori</td>
                                            </tr>
                                            
                                            <?php   
                                              $i = 1;
                                            $sql = "SELECT * from surat WHERE tarikhTerima >= '$from' AND tarikhTerima <= '$to'";                                            
                                            $qid = mysql_query($sql);

                                            while($data = mysql_fetch_array($qid))
                                            {
                                            
                                            ?>
                                            <tr>
                                              <td><?php echo $i++ ?>&nbsp;</td>
                                              <td><?php echo date("d/m/Y",strtotime($data['tarikhSurat'])) ?>&nbsp;</td>
                                              <td><?php echo date("d/m/Y",strtotime($data['tarikhTerima'])) ?>&nbsp;</td>
                                              <td><?php echo $data['rujukanSurat'] ?>&nbsp;</td>
                                              <td><?php echo $data['RingkasanKandungan'] ?>&nbsp;</td>
                                              <td><?php echo $jenis[$data['Jenis']] ?>&nbsp;</td>
                                              <td><?php echo $data['kategori'] ?>&nbsp;</td>
                                            </tr>
                                            
                                            <?php
                                            }
                                            
                                            ?>
                                          </table>
                                    
                                    <?php
                                     
echo "</body>";
echo "</html>";

                                    ?>