<?php

include 'config.php';


$subject = 'Perkara....';



// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers


//send email


//get daripada
$sql = "SELECT * FROM 
surat a,
jenis b,
jawatan c,
bahagian_agensi d 
WHERE
a.dariJenis = b.jid
AND
a.dariBahagian = d.baid
AND
a.dariJawatan = c.jaid
AND 
sid='$_SESSION[sid]'";


$qid = mysql_query($sql);
$data = mysql_fetch_array($qid);


$dariJenis =  $data['jenis']; 
$dariBahagian =  $data['namaBahagian'];
$dariJawatan =  $data['jawatan'];
$iid =  $data['dariIndividu'];


$sql = "SELECT * FROM individu WHERE iid='$iid'";
$qid = mysql_query($sql);
$data = mysql_fetch_array($qid);
$nama_penghantar =  $data['nama']; 	
$email_penghantar =  $data['email']; 


$headers .= "from : $nama_penghantar <$email_penghantar>" . "\r\n";


$body = "Anda telah menerima surat daripada <br>
Jenis = $dariJenis <br>
Bahagian = $dariBahagian <br>
Jawatan =  $dariJawatan  <br>

";


// very last part
$sql = "SELECT * FROM surat_individu WHERE sid='$_SESSION[sid]'";
$qid = mysql_query($sql);
while($data = mysql_fetch_array($qid))
{
        $sql2 = "SELECT * FROM individu WHERE iid='$data[iid]'";
        $qid2 = mysql_query($sql2);
        $data2 = mysql_fetch_array($qid2);
        $to =  $data2['email'];
        //send the email 
        mail($to, $subject, $body, $headers);
}



header('location: http://localhost:8086/surat_list.php');
?>
