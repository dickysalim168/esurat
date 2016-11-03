<?php 
class eventclass_UserView  extends eventsBase
{ 
	function eventclass_UserView()
	{
	// fill list of events
		$this->events["BeforeShowEdit"]=true;

		$this->events["CopyOnLoad"]=true;

		$this->events["BeforeProcessList"]=true;

		$this->events["BeforeEdit"]=true;

		$this->events["BeforeAdd"]=true;


//	onscreen events


	}
// Captchas functions	

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowEdit(&$xt,&$templatefile,$values,&$pageObject)
{

		



// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeShowEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
				// Copy page: OnLoad
function CopyOnLoad(&$values,$where,&$pageObject)
{

		//$where = "(individu.baid = bahagian_agensi.baid) AND (individu.jaid = jawatan.jaid) AND (bahagian_agensi.jid = jenis.jid)";


// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function CopyOnLoad

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

				// List page: Before process
function BeforeProcessList(&$conn,&$pageObject)
{

		global $transjawatan;

$sql = "SELECT * FROM `pejawatan_ref_position`";
$rs = CustomQuery($sql);
while($data = db_fetch_array($rs))
{
$transjawatan[$data['id']] = $data['name'];
}


// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeProcessList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record updated
function BeforeEdit(&$values,$where,&$oldvalues,&$keys,&$message,$inline,&$pageObject)
{

		

$sql = "SELECT * FROM `pejawatan_staffdetails` WHERE staff_id = " . $values['iid'];
$rs = CustomQuery($sql);
if($data = db_fetch_array($rs))
{
$values['Jawatan'] = $data['post_id'];
}




// Place event code here.
// Use "Add Action" button to add code snippets.

return true;
;		
} // function BeforeEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
				// Before record added
function BeforeAdd(&$values,&$message,$inline,&$pageObject)
{

		
$sql = "SELECT * FROM `pejawatan_staffdetails` WHERE staff_id = " . $values['iid'];
$rs = CustomQuery($sql);
if($data = db_fetch_array($rs))
{
$values['Jawatan'] = $data['post_id'];
}


// Place event code here.
// Use "Add Action" button to add code snippets.

return true;
;		
} // function BeforeAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events

} 
?>
