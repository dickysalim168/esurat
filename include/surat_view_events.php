<?php 
class eventclass_surat_view  extends eventsBase
{ 
	function eventclass_surat_view()
	{
	// fill list of events
		$this->events["BeforeProcessList"]=true;


//	onscreen events
		$this->events["surat_view_snippet2"] = true;

	}

//	handlers

				// List page: Before process
function BeforeProcessList(&$pageObject)
{

		//bahagian
$sql2 = "SELECT * from pejawatan_ref_department";
$rs2 = CustomQuery($sql2);
while($data2 = db_fetch_array($rs2))
{
$bahagian[$data2['id']] = $data2['name'];
}

//jawatan
$sql2 = "SELECT * from pejawatan_ref_position";
$rs2 = CustomQuery($sql2);
while($data2 = db_fetch_array($rs2))
{
$jawatan[$data2['id']] = $data2['name'];
}


//Staff
$sql2 = "SELECT * from pengguna";
$rs2 = CustomQuery($sql2);

while($data2 = db_fetch_array($rs2))
{
$_SESSION['StaffInfo'][$data2['pid']] = "<b>".$data2['Nama']."</b><br>".$jawatan[$data2['Jawatan']]."<br>".$bahagian[$data2['Bahagian']];
}

// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeProcessList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
								
		
		
			
		
		
		
		
//	onscreen events
function surat_view_snippet2(&$params)
{
// Put your code here.
echo "<FONT size='4'>".$_SESSION['Email']."</FONT>";

;
}

} 
?>
