<html>
<head>
<title>SaveToFile Sample</title>
</head>

<body>
		<p align="center"><b>SaveToFile Sample</b></p>	
		<form id="frmScan" action="ShowResult.php">
<div style="display: none;" id="MACmainControlNotInstalled">
<table id="MACtblmainControlNotInstalled" class="divcontrol">
    <tr>
    <td style="text-align: center; vertical-align: middle;">
        <a href="DynamicWebTWAINPlugInTrial.msi"><strong>Download and install the Plug-in Here</strong></a><br />
        After the installation, please quit and restart your browser. <br />
        
    </td>
    </tr>
</table>
</div>	

<div id="mainControlInstalled" style="display: inline;">	
	<EMBED
	 TYPE="Application/DynamicWebTwain-Plugin"
	 OnPostTransfer="OnPostTransferCallback"
	 
	 WIDTH="300"
	 HEIGHT="300">
	</EMBED>

	<center>	
	<input type="button" value="Scan" ID = "btnScan" style="width: 100; height: 30" onclick='return btnScan_onclick()'>
	<input type="button" value="Upload" ID = "btnUpload" style="width: 100; height: 30" onclick='return btnUpload_onclick()'>
	<input type="button" value="Edit" ID = "btnEdit" style="width: 100; height: 30" onclick='return btnEdit_onclick()'>
	</center>	
</div>
    
<SCRIPT  LANGUAGE="javascript">
	
var Plugin;
var seed;
window.onload = Pageonload;

function Pageonload() {
	Plugin = document.embeds[0];
	seed = setInterval(ControlDetect, 500);
}

function pause() {
	clearInterval(seed);
}

function ControlDetect() {
	if (Plugin.ErrorCode == 0) {
		pause();
	}
	else{
		document.getElementById("MACmainControlNotInstalled").style.display = "inline";
		document.getElementById("mainControlInstalled").style.display = "none";
	}
}	
	
function btnScan_onclick() 
{
	Plugin.SelectSource();
	Plugin.AcquireImage();	
}

function btnUpload_onclick() 
{
	var strActionPage;
	var strHostIP;
	
	var CurrentPathName = unescape(location.pathname);	// get current PathName in plain ASCII	
	var CurrentPath = CurrentPathName.substring(0, CurrentPathName.lastIndexOf("/") + 1);
	
	
	strActionPage = CurrentPath + "SaveToFile.php"; //the ActionPage's file path 
	strHostIP = location.hostname;			 //the host's ip or name

  Plugin.HTTPPort = location.port==""?80:location.port;
	Plugin.HTTPUploadThroughPost(strHostIP, 0, strActionPage, "ImageData.JPG");

	if (Plugin.ErrorCode != 0) {		//Failed to upload image
				alert(Plugin.ErrorString);
				if (Plugin.ErrorString == "HTTP process error")
					alert (Plugin.HTTPPostResponseString);
			}
	else															//Successful
		frmScan.submit();
}

function btnEdit_onclick()
{
    Plugin.ImageEditorWindowTitle = Plugin.ImageEditorWindowTitle;
    Plugin.ImageEditorIfReadonly = false;
    Plugin.ImageEditorIfEnableEnumerator = true;
    Plugin.ShowImageEditor();
}
</SCRIPT>

</form>

</body>
</html>