<?php 
class eventsBase
{
	var $events = array();
	var $maps = array();
	function exists($event, $table = "") 
	{ 
		if($table == "")
			return (array_key_exists($event,$this->events)!==FALSE);
		else 
			return isset($this->events[$event]) && isset($this->events[$event][$table]);
	}

	function existsMap($page)
	{
		return (array_key_exists($page,$this->maps)!==FALSE);
	}
}

class class_GlobalEvents extends eventsBase
{ 
	function class_GlobalEvents()
	{
	// fill list of events
		$this->events["AfterSuccessfulLogin"]=true;

		$this->events["BeforeRegister"]=true;

		$this->events["AfterSuccessfulRegistration"]=true;

		$this->events["BeforeLogin"]=true;

		$this->events["BeforeShowLogin"]=true;


//	onscreen events
		$this->events["snippet141"] = true;
		$this->events["snippet151"] = true;
		$this->events["snippet171"] = true;
		$this->events["snippet18"] = true;
		$this->events["snippet"] = true;
		$this->events["snippet5"] = true;
		$this->events["snippet19"] = true;


	
	
		}

//	handlers

		
		
		
		
		
		
				// After successful login
function AfterSuccessfulLogin($username, $password, &$data, &$pageObject)
{

		

$_SESSION['Level'] = $data['Level'];
$_SESSION['Email'] = $data['Email'];
$_SESSION['Bahagian'] = $data['Bahagian'];
$_SESSION['Jawatan'] = $data['Jawatan'];
$_SESSION['pid'] = $data['pid'];
$_SESSION['iid'] = $data['pid'];
$_SESSION['iidbaru'] = $data['pid'];
$_SESSION['pidbaru'] = $data['pid'];

if($data["Level"] == 1 || $data["Level"] == 2)
{
header("Location: menu.php");
}
else
{
header("Location: menuview_list.php");
}

exit();
// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterSuccessfulLogin

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
				// Before registration
function BeforeRegister(&$userdata, &$message, &$pageObject)
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
				$userdata['Level'] 	= 3;
				$userdata['Status'] = "Aktif"; 
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
} // function BeforeRegister

		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
				// After successful registration
function AfterSuccessfulRegistration(&$userdata, &$pageObject)
{

		
echo "<script>alert('Pendaftaran Berjaya, Sila Log-Masuk menggunakan MyKad dan Katalaluan anda.'); window.location = 'login.php';</script>";


// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterSuccessfulRegistration

		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
				// Before login
function BeforeLogin(&$username, &$password, &$message, &$pageObject)
{

		
//**********  Check if specific record exists  ************
global $conn;
$strSQLExists = "SELECT * FROM pengguna WHERE NoKP= '$username' AND Password = '$password' AND Status = 'Aktif'";
$rsExists = db_query($strSQLExists,$conn);
if($data=db_fetch_array($rsExists))
{
return true;
}
else
{
// if dont exist do something else
echo "<script> alert ('Harap Maaf, Akaun anda tidak aktif atau Emel dan Katalaluan anda Salah.'); </script>";
$message = "Harap Maaf, Akaun anda tidak aktif atau Emel dan Katalaluan anda Salah.";
return false;

}






// Place event code here.
// Use "Add Action" button to add code snippets.


;		
} // function BeforeLogin

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowLogin(&$xt, &$templatefile, &$pageObject)
{

		

//include 'customlogin.php'; 
//exit;

// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeShowLogin

		
		
		
		
		
		

//	onscreen events
	function snippet141(&$params)
	{
	
$sql = "SELECT count(1) FROM surat, surat_individu WHERE surat.sid = surat_individu.sid AND surat_individu.Status = 0;";
$rs = CustomQuery($sql);
$data = db_fetch_array($rs);


 echo "".$data['count(1)']."";


			

	;
}
	function snippet151(&$params)
	{
	
$sql = "SELECT count(1) FROM surat, surat_individu WHERE surat.sid = surat_individu.sid AND surat_individu.Status = 1;";
$rs = CustomQuery($sql);
$data = db_fetch_array($rs);


 echo "".$data['count(1)']."";


			

	;
}
	function snippet171(&$params)
	{
	
$sql = "SELECT count(1) FROM surat, surat_individu WHERE surat.sid = surat_individu.sid AND surat_individu.Status = 3;";
$rs = CustomQuery($sql);
$data = db_fetch_array($rs);


 echo "".$data['count(1)']."";


			

	;
}
	function snippet18(&$params)
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
$i++;		

$sql2 = "select * from surat WHERE sid = '$data[sid]'";
$rs2 = CustomQuery($sql2);
$data2 = db_fetch_array($rs2);
	
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
									<td colspan='10' ><center>Tiada Surat Dalam Inbox</center> <br><br><br>&nbsp;</td>
							</tr>
							";

}
echo "
</table>
<br> *Senarai 5 surat terbaru.
";



 

	;
}
	function snippet(&$params)
	{
	// Put your code here.



echo "<script>alert('Pendaftaran Berjaya'); window.location = 'login.php';</script>";

	;
}
	function snippet5(&$params)
	{
	
			$sql = "select count(pid) from pengguna";
			$rs = CustomQuery($sql);

							 if($data = db_fetch_array($rs))
							 {
								 echo $data['count(pid)'];
							 } 		  

	;
}
	function snippet19(&$params)
	{
	
			$sql = "select count(sid) from surat";
			$rs = CustomQuery($sql);

							 if($data = db_fetch_array($rs))
							 {
								 echo $data['count(sid)'];
							 } 		  

	;
}

} 
?>
