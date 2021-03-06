<?php

// include 'config.php';
// $_SESSION['sid'] = $_GET['sid'];

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Dynamic Web TWAIN Online Demo</title>
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
    <meta http-equiv="Content-Language" content="en-us"/>
    <meta name="description"
        content="Dynamic Web TWAIN is a TWAIN scanning SDK specifically optimized for web applications. 
        You can control any TWAIN compatible device drivers - scanner, digital camera or capture card - 
        in a web page to acquire images, edit and then upload to web servers using the TWAIN control." />
    <meta name="keyword" content="Dynamsoft, TWAIN, Scanners, SDK, Scanning"/>
    <link href="Styles/style.css" type="text/css" rel="stylesheet" />
</head>

<body>

<div id="container" class="body_Broad_width" style="margin:0 auto;">

<div id="headcontainer" class="body_Broad_width" style="background-color:#3a3a3a; border:0;">
<br />





<div class="body_Broad_width" style="background-image:url(Images/menu_back.gif); background-repeat:repeat; height:20px; background-color:#ffffff;">

</div>

</div>

<div id="DWTcontainer" class="body_Broad_width" style="background-color:#ffffff; height:800px; border:0;">

<div id="dwtcontrolContainer">
<div id="dwtcontrol">
<div id="mainControlPluginNotInstalled" style="display:none">
<table class="divcontrol">
    <tr>
    <td style="text-align: center; vertical-align: middle;">
        <a href="Resources/DynamicWebTWAINPlugIn.msi"><strong>Download and install the Plug-in Here</strong></a><br />
        After the installation, please restart your browser.
    </td>
    </tr>
</table>
</div>
<div id="MACmainControlNotInstalled" style="display:none">
<table class="divcontrol">
    <tr>
    <td style="text-align: center; vertical-align: middle;">
        <a href="Resources/DynamicWebTWAINMacEditionTrial.pkg"><strong>Download and install the Plug-in Here</strong></a><br />
        After the installation, please restart your browser.
    </td>
    </tr>
</table>
</div>
<div id="mainControlPlugin" style="display:inline">
</div>

<div id="maindivIElimit" style="display:inline" >
<table class="divcontrol">
    <tr>
    <td style="text-align: center; vertical-align: middle;">
        <strong>Internet Explorer restricted this webpage from running scripts or ActiveX control</strong><br />
        If you wish to continue, please click 'Allow blocked content' on the IE popup message dialog
    </td>
    </tr>
</table>
</div>
<div id="maindivIE">
<object classid="clsid:5220cb21-c88d-11cf-b347-00aa00a28331" style="display:none;">
    <param name="LPKPath" value="Resources/DynamicWebTwain.lpk" />
</object>
<div id="maindivIEx86" >                                    
</div>
<div id="maindivIEx64" >                                  
</div>
</div>
</div>

<div id="extraInfo" style="font-size: 11px; color: #222222; font-family: verdana sans-serif; background-color:#f0f0f0; text-align:left; width:560px;" ></div>

<div class="divinput" style="text-align:center; width:560px; background-color:#FFFFFF;">
    <input id="btnFirstImage" onclick="return btnFirstImage_onclick()" type="button" value=" |&lt; "/>&nbsp;
    <input id="btnPreImage" onclick="return btnPreImage_onclick()" type="button" value=" &lt; "/>&nbsp;&nbsp;
    <input type="text" size="2" id="CurrentImage" readonly="readonly"/>/
    <input type="text" size="2" id="TotalImage" readonly="readonly" value="0"/>&nbsp;&nbsp;
    <input id="btnNextImage" onclick="return btnNextImage_onclick()" type="button" value=" &gt; "/>&nbsp;
    <input id="btnLastImage" onclick="return btnLastImage_onclick()" type="button" value=" &gt;| "/>
    Preview Mode
    <select size="1" id="PreviewMode" onchange ="slPreviewMode();">
        <option value="0">1X1</option>
    </select><br />
    <input id="btnRemoveCurrentImage" onclick="return btnRemoveCurrentImage_onclick()" type="button" value="Remove Selected Images"/>
    <input id="btnRemoveAllImages" onclick="return btnRemoveAllImages_onclick()" type="button" value="Remove All Images"/><br />
    <div id="divMsg" style="text-align:left;">
        Message:<br />
        <div id="emessage" style="width:550px;height:80px; overflow:scroll; background-color:#ffffff; border:1px #303030; border-style:solid; text-align:left;" >
        </div>
    </div>
</div>

</div>

<div id="ScanWrapper">
<div id="divScanner" class="divinput">
<ul>
    <li><img alt="arrow" src="Images/arrow.gif" style="width:9px; height:12px;"/>
        <b>Custom Scan</b></li>
    <li style="padding-left:15px;">
        <label for="source">Select Source<select size="1" id="source">
            <option value = ""></option>    
        </select></label></li>
    <li style="display:none;" id="pNoScanner">
               <a href="javascript: void(0)" class="ShowtblLoadImage" style="font-size: 11px;" id="aNoScanner"><strong>What if I don't have a scanner connected?</strong>
    </a></li>
    <li style="padding-left:12px;">
        <label for = "ShowUI"><input type="checkbox" id="ShowUI" />If Show UI&nbsp;</label>
        <label for = "ADF"><input type="checkbox" id="ADF"/>ADF&nbsp;</label>
        <label for = "Duplex"><input type="checkbox" id="Duplex" />Duplex</label></li>
    <li style="padding-left:12px;">
        <label for = "DiscardBlank"><input type="checkbox" id="DiscardBlank"/>If Discard Blank Images</label></li>
    <li style="padding-left:15px;">Pixel Type
        <label for="BW"><input type="radio" id="BW" name="PixelType"/>B&amp;W </label>
        <label for="Gray"><input type="radio" checked="checked" id="Gray" name="PixelType"/>Gray</label>
        <label for="RGB"><input type="radio" id="RGB" name="PixelType"/>Color</label></li>
    <li style="padding-left:15px;">
        <label for="Resolution">Resolution:<select size="1" id="Resolution"><option value = ""></option></select></label></li>
    <li style="text-align:center;">
        <input id="btnScan" class="bigbutton" type="button" value="Scan" onclick ="btnScan_onclick();"/></li>
</ul>
</div>

<div id="divBlank" style="height:20px">
<ul>
    <li></li>
</ul>
</div>

<div id="tblLoadImage" style="visibility:hidden;">
<ul>
    <li><b>You can:</b><a href="javascript: void(0)" style="text-decoration:none; padding-left:200px" class="ClosetblLoadImage">X</a></li>
</ul>
<div id="notformac1" style="background-color:#f0f0f0; padding:5px;">
<ul>
    <li><img alt="arrow" src="Images/arrow.gif" width="9" height="12"/><strong>Install a Virtual Scanner:<br /></strong></li>
    <li style="text-align:center;"><a id="samplesource32bit" href="http://www.dynamsoft.com/demo/DWT/Sources/twainds.win32.installer.2.1.3.msi">32-bit Sample Source</a>
        <a id="samplesource64bit" style="display:none;" href="http://www.dynamsoft.com/demo/DWT/Sources/twainds.win64.installer.2.1.3.msi">64-bit Sample Source</a> from <a href="http://www.twain.org">TWG</a></li>
</ul>
</div>

<ul id="notformac2">
    <li><b>Or you can:</b></li>
</ul>
<div style="background-color:#f0f0f0; padding:5px;">
<ul>
       <li><img alt="arrow" src="Images/arrow.gif" width="9" height="12"/><b>Load a Sample Image:</b></li>
    <li style="text-align:center"><input id="btnLoad" class="bigbutton" type="button" style="width:200px;" value="Load Image" onclick="return btnLoad_onclick()" /></li>
</ul>
</div>
</div>

<div id ="divEdit" class="divinput">
<ul>
    <li><img alt="arrow" src="Images/arrow.gif" width="9" height="12"/><b>Edit Image</b></li>
    <li style="padding-left:9px;">
        <input type="button" value="Show Image Editor" id="btnEditor" onclick="return btnShowImageEditor_onclick()"/></li>
    <li style="padding-left:9px;">
        <input type="button" value="Rotate Right" id="btnRotateR" onclick="return btnRotateRight_onclick()"/>
        <input type="button" value="Rotate Left" id="btnRotateL" onclick="return btnRotateLeft_onclick()"/></li>
    <li style="padding-left:9px;">
        <input type="button" value="Mirror" id="btnMirror" onclick="return btnMirror_onclick()"/>
        <input type="button" value="Flip" id="btnFlip" onclick="return btnFlip_onclick()"/>
        <input type="button" value="Crop" id="btnCrop" onclick="btnCrop_onclick();"/></li>
    <li style="padding-left:9px; height:20px;">
        <input type="button" value="Change Image Size" id="btnChangeImageSize" onclick="return btnChangeImageSize_onclick();" style="float:left" /></li>
</ul>
<div id="ImgSizeEditor" style="visibility:hidden; text-align:left;">	
<ul>
    <li><label for="img_height"><b>New Height :</b>
        <input type="text" id="img_height" style="width:50%;" size="10"/>pixel</label></li>
    <li><label for="img_width"><b>New Width :</b>&nbsp;
        <input type="text" id="img_width" style="width:50%;" size="10"/>pixel</label></li>
    <li>Interpolation method:
        <select size="1" id="InterpolationMethod"><option value = ""></option></select></li>
    <li style="text-align:center;">
        <input type="button" value="   OK   " id="btnChangeImageSizeOK" onclick ="return btnChangeImageSizeOK_onclick();"/>
        <input type="button" value=" Cancel " id="btnCancelChange" onclick ="return btnCancelChange_onclick();"/></li>
</ul>
</div>
<div id="Crop" style="visibility:hidden ;">	
<div style="width:50%; height:100%; float:left; text-align:left;">
<ul>
    <li><label for="img_left"><b>left: </b>
        <input type="text" id="img_left" style="width:50%;" size="4"/></label></li>
    <li><label for="img_top"><b>top: </b>
        <input type="text" id="img_top" style="width:50%;" size="4"/></label></li>
    <li style="text-align:center;">
        <input type="button" value="  OK  " id="btnCropOK" onclick ="return btnCropOK_onclick()"/></li>
</ul>
</div>
<div style="width:50%; height:100%; float:left; text-align:right;">
<ul>
    <li><label for="img_right"><b>right : </b>
        <input type="text" id="img_right" style="width:50%;" size="4"/></label></li>
    <li><label for="img_bottom"><b>bottom:</b>
        <input type="text" id="img_bottom" style="width:50%;" size="4"/></label></li>
    <li style=" text-align:center;">
        <input type="button" value="Cancel" id="cancelcrop" onclick ="return btnCropCancel_onclick()"/></li>
</ul>
</div>
</div>
</div>

<br><br>

<div id="divUpload" class="divinput">
<ul>
    <li><input id="AcquireImage" type="button" onClick="return btnUpload_onclick()" value="|   UPLOAD    |" style="width: 100; height: 30" ></li>

</ul>
<ul style="display:none;">
    <li><img alt="arrow" src="Images/arrow.gif" width="9" height="12"/><b>Upload Image</b></li>
    <li style="padding-left:9px;">
        <label for="txt_fileName">File Name: <input type="text" size="20" id="txt_fileName"/></label></li>
    <li style="padding-left:9px;">
        <!--<label for="imgTypebmp2">
            <input type="radio" value="bmp" name="ImageType" id="imgTypebmp2" onclick ="rd_onclick();"/>BMP</label>-->
	    <label for="imgTypejpeg2">
		    <input type="radio" value="jpg" name="ImageType" id="imgTypejpeg2" checked="checked" onclick ="rd_onclick();"/>JPEG</label>
	    <label for="imgTypetiff2">
		    <input type="radio" value="tif" name="ImageType" id="imgTypetiff2" onclick ="rdTIFF_onclick();"/>TIFF</label>
	    <label for="imgTypepng2">
		    <input type="radio" value="png" name="ImageType" id="imgTypepng2" onclick ="rd_onclick();"/>PNG</label>
	    <label for="imgTypepdf2">
		    <input type="radio" value="pdf" name="ImageType" id="imgTypepdf2" onclick ="rdPDF_onclick();"/>PDF</label></li>
    <li style="padding-left:9px;">
        <label for="MultiPageTIFF"><input type="checkbox" id="MultiPageTIFF"/>Multi-Page TIFF</label>
        <label for="MultiPagePDF"><input type="checkbox" id="MultiPagePDF"/>Multi-Page PDF </label></li>
    <li style="text-align: center">
        <input id="btnUpload" type="button" value="Upload Image" onclick ="return btnUpload_onclick()"/>
        
        </li>
</ul>
</div>

</div>

</div>



</div>

	   


<script type="text/javascript" language="javascript" src="Scripts/SampleApp.php"></script>
<script type="text/javascript" language="javascript" src="Scripts/jCommon.js"></script>

</body>
</html>
