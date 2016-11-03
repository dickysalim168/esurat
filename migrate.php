<?php
     //migrate
      mysql_connect("localhost","root","");
      mysql_select_db("esurat");
     
     $sql = "select * from surat";
     $qid =  mysql_query($sql);
      
     echo "start now.";
     while($surat = mysql_fetch_array($qid))
     {
           //get original surat_individu
                $sql2 = "select * from surat_individu where sid = $surat[sid]";
                 $qid2 =  mysql_query($sql2);
                        //echo $sql2;
                        // exit; 
                 while($individu = mysql_fetch_array($qid2))
                 {
                       //get catatan
                        $sql3 = "select * from pergerakan where sid = $surat[sid] AND daripada_bahagian = $individu[iid]";
                        $qid3 =  mysql_query($sql3);

                        $pergerakan = mysql_fetch_array($qid3);
                        
                        //first stage penerima ready
                          $Tarikh = $surat['tarikhTerima'];
                          $sid = $surat['sid'];
                          $Penghantar  = $surat['pendaftar'];
                          $Penerima  = $individu['iid'];
                          $Catatan = $pergerakan['catatan'];
                          $Status = $surat['status'];
                        // key in.
                        $sql4="     
                              INSERT INTO ptg_esurat.`surat_individu`(
                              `siid` ,
                              `Tarikh` ,
                              `sid` ,
                              `Penghantar` ,
                              `Minit` ,
                              `Penerima` ,
                              `Catatan` ,
                              `Status` ,
                              `Email_Status`
                              )
                              VALUES (
                              NULL , '$Tarikh', '$sid', '$Penghantar', '', '$Penerima', '$Catatan', '$Status' , ''
                              );
                              
                              ";
                              
                         //  echo $sql4;
                        //   exit;   
                               
                          mysql_query($sql4);
                          
                          
                        //start second level insertion.
                        $sql3 = "select * from pergerakan where sid = $surat[sid] AND daripada_bahagian = $individu[iid]";
                        $qid3 =  mysql_query($sql3);
                        while($pergerakan = mysql_fetch_array($qid3))
                        {
                              $sql5 = "select * from pergerakanbahagian where pid = $pergerakan[sid]";
                              $qid5 =  mysql_query($sql5);
                              while($pergerakanbahagian = mysql_fetch_array($qid5))
                              {
                                //ready final insertion
                                $Tarikh       = $surat['tarikhTerima'];
                                $sid          = $surat['sid'];
                                $Penghantar   = $pergerakan['daripada_bahagian'];
                                $Penerima     = $pergerakanbahagian['KepadaBahagian'];
                                $Minit        = $pergerakan['catatan'];
                                $Status       = $surat['status'];
                                
                                     $sql6="     
                                    INSERT INTO ptg_esurat.`surat_individu`(
                                    `siid` ,
                                    `Tarikh` ,
                                    `sid` ,
                                    `Penghantar` ,
                                    `Minit` ,
                                    `Penerima` ,
                                    `Catatan` ,
                                    `Status` ,
                                    `Email_Status`
                                    )
                                    VALUES (
                                    NULL , '$Tarikh', '$sid', '$Penghantar', '$Minit', '$Penerima', '', '$Status' , ''
                                    );
                                    
                                    "; 
                                   mysql_query($sql6);
                              }
                        }
                        
                 }
                 
     }
       echo "<br>Done now.";   
?>