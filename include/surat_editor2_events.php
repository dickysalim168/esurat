<?php 
class eventclass_surat_editor2  extends eventsBase
{ 
	function eventclass_surat_editor2()
	{
	// fill list of events
		$this->events["AfterAdd"]=true;

		$this->events["BeforeShowView"]=true;

		$this->events["BeforeAdd"]=true;

		$this->events["BeforeShowEdit"]=true;

		$this->events["BeforeProcessView"]=true;

		$this->events["BeforeQueryList"]=true;


//	onscreen events
		$this->events["surat_snippet115"] = true;
		$this->events["surat_snippet221"] = true;
		$this->events["surat_snippet231"] = true;
		$this->events["surat_snippet241"] = true;
		$this->events["surat_snippet251"] = true;


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

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events
function surat_snippet115(&$params)
{
// Put your code here.
echo $_SESSION['rujukanSurat'];

;
}
function surat_snippet221(&$params)
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
function surat_snippet231(&$params)
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
function surat_snippet241(&$params)
{
echo "<div id='upload'><a href='#' onclick='window.open(\"upload/".$_SESSION['Imbas']."\", \"mywindow\",\"location=1,status=1,scrollbars=1\");'>".$_SESSION['Imbas']."</a></div>";
;
}
function surat_snippet251(&$params)
{
// Transalator

//Status
$sql = "SELECT * from status";
$rs = CustomQuery($sql);
while($data = db_fetch_array($rs))
{
$status[$data['stid']] = $data['status'];
}


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
$sql2 = "SELECT * from pejawatan_staffdetails";
$rs2 = CustomQuery($sql2);
while($data2 = db_fetch_array($rs2))
{
$staff[$data2['staff_id']] = "<b>".$data2['name']."</b>&nbsp;<br>".$jawatan[$data2['post_id']]."&nbsp;<br>".$bahagian[$data2['dept_id']]."&nbsp;";
}





//end transalator
?>      
<table border ='1'  class=bordered >
            <tr  style='background-color:black;color:white;'>
                <td width='5%'><b>Tarikh</b></td>
                <td><b>Penghantar</b></td>
                <td><b>Penerima</b></td>
                <td  width='5%'><b>Status</b></td>
            </tr>

<?php
$sql = "SELECT * FROM surat_individu WHERE sid = $_SESSION[sid] ORDER BY Tarikh";
$rs = CustomQuery($sql);
			while($data = db_fetch_array($rs))
			{

if(empty($data['Minit']))
{
$data['Minit'] = 'Tiada Minit';
}

if(empty($data['Catatan']))
{
$data['Catatan'] = 'Tiada Catatan';
}


$button1 = "";
         if($data['Penerima'] == $_SESSION['iid'])
					{
                $color = "bgcolor='#CCCCFF'";
								echo "
								<script>
								function updatecatatan_$data[siid]()
								{
									var catatan = prompt('Kemaskini','$data[Catatan]');

										if (catatan!=null)
										  {
										  window.location = 'extras/updatecatatan.php?siid=$data[siid]&catatan='+ encodeURIComponent(catatan);
											
                     }
								return false; 
								}
								</script>
								";
								$button1 = "<input type='button' value='Kemaskini' onclick='return updatecatatan_$data[siid]()'>";  
					}


$button2 = "";
					if($data['Penghantar'] == $_SESSION['iid'])
					{
                $color = "bgcolor='#FFFFCC'";
								echo "
								<script>
								function updateminit_$data[siid]()
								{
									var minit = prompt('Kemaskini','$data[Minit]');

										if (minit!=null)
										  {
										  window.location = 'extras/updateminit.php?siid=$data[siid]&minit='+ encodeURIComponent(minit);
											
                     }
return false; 
								}
								</script>
								";
								$button2 = "<input type='button' value='Kemaskini' onclick='return updateminit_$data[siid]()'>"; 
  
					}


				echo "<tr>
							<td $color >".date('d/m/Y h:i:sA', strtotime($data['Tarikh']))."&nbsp;</td>
							<td $color valign='top'>".$staff[$data['Penghantar']]."
<br>	<br>	
<b>Minit :</b>
<div style='border: 1px solid; padding:5px; margin:3px 0 0 0; background-color:white;'>
$data[Minit]
</div>
$button2
&nbsp;</td>

							<td $color valign='top'>".$staff[$data['Penerima']]."
				<br>					<br>			
<b>Catatan :</b>
<div style='border: 1px solid; padding:5px; margin:3px 0 0 0; background-color:white;'>		
$data[Catatan]
</div>
$button1
&nbsp;</td>
			
             <td $color valign='top' > <center>";


     if($data['Penerima'] == $_SESSION['iid'])
								{
?>

<script>

function updatestatus()
{
   var myselect = document.getElementById("updater");
   window.location = 'extras/updatestatus.php?status=' + myselect.options[myselect.selectedIndex].value;
}

</script>
<?php


												$sql4 = "SELECT * from status";
												$rs4 = CustomQuery($sql4);

												echo "<b>Kemaskini Status: </b><Br><br><select name='status' onchange='updatestatus()' id='updater'>";
												$selected = "";
												while($data4 = db_fetch_array($rs4))
												{
												if($data4['stid'] == $_SESSION['status'])
												{
												$selected = "selected";
												}

												echo "<option value='$data4[stid]' $selected>$data4[status]</option>";
												$selected = "";
												}

												echo "</select>";

								}
else
{
echo '<b>'.$status[$data['Status']].'</font>';
}


			         if($data['Penghantar'] == $_SESSION['iid'])
								{
										if($data['Status'] == 3)
                   echo "<br><font color=red>[ <a onclick='return confirm(\"Adakah anda pasti?\");' href='extras/remove.php?siid=$data[siid]'>Buang</a> ]</font>";
								}

			    

								echo"</center></td>";		
						
$color = "";
      }
      	
?>
					</table>
<?php
;
}

} 
?>
