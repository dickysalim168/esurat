<?php 
class eventclass_tambah_individu  extends eventsBase
{ 
	function eventclass_tambah_individu()
	{
	// fill list of events
		$this->events["AfterAdd"]=true;


//	onscreen events


	}
// Captchas functions	

//	handlers

		
		
		
		
		
		
		
		
		
		
		
				// After record added
function AfterAdd(&$values,&$keys,$inline,&$pageObject)
{

		
global $dal;
$_SESSION['iid'] = $keys['iid'];

$tblName = $dal->Table("individu");
$rstmp = $tblName->Query("iid=".$keys["iid"]."");
$datatmp = db_fetch_array($rstmp);
$data1 = $dal->Table("surat_individu");
$data1->Value["iid"]= $_SESSION["iid"];
$data1->Add();





// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events

} 
?>
