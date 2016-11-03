<?php 
class eventclass_suratview  extends eventsBase
{ 
	function eventclass_suratview()
	{
	// fill list of events
		$this->events["AfterAdd"]=true;

		$this->events["BeforeShowView"]=true;

		$this->events["BeforeAdd"]=true;

		$this->events["BeforeShowEdit"]=true;

		$this->events["BeforeProcessView"]=true;

		$this->events["BeforeQueryList"]=true;


//	onscreen events
		$this->events["surat_snippet19"] = true;
		$this->events["suratview_snippet2"] = true;
		$this->events["suratview_snippet3"] = true;
		$this->events["suratview_snippet"] = true;
		$this->events["suratview_snippet1"] = true;
		$this->events["suratview_snippet6"] = true;
		$this->events["suratview_snippet9"] = true;
		$this->events["suratview_snippet14"] = true;


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

		
//**********  Redirect to another page  ************
header("Location: suratview_edit.php?editid1=$values[sid]");
exit();


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


// Place event code here.
// Use "Add Action" button to add code snippets.

return true;
;		
} // function BeforeAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowEdit(&$xt,&$templatefile,$values,&$pageObject)
{

		$sql = "SELECT * FROM surat WHERE sid = $values[sid]";
$rs = CustomQuery($sql);
$data = db_fetch_array($rs);

$_SESSION['status'] = $values['status'];


$_SESSION['rujukanSurat']  =  $data['rujukanSurat'];
$_SESSION['sid'] = $data['sid'];
$_SESSION['Jenis'] = $data['Jenis'];

$_SESSION['Imbas'] = $data['Imbas'];
$_SESSION['pendaftar'] = $data['pendaftar'];


$_SESSION['tarikhSurat'] = $data['tarikhSurat'];
$_SESSION['tarikhTerima'] = $data['tarikhTerima'];
$_SESSION['kategori'] = $data['kategori'];
$_SESSION['RingkasanKandungan'] = $data['RingkasanKandungan'];

$_SESSION['bahagian'] = $data['bahagian'];
$_SESSION['jawatan'] = $data['jawatan'];
$_SESSION['agensi'] = $data['agensi'];
$_SESSION['awam'] = $data['awam'];

$_SESSION['newimbas'] = $data['tarikhSurat']."-".md5(time().$data['rujukanSurat']).".pdf";

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

		//$strWhereClause = "`surat`.individu = $_SESSION[iid]";
/*
if(empty($strWhereClause))
{
   $strWhereClause = "surat_individu.iid = $_SESSION[iid]";
}
else
{
   $strWhereClause = "(".$strWhereClause . ") AND surat_individu.iid = $_SESSION[iid]";
}


$strOrderBy = "ORDER BY tarikhSurat DESC"


*/



// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeQueryList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events
function surat_snippet19(&$params)
{
// Put your code here.
echo $_SESSION['rujukanSurat'];

;
}
function suratview_snippet2(&$params)
{
// Put your code here.
$sql = "SELECT * from surat_jenis";
$rs = CustomQuery($sql);
while($data = db_fetch_array($rs))
{
$jenis[$data['jid']] = $data['jenis'];
}

$sql2 = "SELECT * from pejawatan_staffdetails";
$rs2 = CustomQuery($sql2);
while($data = db_fetch_array($rs2))
{
$nama[$data['staff_id']] = $data['name'];
}


$sql3 = "SELECT * from pejawatan_ref_department";
$rs3 = CustomQuery($sql3);
while($data = db_fetch_array($rs3))
{
$dept[$data['id']] = $data['name'];
}

$sql4 = "SELECT * from pejawatan_ref_position";
$rs4 = CustomQuery($sql4);
while($data = db_fetch_array($rs4))
{
$posit[$data['id']] = $data['name'];
}

$sql5 = "SELECT * from pejawatan_staffdetails WHERE staff_id = '$_SESSION[pendaftar]'";
$rs5 = CustomQuery($sql5);
$data2 = db_fetch_array($rs5);

//echo $data2['post_id'];
//exit;

echo 
"
<table width='100%' border='1'  class=bordered >
  <tr>
    <td width='30%'>Tarikh Surat</td>
    <td width='70%'>&nbsp; ".date("d/m/Y",strtotime($_SESSION['tarikhSurat']))." </td>
  </tr>
  <tr>
    <td>Tarikh Terima</td>
    <td>&nbsp; ".date("d/m/Y",strtotime($_SESSION['tarikhTerima']))." </td>
  </tr>
  <tr>
    <td>No Rujukan Surat</td>
    <td>&nbsp; $_SESSION[rujukanSurat]</td>
  </tr>
  <tr>
    <td>Ringkasan Kandungan</td>
    <td>&nbsp; $_SESSION[RingkasanKandungan]</td>
  </tr>
  <tr>
    <td>Jenis</td>
    <td>&nbsp; ". $jenis[$_SESSION['Jenis']] ."</td>
  </tr>
  <tr>
    <td>Kategori</td>
    <td>&nbsp; $_SESSION[kategori]</td>
  </tr>
  <tr>
    <td>Pendaftar Surat</td>
    <td>&nbsp; ". $nama[$_SESSION['pendaftar']] . "<br> &nbsp;&nbsp;". $posit[$data2['post_id']] . "<br> &nbsp;&nbsp;". $dept[$data2['dept_id']] . "</td>
  </tr>
</table>
";

;
}
function suratview_snippet3(&$params)
{
// Put your code here.

if($_SESSION['Jenis'] == 1)
{
$sql = "SELECT * from pejawatan_ref_department WHERE name = '$_SESSION[bahagian]'";
$rs = CustomQuery($sql);
$data = db_fetch_array($rs);

$sql2 = "SELECT * from pejawatan_ref_position WHERE name = '$_SESSION[jawatan]'";
$rs2 = CustomQuery($sql2);
$data2 = db_fetch_array($rs2);
echo "<table width='100%' border='1'  class=bordered >
  <tr>
    <td width='30%'>Bahagian</td>
    <td width='70%'>&nbsp; $data[name]</td>
  </tr>
  <tr>
    <td>Jawatan</td>
    <td>&nbsp; $data2[name]</td>
  </tr>
</table>";
}
else if($_SESSION['Jenis'] == 2)
{
$sql = "SELECT * from agensi WHERE aid = '$_SESSION[agensi]'";
$rs = CustomQuery($sql);
$data = db_fetch_array($rs);
echo "<table width='100%' border='1' class=bordered>
  <tr>
    <td width='30%'>Agensi</td>
    <td width='70%'>&nbsp; $data[nama] - $data[penerangan]</td>
  </tr>
</table>";
}
else if($_SESSION['Jenis'] == 3)
{
$sql = "SELECT * from awam WHERE awid = '$_SESSION[awam]'";
$rs = CustomQuery($sql);
$data = db_fetch_array($rs);
echo "<table width='100%' border='1' class=bordered>
  <tr>
    <td width='30%'>Awam</td>
    <td width='70%'>&nbsp; $data[nama] - $data[penerangan]</td>
  </tr>
</table>";
}
else
{
echo "Ralat";
}
;
}
function suratview_snippet(&$params)
{
echo "<div id='upload'><a href='#' onclick='window.open(\"upload/".$_SESSION['Imbas']."\", \"mywindow\",\"location=1,status=1,scrollbars=1\");'>".$_SESSION['Imbas']."</a></div>";
;
}
function suratview_snippet1(&$params)
{
// Transalator

//Status
$sql = "SELECT * from status";
$rs = CustomQuery($sql);
while($data = db_fetch_array($rs))
{
$status[$data['stid']] = $data['status'];
}

//Staff
$sql2 = "SELECT * from pejawatan_staffdetails";
$rs2 = CustomQuery($sql2);
while($data2 = db_fetch_array($rs2))
{
$staff[$data2['staff_id']] = $data2['name'];
}



//end transalator
?>      
<table border ='1'  class=bordered >
            <tr  style='background-color:black;color:white;'>
                <td><b>Tarikh</b></td>
                <td><b>Penghantar</b></td>
                <td><b>Penerima</b></td>
									<td><b>Catatan</b></td>
                <td><b>Status</b></td>
            </tr>

<?php
$sql = "SELECT * FROM surat_individu WHERE sid = $_SESSION[sid] ORDER BY Tarikh";
$rs = CustomQuery($sql);
			while($data = db_fetch_array($rs))
			{

				echo "<tr>
							<td>&nbsp;$data[Tarikh]</td>
							<td>&nbsp;".$staff[$data['Penghantar']]."</td>
							<td>&nbsp;".$staff[$data['Penerima']]."</td>
							<td>&nbsp;$data[Catatan]</td>
             <td>&nbsp;".$status[$data['Status']]."</td>
							</tr>
							";
      }
      	
?>
					</table>
<?php
;
}
function suratview_snippet6(&$params)
{
$sql = "SELECT * from surat_individu WHERE Penerima = $_SESSION[iid] AND sid = $_SESSION[sid] LIMIT 1";
$rs = CustomQuery($sql);
if($data = db_fetch_array($rs))
{
$realstatus = $data['Status'];
}

$sql = "SELECT * from status";
$rs = CustomQuery($sql);
while($data = db_fetch_array($rs))
{
$status[$data['stid']] = $data['status'];
}
//echo
echo "<font size='3' color='purple'>".$status[$realstatus]."</font>";


echo " - ";
echo "<a href='extras/updatestatus.php?sid=$_SESSION[sid]&status=0&iid=$_SESSION[iid]'>Dalam Proses</a> |";
echo "<a href='extras/updatestatus.php?sid=$_SESSION[sid]&status=1&iid=$_SESSION[iid]'>Selesai</a> |";
echo "<a href='extras/updatestatus.php?sid=$_SESSION[sid]&status=2&iid=$_SESSION[iid]'>KIV</a>";

;
}
function suratview_snippet9(&$params)
{
// Put your code here.
echo $_SESSION['Email'];
;
}
function suratview_snippet14(&$params)
{
// Put your code here.
echo $_SESSION['Email'];

;
}

} 
?>
