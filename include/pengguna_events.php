<?php 
class eventclass_pengguna  extends eventsBase
{ 
	function eventclass_pengguna()
	{
	// fill list of events
		$this->events["BeforeAdd"]=true;


//	onscreen events


	}
// Captchas functions	

//	handlers

		
		
		
		
		
		
		
		
		
		
				// Before record added
function BeforeAdd(&$values,&$message,$inline,&$pageObject)
{

		

//**********  Check if specific record exists  ************
global $conn;
$strSQLExists = "select * from pejawatan_staffdetails where icno = '".$userdata['NoKP']."' ";
$rsExists = db_query($strSQLExists,$conn);

if($data=db_fetch_array($rsExists))
{
				$userdata['Nama'] = $data['name']; 
				$userdata['Bahagian'] = $data['dept_id']; 
				$userdata['Jawatan'] = $data['post_id']; 
				$userdata['iid'] 		= $data['staff_id'];


				return true; 
}
else
{
$message = "Harap maaf, No MyKad anda tidak betul, atau anda belum berdaftar dengan sistem perjawatan PTG. <br>Sila hubungi Bahagian Teknologi Maklumat PTG Selangor Untuk Maklumat Lanjut. ";
return false;
}







// Place event code here.
// Use "Add Action" button to add code snippets.


;		
} // function BeforeAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events

} 
?>
