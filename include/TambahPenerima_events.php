<?php 
class eventclass_TambahPenerima  extends eventsBase
{ 
	function eventclass_TambahPenerima()
	{
	// fill list of events
		$this->events["BeforeQueryList"]=true;


//	onscreen events
		$this->events["TambahPenerima_snippet1"] = true;
		$this->events["TambahPenerima_snippet2"] = true;

	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// List page: Before SQL query
function BeforeQueryList(&$strSQL, &$strWhereClause, &$strOrderBy, &$pageObject)
{

		/*
$sql = "SELECT * from surat WHERE sid = '$_SESSION[sid]'";
$rs = CustomQuery($sql);
$data = db_fetch_array($rs);

if($data['Imbas'] == NULL)
{
echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Anda wajib memilih surat asal yang telah dicetak sebelum hantar kepada penerima')
		window.close();
    </SCRIPT>");
}
*/


if(empty($strWhereClause))
{
$strWhereClause = " pid > '1' AND Status = 'Aktif' ";
}
else
{
   $strWhereClause = "(".$strWhereClause . ") AND pid > '1' AND Status = 'Aktif' ";
}





// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeQueryList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
								
		
		
			
		
		
		
		
//	onscreen events
function TambahPenerima_snippet1(&$params)
{
$sql = "SELECT * FROM surat WHERE sid = '$_SESSION[sid]'";
$rs = CustomQuery($sql);
$data = db_fetch_array($rs);

// Put your code here.
if($_SESSION['pidbaru'] == $data['pendaftar'])
{
echo "<div style='DISPLAY: none'>";
}
;
}
function TambahPenerima_snippet2(&$params)
{
$sql = "SELECT * FROM surat WHERE sid = '$_SESSION[sid]'";
$rs = CustomQuery($sql);
$data = db_fetch_array($rs);

// Put your code here.
if($_SESSION['pidbaru'] == $data['pendaftar'])
{
echo "</div>";
}
;
}

} 
?>
