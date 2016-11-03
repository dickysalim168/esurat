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

<h3><b>LAPORAN BILANGAN SURAT DARI TEMPOH <?php echo date("d/m/Y",strtotime($_GET['from'])) ;?> HINGGA <?php echo date("d/m/Y",strtotime($_GET['to']));?></b></h3>
                                  
                                           <p>Jumlah Kemasukkan Surat Mengikut Status</p>
                                          <table width="600" border="1">
                                          <tr bgcolor='#FF8E01' >
                                            <td>Status Surat</td>
                                            <td>Bilangan Kemasukkan</td>
                                          </tr>
                                          <?php
                                          $total = 0;
                                            $sql = "SELECT * from status";                                            
                                            $qid = mysql_query($sql);

                                            while($data = mysql_fetch_array($qid))
                                            {
                                            
                                          
                                          ?>
                                          <tr>
                                            <td><?php echo $data['status'] ?>&nbsp;</td>
                                            <td>
                                            
                                             <?php
                                            $sql2 = "SELECT count(1) FROM surat, surat_individu WHERE surat.sid = surat_individu.sid AND surat_individu.Status = $data[stid] AND surat.tarikhTerima >= '$from' AND surat.tarikhTerima <= '$to'";                                            
                                            $qid2 = mysql_query($sql2);
                                            //echo $sql2;
                                            //exit;
                                            $data2 = mysql_fetch_array($qid2);
                                          
                                            echo $data2['count(1)'];
                                            
                                            $total += $data2['count(1)'];
                                             ?>
                                             &nbsp;
                                            </td>
                                          </tr>
                                          <?php
                                            }
                                            
                                          ?>
                                           <tr>
                                              <td align='right'>TOTAL</td>
                                              <td><b><?php echo $total ?></b> &nbsp;</td>
                                           </tr>
                                        </table>
                                        
                                        
<br><br>


                                           <p>Jumlah Kemasukkan Surat Mengikut Jenis</p>
                                          <table width="600" border="1">
                                          <tr bgcolor='#FF8E01' >
                                            <td>Status Surat</td>
                                            <td>Bilangan Kemasukkan</td>
                                          </tr>
                                          <?php
                                          $total = 0;
                                            $sql = "SELECT * from surat_jenis";                                            
                                            $qid = mysql_query($sql);

                                            while($data = mysql_fetch_array($qid))
                                            {
                                            
                                          
                                          ?>
                                          <tr>
                                            <td><?php echo $data['jenis'] ?>&nbsp;</td>
                                            <td>
                                            
                                             <?php
                                            $sql2 = "SELECT count(1) from surat WHERE tarikhTerima >= '$from' AND tarikhTerima <= '$to' AND Jenis = $data[jid]";                                              
                                            $qid2 = mysql_query($sql2);
                                            //echo $sql2;
                                            //exit;
                                            $data2 = mysql_fetch_array($qid2);
                                          
                                            echo $data2['count(1)'];
                                            
                                            $total += $data2['count(1)'];
                                             ?>
                                             &nbsp;
                                            </td>
                                          </tr>
                                          <?php
                                            }
                                            
                                          ?>
                                           <tr>
                                              <td align='right'>TOTAL</td>
                                              <td><b><?php echo $total ?></b> &nbsp;</td>
                                           </tr>
                                        </table>
                                    
                                    <?php
                                     
echo "</body>";
echo "</html>";

                                    ?>