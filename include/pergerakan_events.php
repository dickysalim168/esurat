<?php 
class eventclass_pergerakan  extends eventsBase
{ 
	function eventclass_pergerakan()
	{
	// fill list of events
		$this->events["AfterAdd"]=true;

		$this->events["BeforeShowEdit"]=true;

		$this->events["BeforeQueryList"]=true;


//	onscreen events


	}
// Captchas functions	

//	handlers

		
		
		
		
		
		
		
		
		
		
		
				// After record added
function AfterAdd(&$values,&$keys,$inline,&$pageObject)
{

		
/*
$sql = "SELECT * from pejawatan_staffdetails WHERE staff_id =".$values['kepada_bahagian'];
$rs = CustomQuery($sql);
$data = db_fetch_array($rs);

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

$jawatan = $j[$data['post_id']];
$bahagian = $b[$data['dept_id']];

$sql2 = "INSERT INTO `surat_individu` (
`siid` ,
`sid` ,
`iid` ,
`Bahagian` ,
`Jawatan`
)
VALUES (
NULL , '$_SESSION[sid]', '$data[staff_id]', '$bahagian', '$jawatan'
)";

$rs2 = CustomQuery($sql2);

$sqlc = "SELECT * from pengguna WHERE iid = ".$values['kepada_bahagian'];
$qidc = CustomQuery($sqlc);
if($datac = db_fetch_array($qidc))
{
// **********  Send simple email  ************
$email=$datac['Email'];
$from="esurat@selangor.gov.my";
$msg="

[Nama],

Anda telah menerima surat menerusi sistem eSurat PTG, sila log masuk ke sistem eSurat (http://suratptg.selangor.gov.my) atau Klik pada pautan 

dibawah untuk paparan digital surat.

http://suratptg.selangor.gov.my/v2/upload/".$_SESSION['Imbas']."

Sekian terima kasih.


";
$subject="Esurat - ".date('d/m/Y')."-".$_SESSION['rujukanSurat'];
$attachments = array();
// Attachments description. The 'path' is required. Others parameters are optional. 
// $attachments =  array(
//		array('path' => getabspath('files/1.jpg'),
//		array('path' => getabspath('files/2.jpg'), 'name' => 'image.jpg', 'encoding' => 'base64', 'type' => 'application/octet-stream')) ;

$ret=runner_mail(array('to' => $email, 'subject' => $subject, 'body' => $msg, 'from'=>$from, 'attachments' => $attachments));
if(!$ret["mailed"])
	echo $ret["message"];


}




*/


// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowEdit(&$xt,&$templatefile,$values,&$pageObject)
{

		$_SESSION['pid']  =  $values['pid'];

// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeShowEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// List page: Before SQL query
function BeforeQueryList(&$strSQL,&$strWhereClause,&$strOrderBy,&$pageObject)
{

		//$strWhereClause = "daripada_bahagian = ".$_SESSION['iid'];

// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeQueryList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events

} 
?>
