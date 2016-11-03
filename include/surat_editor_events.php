<?php 
class eventclass_surat_editor  extends eventsBase
{ 
	function eventclass_surat_editor()
	{
	// fill list of events
		$this->events["CopyOnLoad"]=true;

		$this->events["BeforeShowEdit"]=true;

		$this->events["BeforeProcessList"]=true;


//	onscreen events
		$this->events["Viewer_snippet41"] = true;
		$this->events["surat_snippet1911"] = true;
		$this->events["suratview_snippet151"] = true;
		$this->events["suratview_snippet231"] = true;
		$this->events["suratview_snippet331"] = true;

	}

//	handlers

		
		
		
				// Copy page: OnLoad
function CopyOnLoad(&$values, $where, &$pageObject)
{

		//$where = "(individu.baid = bahagian_agensi.baid) AND (individu.jaid = jawatan.jaid) AND (bahagian_agensi.jid = jenis.jid)";


// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function CopyOnLoad

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
								
		
		
			
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowEdit(&$xt, &$templatefile, $values, &$pageObject)
{

		$sql = "SELECT * FROM surat WHERE sid = $values[sid]";

echo $sql;
$rs = CustomQuery($sql);
$data = db_fetch_array($rs);

$_SESSION['status'] = $values['Status'];
$_SESSION['catatan'] = $values['Catatan'];


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



$_SESSION['siid'] = $values['siid'];
;		
} // function BeforeShowEdit

		
		
		
		
		
		
		
		
								
		
		
			
		
		
		
		

				// List page: Before process
function BeforeProcessList(&$pageObject)
{

		header("location: surat_view_list.php");
exit;
;		
} // function BeforeProcessList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
								
		
		
			
		
		
		
		
//	onscreen events
function Viewer_snippet41(&$params)
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
$sql2 = "SELECT * from pengguna";
$rs2 = CustomQuery($sql2);
while($data2 = db_fetch_array($rs2))
{
$staff[$data2['pid']] = "<b>".$data2['Nama']."</b>&nbsp;<br>".$jawatan[$data2['Jawatan']]."&nbsp;<br>".$bahagian[$data2['Bahagian']]."&nbsp;";
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

$sqlx = "SELECT * FROM surat_individu WHERE sid = $_SESSION[sid] ORDER BY Tarikh LIMIT 1";
$rsx = CustomQuery($sqlx);
$datax = db_fetch_array($rsx);

if($datax['Penghantar'] == $data['Penghantar'])
{
$pendaftar  = "<b>PENDAFTAR</b><br><br>";
}
else
{
 $pendaftar = "<br><br>";
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
							<td $color valign='top'>";

        echo $pendaftar;
        			
        echo  $staff[$data['Penghantar']];
 
				if($_SESSION['pendaftar'] == $_SESSION['iid'])
							{
                
              } 
              else
              {            
		if($datax['Penghantar'] == $data['Penghantar'])
		{

		}
    else
      {            
echo"
<br><br>	
<b> Minit :</b>
<div style='border: 1px solid; padding:5px; margin:3px 0 0 0; background-color:white;'>
$data[Minit]
</div>";
			}

echo "$button2
&nbsp;</td>
";

}
echo "<td $color valign='top'>".$staff[$data['Penerima']]."
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
                   echo "<br><font color=red><a onclick='return confirm(\"Adakah anda pasti?\");' href='extras/remove.php?siid=$data[siid]'>[Buang]</a></font>";
								}

			    

								echo"</center></td>";		
						
$color = "";
      }
      	
?>
					</table>
<?php
;
}
function surat_snippet1911(&$params)
{
// Put your code here.
echo "<FONT size='4'>".$_SESSION['rujukanSurat']."</FONT>";

;
}
function suratview_snippet151(&$params)
{
echo "<div id='upload'><a href='#' onclick='window.open(\"upload/".$_SESSION['Imbas']."\", \"mywindow\",\"location=1,status=1,scrollbars=1\");'>".$_SESSION['Imbas']."</a></div>";
;
}
function suratview_snippet231(&$params)
{
// Put your code here.
$sql = "SELECT * from surat_jenis";
$rs = CustomQuery($sql);
while($data = db_fetch_array($rs))
{
$jenis[$data['jid']] = $data['jenis'];
}

$sql2 = "SELECT * from pengguna";
$rs2 = CustomQuery($sql2);
while($data = db_fetch_array($rs2))
{
$nama[$data['pid']] = $data['Nama'];
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

$sql5 = "SELECT * from pengguna WHERE pid = '$_SESSION[pendaftar]'";
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
function suratview_snippet331(&$params)
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
echo "<b><a href='surat_PTG_edit.php?editid1=$_SESSION[sid]'>Kemaskini Surat</a></b> <br>";
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
echo "<b><a href='surat_Agensi_edit.php?editid1=$_SESSION[sid]'>Kemaskini Surat</a></b><br>";

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
echo "<b><a href='surat_Awam_edit.php?editid1=$_SESSION[sid]'>Kemaskini Surat</a></b><br>";

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

} 
?>
