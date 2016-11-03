<?php 
class eventclass_TambahIndividuPopup  extends eventsBase
{ 
	function eventclass_TambahIndividuPopup()
	{
	// fill list of events
		$this->events["AfterAdd"]=true;


//	onscreen events


	}
// Captchas functions	

//	handlers

		
		
		
		
		
		
		
		
		
		
		
				// After record added
function AfterAdd(&$values,&$keys,$inline,&$pageObject)
{

		
//**********  Redirect to another page  ************
echo "
Maklumat Pegawai Baru Telah Ditambah.
<INPUT TYPE='button' value='Selesai' onclick='close();'>
";

echo "
<script>
alert('Maklumat telah ditambah. (".$values['nama'].")');
window.close();
</script>";

exit();


// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events

} 
?>
