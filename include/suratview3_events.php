<?php 
class eventclass_suratview3  extends eventsBase
{ 
	function eventclass_suratview3()
	{
	// fill list of events
		$this->events["AfterAdd"]=true;

		$this->events["BeforeShowView"]=true;

		$this->events["BeforeAdd"]=true;

		$this->events["BeforeShowEdit"]=true;

		$this->events["BeforeProcessView"]=true;

		$this->events["BeforeQueryList"]=true;

		$this->events["AfterEdit"]=true;


//	onscreen events
		$this->events["suratview3_snippet"] = true;


	}
// Captchas functions	

//	handlers

		
		
		
		
		
		
		
		
		
		
		
				// After record added
function AfterAdd(&$values,&$keys,$inline,&$pageObject)
{

		$_SESSION['sid'] = $keys['sid'];


//**********  Redirect to another page  ************
header("Location: surat_edit.php?editid1=".$_SESSION['sid']);
exit();


// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowView(&$xt,&$templatefile,&$values,&$pageObject)
{

		$_SESSION['Jenis'] = $values['Jenis'];
$_SESSION['rujukanSurat']  =  $values['rujukanSurat'];
$_SESSION['sid'] = $values['sid'];
$_SESSION['status'] = $values['status'];
// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeShowView

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
				// Before record added
function BeforeAdd(&$values,&$message,$inline,&$pageObject)
{

		$values['status'] = 0;
$values['pendaftar'] = $_SESSION['iid'];

// Place event code here.
// Use "Add Action" button to add code snippets.

return true;
;		
} // function BeforeAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowEdit(&$xt,&$templatefile,$values,&$pageObject)
{

		$_SESSION['rujukanSurat']  =  $values['rujukanSurat'];
$_SESSION['sid'] = $values['sid'];
$_SESSION['Jenis'] = $values['Jenis'];
$_SESSION['status'] = $values['status'];
$_SESSION['Imbas'] = $values['Imbas'];
$_SESSION['pendaftar'] = $values['pendaftar'];

$_SESSION['tarikhSurat'] = $values['tarikhSurat'];
$_SESSION['tarikhTerima'] = $values['tarikhTerima'];
$_SESSION['kategori'] = $values['kategori'];
$_SESSION['RingkasanKandungan'] = $values['RingkasanKandungan'];

$_SESSION['bahagian'] = $values['bahagian'];
$_SESSION['jawatan'] = $values['jawatan'];
$_SESSION['agensi'] = $values['agensi'];
$_SESSION['awam'] = $values['awam'];

$_SESSION['newimbas'] = $values['tarikhSurat']."-".md5(time().$values['rujukanSurat']).".pdf";

;		
} // function BeforeShowEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
				// View page: Before process
function BeforeProcessView(&$conn,&$pageObject)
{

		

// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeProcessView

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// List page: Before SQL query
function BeforeQueryList(&$strSQL,&$strWhereClause,&$strOrderBy,&$pageObject)
{

		$strOrderBy = "ORDER BY tarikhSurat DESC"

// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeQueryList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record updated
function AfterEdit(&$values,$where,&$oldvalues,&$keys,$inline,&$pageObject)
{

		
//**********  Redirect to another page  ************
header("Location: surat_edit.php?editid1=".$_SESSION['sid']);
exit();



//window.location = "surat_edit.php?editid1=" + result["txt"];

// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events
function suratview3_snippet(&$params)
{
// Put your code here.
echo $_SESSION['rujukanSurat'];

;
}

} 
?>