<?php


mysql_connect("localhost","root","apomtoseirawa9");

mysql_select_db("ptg_esurat");

$sqlb = "SELECT * from pejawatan_ref_department";
$qidb = mysql_query($sqlb);
while($datab = mysql_fetch_array($qidb))
{
$b[$datab['id']] = $datab['name'];
}

$sqlj = "SELECT * from pejawatan_ref_position";
$qidj = mysql_query($sqlj);
while($dataj = mysql_fetch_array($qidj))
{
$j[$dataj['id']] = $dataj['name'];
}

$sql = "SELECT *
FROM `surat_individu`
WHERE `Email_Status` = 0
LIMIT 10";

$qid = mysql_query($sql);
while($data = mysql_fetch_array($qid))
{
echo "Ada surat belum email <br>";
          //get user data if available
          $sqlc = "SELECT * from pengguna WHERE iid = ".$data['Penerima'];
          $qidc = mysql_query($sqlc);
          if($pengguna = mysql_fetch_array($qidc))
          {
        echo "pengguna wujud : ".  $pengguna['Email'] . "<br>";

                //get surat data
                $sqls = "SELECT * from surat WHERE sid = ".$data['sid'];
                $qids = mysql_query($sqls);
                if($surat = mysql_fetch_array($qids))
                {
                
                $password = "AldercyMailer123";
                $from     = "suratptgs@selangor.gov.my";
                $to       = $pengguna['Email'];
                $subject="Esurat - ".date('d/m/Y')."-".$surat['rujukanSurat'];
                $msg="
                ".$pengguna['Nama'].",
                <br><br>
                Anda telah menerima surat menerusi sistem eSurat PTG,
                <br>Sila log masuk ke <a href='http://suratptg.selangor.gov.my'>Sistem eSurat</a> untuk melihat surat anda.
                <br> <br>
                ";
                
                if(!empty($surat['Imbas']))
                {
                
                $msg = $msg."
                Klik pada pautan dibawah untuk paparan digital surat.
                <br>
                
                <a href='http://suratptg.selangor.gov.my/upload/".$surat['Imbas']."'>Dokumen Imbasan</a>    
                ";
                
                }
                
                $msg = $msg. "
                <br><br>
                Sekian Terima Kasih.
                ";
                
                $hash     = md5($to.$msg.$password);
                
                //send mail.
                $mailer = fopen("http://aduanptgs.selangor.gov.my/aduanptgs/api/mailer.php?from=".urlencode ($from)."&to=".urlencode ($to)."&subject=".urlencode ($subject)."&msg=".urlencode ($msg)."&hash=".urlencode ($hash),'r');
                $mailresult = fread($mailer,8192); 
                
                echo $mailresult;


                
                }
          }

               $sql2 = "Update surat_individu set Email_Status='1' where siid=" .$data["siid"];
               mysql_query($sql2);
          
}


//update surat status
//$sql2 = "update surat set Status='1' where sid=" .$keys["sid"];
//CustomQuery($sql2);
?>