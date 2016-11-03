<?php 
class eventclass_menuview  extends eventsBase
{ 
	function eventclass_menuview()
	{
	// fill list of events
		$this->events["AfterAdd"]=true;

		$this->events["BeforeShowView"]=true;

		$this->events["BeforeAdd"]=true;

		$this->events["BeforeShowEdit"]=true;

		$this->events["BeforeProcessView"]=true;

		$this->events["BeforeQueryList"]=true;


//	onscreen events
		$this->events["surat_snippet13"] = true;
		$this->events["surat_snippet176"] = true;
		$this->events["surat_snippet186"] = true;
		$this->events["surat_snippet205"] = true;
		$this->events["suratview_snippet614"] = true;
		$this->events["menuview_snippet"] = true;
		$this->events["menuview_snippet1"] = true;
		$this->events["menuview_snippet2"] = true;
		$this->events["menuview_snippet4"] = true;

	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record added
function AfterAdd(&$values, &$keys, $inline, &$pageObject)
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
function BeforeShowView(&$xt, &$templatefile, &$values, &$pageObject)
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
function BeforeAdd(&$values, &$message, $inline, &$pageObject)
{

		$values['status'] = 0;
$values['pendaftar'] = $_SESSION['iid'];

// Place event code here.
// Use "Add Action" button to add code snippets.

return true;
;		
} // function BeforeAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
								
		
		
			
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowEdit(&$xt, &$templatefile, $values, &$pageObject)
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
function BeforeProcessView(&$pageObject)
{

		

// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeProcessView

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
								
		
		
			
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// List page: Before SQL query
function BeforeQueryList(&$strSQL, &$strWhereClause, &$strOrderBy, &$pageObject)
{

		$strOrderBy = "ORDER BY tarikhSurat DESC"

// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeQueryList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
								
		
		
			
		
		
		
		
//	onscreen events
function surat_snippet13(&$params)
{
// Put your code here.
echo "<FONT size='4'>".$_SESSION['rujukanSurat']."</FONT>";

;
}
function surat_snippet176(&$params)
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
<table width='100%' border='1'>
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
function surat_snippet186(&$params)
{
// Put your code here.

$sqln = "SELECT * from pejawatan_staffdetails";
$rsn = CustomQuery($sqln);
while($datan = db_fetch_array($rsn))
{
$name[$datan['staff_id']] = $datan['name'];
}

if($_SESSION['Jenis'] == 1)
{
$sql = "SELECT * from surat WHERE sid = $_SESSION[sid]";
$rs = CustomQuery($sql);
$data = db_fetch_array($rs);
$name = $name[$data['individu']];
echo "<table width='100%' border='1'>
  <tr>
    <td width='30%'>Nama</td>
    <td width='70%'>&nbsp; $name</td>
  </tr>
  <tr>
    <td width='30%'>Bahagian</td>
    <td width='70%'>&nbsp; $data[bahagian]</td>
  </tr>
  <tr>
    <td>Jawatan</td>
    <td>&nbsp; $data[jawatan]</td>
  </tr>
</table>";
}
else if($_SESSION['Jenis'] == 2)
{
$sql = "SELECT * from agensi WHERE aid = $_SESSION[agensi]";
$rs = CustomQuery($sql);
$data = db_fetch_array($rs);
echo "<table width='100%' border='1'>
  <tr>
    <td width='30%'>Agensi</td>
    <td width='70%'>&nbsp; $data[nama] - $data[penerangan]</td>
  </tr>
</table>";
}
else if($_SESSION['Jenis'] == 3)
{
$sql = "SELECT * from awam WHERE awid = $_SESSION[awam]";
$rs = CustomQuery($sql);
$data = db_fetch_array($rs);
echo "<table width='100%' border='1'>
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
function surat_snippet205(&$params)
{
echo "<div id='upload'><a href='#' onclick='window.open(\"upload/".$_SESSION['Imbas']."\", \"mywindow\",\"location=1,status=1,scrollbars=1\");'>".$_SESSION['Imbas']."</a></div>";
;
}
function suratview_snippet614(&$params)
{
$sql = "SELECT * from status";
$rs = CustomQuery($sql);
while($data = db_fetch_array($rs))
{
$status[$data['stid']] = $data['status'];
}
//echo
echo "<font size='5'>".$status[$_SESSION['status']]."</font>";


echo " - ";
echo "<a href='extras/updatestatus.php?sid=$_SESSION[sid]&status=0'>Dalam Proses</a> |";
echo "<a href='extras/updatestatus.php?sid=$_SESSION[sid]&status=1'>Selesai</a> |";
echo "<a href='extras/updatestatus.php?sid=$_SESSION[sid]&status=2'>KIV</a> |";

;
}
function menuview_snippet(&$params)
{

$sql = "SELECT count(1) FROM surat, surat_individu WHERE surat.sid = surat_individu.sid AND surat_individu.Penerima = $_SESSION[pid] AND surat_individu.Status = 3;";
$rs = CustomQuery($sql);
$data = db_fetch_array($rs);


 echo "<a href='surat_view_list.php?q=(status~equals~3)'>".$data['count(1)']."</a>";


			

;
}
function menuview_snippet1(&$params)
{

$sql = "SELECT count(1) FROM surat, surat_individu WHERE surat.sid = surat_individu.sid AND surat_individu.Penerima = $_SESSION[pid] AND surat_individu.Status = 0;";
$rs = CustomQuery($sql);
$data = db_fetch_array($rs);


 echo "<a href='surat_view_list.php?q=(status~equals~0)'>".$data['count(1)']."</a>";


			

;
}
function menuview_snippet2(&$params)
{

$sql = "SELECT count(1) FROM surat, surat_individu WHERE surat.sid = surat_individu.sid AND surat_individu.Penerima = $_SESSION[pid] AND surat_individu.Status = 1;";
$rs = CustomQuery($sql);
$data = db_fetch_array($rs);


 echo "<a href='surat_view_list.php?q=(status~equals~1)'>".$data['count(1)']."</a>";


			

;
}
function menuview_snippet4(&$params)
{
$sql = "select * from surat_view WHERE Penerima = $_SESSION[pid] ORDER BY Tarikh DESC LIMIT 5";
$rs = CustomQuery($sql);

$sqlx = "SELECT * from pengguna";
$rsx = CustomQuery($sqlx);
while($datax = db_fetch_array($rsx))
{
$name[$datax['pid']] = $datax['Nama'];
}	 

$sqly = "SELECT * from status";
$rsy = CustomQuery($sqly);
while($datay = db_fetch_array($rsy))
{
$status[$datay['stid']] = $datay['status'];
}	 

echo"
<TABLE class=bordered width=100%>
  <tr bgcolor='#99CCFF' style='COLOR: black'>
    <td><b>Tarikh Kemasukan</b></td>
    <td><b>Tarikh Surat</b></td>
    <td><b>Tarikh Terima</b></td>
    <td><b>Rujukan Surat </b></td>
    <td><b>Perkara </b></td>
    <td><b>Kategori </b></td>
    <td><b>Penghantar </b></td>
    <td><b>Minit </b></td>
    <td><b>Status  </b></td>
    <td><b>Pilihan  </b></td>
  </tr>
";
$i = 0;
 while($data = db_fetch_array($rs))
			{	

$sql2 = "select * from surat WHERE sid = '$data[sid]'";
$rs2 = CustomQuery($sql2);
$data2 = db_fetch_array($rs2);
			
$i++;			
				 echo " 
				<tr>
				<td>".  date('d/m/Y',strtotime($data2['tarikhKemasukkan'])) ."&nbsp;</td>
				<td>".  date('d/m/Y',strtotime($data['tarikhSurat'])) ."&nbsp;</td>
				<td>".  date('d/m/Y',strtotime($data['tarikhTerima'])) ."&nbsp;</td>
					 <td>$data[rujukanSurat]&nbsp;</td>
					 <td>$data[RingkasanKandungan]&nbsp;</td>
					 <td>$data[kategori]&nbsp;</td>
				   <td>". $name[$data['Penghantar']] ."&nbsp;</td>
					 <td>$data[Minit]&nbsp;</td>
				   <td>". $status[$data['status']] ."&nbsp;</td>
					 <td><a href='Viewer_edit.php?editid1=$data[siid]'>Lihat Surat</a>&nbsp;</td>
				</tr>
				";
			
			}
				
		if($i <= 0)
{
				 echo" <tr>
									<td colspan='8' ><center>Tiada Surat Dalam Inbox</center> <br><br><br>&nbsp;</td>
							</tr>
							";

}
echo "
</table>
<br> *Senarai 5 surat terbaru.
";


;
}

} 
?>
