<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
require_once("classes/button.php");
	
$params = (array)my_json_decode(postvalue('params'));
$buttId = $params['buttId'];

// proccess table events
if($buttId=='New_Button')
{
	require_once("include/surat_variables.php");
	$cipherer = new RunnerCipherer("surat");
	buttonHandler_New_Button($params);
}
if($buttId=='Masukkan_Ke_Dalam_Senarai')
{
	require_once("include/TambahPenerima_variables.php");
	$cipherer = new RunnerCipherer("TambahPenerima");
	buttonHandler_Masukkan_Ke_Dalam_Senarai($params);
}
if($buttId=='Tambah_Coba')
{
	require_once("include/surat_individu_variables.php");
	$cipherer = new RunnerCipherer("surat_individu");
	buttonHandler_Tambah_Coba($params);
}
if($buttId=='Kemaskini1')
{
	require_once("include/surat_variables.php");
	$cipherer = new RunnerCipherer("surat");
	buttonHandler_Kemaskini1($params);
}
if($buttId=='Kembali3')
{
	require_once("include/surat_maklumatsurat_variables.php");
	$cipherer = new RunnerCipherer("surat_maklumatsurat");
	buttonHandler_Kembali3($params);
}
if($buttId=='Tambah_Penerima3')
{
	require_once("include/Viewer_variables.php");
	$cipherer = new RunnerCipherer("Viewer");
	buttonHandler_Tambah_Penerima3($params);
}
if($buttId=='Kemaskini14')
{
	require_once("include/menuview_variables.php");
	$cipherer = new RunnerCipherer("menuview");
	buttonHandler_Kemaskini14($params);
}
if($buttId=='Kemaskini31')
{
	require_once("include/menuview_variables.php");
	$cipherer = new RunnerCipherer("menuview");
	buttonHandler_Kemaskini31($params);
}
if($buttId=='New_Button9')
{
	require_once("include/menuview_variables.php");
	$cipherer = new RunnerCipherer("menuview");
	buttonHandler_New_Button9($params);
}
if($buttId=='Hantar_Email_6')
{
	require_once("include/menuview_variables.php");
	$cipherer = new RunnerCipherer("menuview");
	buttonHandler_Hantar_Email_6($params);
}
if($buttId=='New_Button11')
{
	require_once("include/surat_variables.php");
	$cipherer = new RunnerCipherer("surat");
	buttonHandler_New_Button11($params);
}
if($buttId=='Kemaskini16')
{
	require_once("include/surat_editor_variables.php");
	$cipherer = new RunnerCipherer("surat_editor");
	buttonHandler_Kemaskini16($params);
}
if($buttId=='New_Button12')
{
	require_once("include/surat_editor_variables.php");
	$cipherer = new RunnerCipherer("surat_editor");
	buttonHandler_New_Button12($params);
}
if($buttId=='Tambah_Penerima31')
{
	require_once("include/surat_editor_variables.php");
	$cipherer = new RunnerCipherer("surat_editor");
	buttonHandler_Tambah_Penerima31($params);
}
if($buttId=='Kembali31')
{
	require_once("include/surat_PTG_variables.php");
	$cipherer = new RunnerCipherer("surat_PTG");
	buttonHandler_Kembali31($params);
}
if($buttId=='New_Button15')
{
	require_once("include/suratview2_variables.php");
	$cipherer = new RunnerCipherer("suratview2");
	buttonHandler_New_Button15($params);
}
if($buttId=='Kembali')
{
	require_once("include/surat_Awam_variables.php");
	$cipherer = new RunnerCipherer("surat_Awam");
	buttonHandler_Kembali($params);
}
if($buttId=='New_Button16')
{
	require_once("include/surat_AgensiAwam_variables.php");
	$cipherer = new RunnerCipherer("surat_AgensiAwam");
	buttonHandler_New_Button16($params);
}

// proccess non table events


// create table and non table handlers
function buttonHandler_New_Button($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	;
	echo my_json_encode($result);
}
function buttonHandler_Masukkan_Ke_Dalam_Senarai($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	$sqlb = "SELECT * from pejawatan_ref_department";
$qidb = CustomQuery($sqlb);
while($datab = db_fetch_array($qidb))
{
$b[$datab['id']] = $datab['name'];
}

$sqlj = "SELECT * from pejawatan_ref_position";
$qidj = CustomQuery($sqlj);
while($dataj = db_fetch_array($qidj))
{
$j[$dataj['id']] = $dataj['name'];
}

for ($i=0; $i<count($keys); $i++)
{

$sql = "SELECT * from pengguna WHERE pid =".$keys[$i]['pid'];
$rs = CustomQuery($sql);
$data = db_fetch_array($rs);

$jawatan = $j[$data['Jawatan']];
$bahagian = $b[$data['Bahagian']];

  $sql = "INSERT INTO `surat_individu` 
(`sid`, `Penghantar`, `Penerima`, `Tarikh`, `Status`, `minit`) 
VALUES 
( '$_SESSION[sid]', '$_SESSION[pid]', '$data[pid]', NOW(), '3', '$params[minit]');

";


//$result['abc'] = $sql;


  CustomQuery($sql);
}


 
;
	echo my_json_encode($result);
}
function buttonHandler_Tambah_Coba($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	;
	echo my_json_encode($result);
}
function buttonHandler_Kemaskini1($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	// Put your code here.
$result["txt"] = $_SESSION['sid'];;
	echo my_json_encode($result);
}
function buttonHandler_Kembali3($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	//$result["txt"] = $keys["sid"];;
	echo my_json_encode($result);
}
function buttonHandler_Tambah_Penerima3($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	;
	echo my_json_encode($result);
}
function buttonHandler_Kemaskini14($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	// Put your code here.
$result["txt"] = $_SESSION['sid'];;
	echo my_json_encode($result);
}
function buttonHandler_Kemaskini31($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	// Put your code here.
$result["txt"] = $_SESSION['sid'];;
	echo my_json_encode($result);
}
function buttonHandler_New_Button9($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	;
	echo my_json_encode($result);
}
function buttonHandler_Hantar_Email_6($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	$sqlb = "SELECT * from pejawatan_ref_department";
$qidb = CustomQuery($sqlb);
while($datab = db_fetch_array($qidb))
{
$b[$datab['id']] = $datab['name'];
}

$sqlj = "SELECT * from pejawatan_ref_position";
$qidj = CustomQuery($sqlj);
while($dataj = db_fetch_array($qidj))
{
$j[$dataj['id']] = $dataj['name'];
}

$sql = "SELECT * from surat_individu where sid =".$_SESSION['sid'];
$qid = CustomQuery($sql);
while($data = db_fetch_array($qid))
{
$sqlc = "SELECT * from pengguna WHERE iid = ".$data['iid'];
$qidc = CustomQuery($sqlc);
if($datac = db_fetch_array($qidc))
{
/*
// **********  Send simple email  ************
$email=$datac['Email'];
$from="esurat@selangor.gov.my";
$msg="

[Nama],

Anda telah menerima surat menerusi sistem eSurat PTG, sila log masuk ke sistem eSurat (http://suratptg.selangor.gov.my) atau Klik pada pautan 

dibawah untuk paparan digital surat.

http://suratptg.selangor.gov.my/upload/".$_SESSION['Imbas']."

Sekian terima kasih.


";
$subject="Esurat - ".date('d/m/Y')."-".$_SESSION['rujukanSurat'];
//$attachments = array();
// Attachments description. The 'path' is required. Others parameters are optional. 
// $attachments =  array(
//		array('path' => getabspath('files/1.jpg'),
//		array('path' => getabspath('files/2.jpg'), 'name' => 'image.jpg', 'encoding' => 'base64', 'type' => 'application/octet-stream')) ;

//$ret=runner_mail(array('to' => $email, 'subject' => $subject, 'body' => $msg, 'from'=>$from, 'attachments' => $attachments));
runner_mail(array('to' => $email, 'subject' => $subject, 'body' => $msg, 'from'=>$from));
//runner_mail(array('to' => $email, 'subject' => $subject, 'body' => $email_msg));

//if(!$ret["mailed"])
//echo $ret["message"];
*/
// send email function
$password = "AldercyMailer123";
$from     = "suratptgs@selangor.gov.my";
$to       = $datac['Email'];
$subject="Esurat - ".date('d/m/Y')."-".$_SESSION['rujukanSurat'];
$msg="
".$datac['Nama'].",
<br><br>
Anda telah menerima surat menerusi sistem eSurat PTG,
<br>Sila log masuk ke <a href='http://suratptg.selangor.gov.my'>Sistem eSurat</a> untuk melihat surat anda.
<br> <br>
";

if(!empty($_SESSION['Imbas']))
{

$msg = $msg."
Klik pada pautan dibawah untuk paparan digital surat.
<br>

<a href='http://suratptg.selangor.gov.my/upload/".$_SESSION['Imbas']."'>Dokumen Imbasan</a>    
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
}
}

//update surat status
//$sql2 = "update surat set Status='1' where sid=" .$keys["sid"];
//CustomQuery($sql2);;
	echo my_json_encode($result);
}
function buttonHandler_New_Button11($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	$result["txt"] = $_SESSION["Imbas"];
;
	echo my_json_encode($result);
}
function buttonHandler_Kemaskini16($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	// Put your code here.
$result["txt"] = $_SESSION['sid'];;
	echo my_json_encode($result);
}
function buttonHandler_New_Button12($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	;
	echo my_json_encode($result);
}
function buttonHandler_Tambah_Penerima31($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	;
	echo my_json_encode($result);
}
function buttonHandler_Kembali31($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	//$result["txt"] = $keys["sid"];;
	echo my_json_encode($result);
}
function buttonHandler_New_Button15($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	$result["txt"] = $keys["sid"];;
	echo my_json_encode($result);
}
function buttonHandler_Kembali($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	;
	echo my_json_encode($result);
}
function buttonHandler_New_Button16($params) 
{
	global $strTableName;
	$result = array();
		
	// create new button object for get record data
	$params["keys"] = (array)my_json_decode(postvalue('keys'));
	$params["isManyKeys"] = postvalue('isManyKeys');
	$params["location"] = postvalue('location');
	
	$button = new Button($params);
	$keys = $button->getKeys();
	
	;
	echo my_json_encode($result);
}
?>
