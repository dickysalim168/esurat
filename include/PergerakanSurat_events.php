<?php 
class eventclass_PergerakanSurat  extends eventsBase
{ 
	function eventclass_PergerakanSurat()
	{
	// fill list of events
		$this->events["AfterAdd"]=true;

		$this->events["BeforeAdd"]=true;

		$this->events["BeforeQueryList"]=true;

		$this->events["BeforeShowEdit"]=true;


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
`Jawatan`,
`Status`
)
VALUES (
NULL , '$_SESSION[sid]', '$data[staff_id]', '$bahagian', '$jawatan', '1'
)";

$rs2 = CustomQuery($sql2);

$sqlc = "SELECT * from pengguna WHERE iid = ".$values['kepada_bahagian'];
$qidc = CustomQuery($sqlc);
if($datac = db_fetch_array($qidc))
{
// send email function

$password = "AldercyMailer123";
$from     = "esurat@selangor.gov.my";
$to       = $datac['Email'];
$subject="Esurat - ".date('d/m/Y')."-".$_SESSION['rujukanSurat']; 
$msg="
".$datac['Nama'].",
Anda telah menerima surat menerusi sistem eSurat PTG, sila log masuk ke sistem eSurat (http://suratptg.selangor.gov.my) , 
atau Klik pada pautan dibawah untuk paparan digital surat.

http://suratptg.selangor.gov.my/v2/upload/".$_SESSION['Imbas']."

Sekian terima kasih.
        
";
$hash     = md5($to.$msg.$password);

//send mail.
$mailer = fopen("http://www.aldercysoftware.com/api/mail.php?from=".urlencode ($from)."&to=".urlencode ($to)."&subject=".urlencode ($subject)."&msg=".urlencode ($msg)."&hash=".urlencode ($hash),'r');
$mailresult = fread($mailer,8192);  

}




*/


// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
				// Before record added
function BeforeAdd(&$values,&$message,$inline,&$pageObject)
{

		$values['daripada_bahagian'] = $_SESSION['iid'];

// Place event code here.
// Use "Add Action" button to add code snippets.

return true;
;		
} // function BeforeAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// List page: Before SQL query
function BeforeQueryList(&$strSQL,&$strWhereClause,&$strOrderBy,&$pageObject)
{

		//$strWhereClause = "daripada_bahagian =".$_SESSION['iid'];

// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeQueryList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowEdit(&$xt,&$templatefile,$values,&$pageObject)
{

		$_SESSION['pid']  =  $values['pid'];

// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeShowEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events

} 
?>
