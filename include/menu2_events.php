<?php 
class eventclass_menu2  extends eventsBase
{ 
	function eventclass_menu2()
	{
	// fill list of events

//	onscreen events
		$this->events["menu2_snippet"] = true;
		$this->events["menu2_snippet1"] = true;
		$this->events["menu2_snippet2"] = true;
		$this->events["menu2_snippet3"] = true;
		$this->events["menu2_snippet4"] = true;
		$this->events["menu2_snippet5"] = true;
		$this->events["menu2_snippet7"] = true;


	}
// Captchas functions	

//	handlers
//	onscreen events
function menu2_snippet(&$params)
{

			$sql = "select count(siid) from surat_individu where iid =$_SESSION[iid]";
			$rs = CustomQuery($sql);

							 if($data = db_fetch_array($rs))
							 {
								 echo "<a href='suratview_list.php'>".$data['count(siid)']."</a>";
							 } 		  

;
}
function menu2_snippet1(&$params)
{
?>      
<table class="bordered" width:'100%'>
<tr><TD colSpan=3>
            <P align=center><U><FONT size=2><STRONG>Surat Terkini</STRONG></FONT></U></P></TD></tr>
            <tr align="center"  style='background-color:black;color:white;'>
                <td width='10%'><b>Tarikh</b></td>
                <td width='30%'><b>Rujuk</b></td>
                <td><b>Ringkasan</b></td>
            </tr>

<?php
$iid = $_SESSION['iid'];

$sql = "SELECT
surat.sid,
surat.tarikhTerima,
surat.Jenis,
surat.awam,
surat.agensi,
surat.bahagian,
surat.individu,
surat.jawatan,
surat.kategori,
surat.rujukanSurat,
surat.RingkasanKandungan,
surat.tarikhSurat,
surat.status,
surat_individu.iid,
surat_individu.siid,
pengguna.pid
FROM surat_individu
, surat
, pengguna
WHERE (surat.sid = surat_individu.sid) 
AND (surat_individu.iid = pengguna.iid)
AND (pengguna.iid = $iid)
ORDER BY surat.tarikhTerima DESC
LIMIT 5
";
			$rs = CustomQuery($sql);
			while($data = db_fetch_array($rs))		
			{

					foreach($data as $key=>$val)
					{
								$data2[$key] = ucfirst($val);
					}

				$tarikh = date('d/m/Y',strtotime($data['tarikhTerima']));
				echo "<tr>
							<td>&nbsp;$tarikh</td>
							<td><a href='suratview_edit.php?editid1=$data[sid]'>&nbsp;$data[rujukanSurat]</a></td>
							<td>&nbsp;$data2[RingkasanKandungan]</td>
							</tr>
							";
      }
      	
?>
 </table>
<?php
;
}
function menu2_snippet2(&$params)
{
// Put your code here.
echo "<br><b><a href='suratview_list.php'>Klik Disini Untuk Melihat Senarai Lengkap Surat Yang Diterima</a></b>";

;
}
function menu2_snippet3(&$params)
{
$sql = "SELECT count(1) FROM surat_individu WHERE surat_individu.iid = $_SESSION[iid] AND Status = 0;";
$rs = CustomQuery($sql);
$data = db_fetch_array($rs);


 echo "<a href='suratview_list.php?q=(status~equals~0)'>".$data['count(1)']."</a>";
			


;
}
function menu2_snippet4(&$params)
{
$sql = "SELECT count(1) FROM surat_individu WHERE surat_individu.iid = $_SESSION[iid] AND Status = 1;";
$rs = CustomQuery($sql);
$data = db_fetch_array($rs);

 echo "<a href='suratview_list.php?q=(status~equals~1)'>".$data['count(1)']."</a>";

;
}
function menu2_snippet5(&$params)
{
$sql = "SELECT count(1) FROM surat_individu WHERE surat_individu.iid = $_SESSION[iid] AND Status = 2;";
$rs = CustomQuery($sql);
$data = db_fetch_array($rs);


 echo "<a href='suratview_list.php?q=(status~equals~2)'>".$data['count(1)']."</a>";
		
;
}
function menu2_snippet7(&$params)
{
$sql = "SELECT count(1) FROM surat_individu WHERE surat_individu.iid = $_SESSION[iid] AND Status = 3;";
$rs = CustomQuery($sql);
$data = db_fetch_array($rs);


 echo "<a href='suratview_list.php?q=(status~equals~3)'>".$data['count(1)']."</a>";
			


;
}

} 
?>
