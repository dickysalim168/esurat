<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head  runat="server">
    <title>Pengimbas</title>
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
    <meta http-equiv="Content-Language" content="en-us"/>
    <link href="Styles/style.css" type="text/css" rel="stylesheet" />
    <script type="text/javascript" language="javascript" src="Scripts/kissy-min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>

</head>

<body>
<div class="D-dailog" id="J_waiting">
    <div id = "InstallBody">       
    </div>
</div>

<div id="message" style="display: none;">
   <div id = "MessageBody"></div>   
</div> 
    
<div id="container" class="body_Broad_width" style="margin:0 auto;">

<div id="headcontainer" class="body_Broad_width" style="background-color:#3a3a3a; border:0; padding:0;">

<!-- DWT_PageHead.js is used to initiate the head of the sample page. Not necessary!-->
<br /><script type="text/javascript" src="Scripts/DWT_PageHead.js"></script>
</div>
<div id="DWTcontainer" class="body_Broad_width" style="background-color:#ffffff; height:810px; border:0;">

<div id="dwtcontrolContainer">

<div id="blankObj" style="background:white;display:none; position:relative; border:1px solid gray"></div>
<div id="DWTContainerID"  style="position:relative;" class='divcontrol'>
</div>
<div id="DWTNonInstallContainerID" style="width:580px">
</div>
</div>

<div id="ScanWrapper">
<div id="divScanner" class="divinput">
    <ul class="PCollapse">
        <li>
        <div class="divType"><div class="mark_arrow expanded"></div>Custom Scan</div>
            <div id="div_ScanImage" class="divTableStyle">
                <ul id="ulScaneImageHIDE" >
                    <li style="padding-left: 15px;">
                        <label for="source">Select Source:</label>
                        <select size="1" id="source" style="position:relative;width: 220px;" onchange="source_onchange()">
                            <option value = ""></option>    
                        </select>&nbsp;<a href="http://kb.dynamsoft.com/questions/541/Why+is+my+scanner+not+shown+or+not+responding+in+the+browser%3F" target="_blank"><img title = "Why is my scanner not shown or not responding in the browser?" alt = "Why is my scanner not shown or not responding in the browser?" style="border:none;" src="Images/faq 16.png"/></a></li>
                         <li style="display:none;" id="pNoScanner">
                            <a href="javascript: void(0)" class="ShowtblLoadImage" style="font-size: 11px; background-color:#f0f0f0; position:relative" id="aNoScanner"><b>What if I don't have a scanner/webcam connected?</b>
                        </a></li>
                        <li id="divProductDetail"></li>
                    <li style="text-align:center;">
                        <input id="btnScan" class="bigbutton" style="color:#C0C0C0;" disabled="disabled" type="button" value="Scan" onclick ="DW_AcquireImage();"/>&nbsp;&nbsp;<a id="showDetail"  style="display:none;" href="javascript: void(0)" class="ShowtblCanNotScan">Can't Scan</a></li>
                </ul>
            </div>
        </li>  
        
        

    
    
    

   
    </ul>

</div>

<div id="divBlank" style="height:20px">
<ul>
    <li></li>
</ul>
</div>

<div id="tblLoadImage" style="visibility:hidden;height:80px">
<ul>
    <li><b>You can:</b><a href="javascript: void(0)" style="text-decoration:none; padding-left:200px" class="ClosetblLoadImage">X</a></li>
</ul>
<div id="notformac1" style="background-color:#f0f0f0; padding:5px;">
<ul>
    <li><img alt="arrow" src="Images/arrow.gif" width="9" height="12"/><b>Install a Virtual Scanner:</b></li>
    <li style="text-align:center;"><a id="samplesource32bit" href="http://www.dynamsoft.com/demo/DWT/Sources/twainds.win32.installer.2.1.3.msi">32-bit Sample Source</a>
        <a id="samplesource64bit" style="display:none;" href="http://www.dynamsoft.com/demo/DWT/Sources/twainds.win64.installer.2.1.3.msi">64-bit Sample Source</a>
        from <a href="http://www.twain.org">TWG</a></li>
</ul>
</div>
</div>

<div id ="divEdit" class="divinput" style="position:relative">
<ul>
    <li><img alt="arrow" src="Images/arrow.gif" width="9" height="12"/><b>Edit Image</b></li>
    <li style="padding-left:9px;"><img src="Images/ShowEditor.png" title= "Show Image Editor" alt="Show Image Editor" id="btnEditor" onclick="btnShowImageEditor_onclick()"/>
    <img src="Images/RotateLeft.png" title="Rotate Left" alt="Rotate Left" id="btnRotateL"  onclick="btnRotateLeft_onclick()"/>
    <img src="Images/RotateRight.png" title="Rotate Right" alt="Rotate Right" id="btnRotateR"  onclick="btnRotateRight_onclick()"/>
    <img src="Images/Mirror.png" title="Mirror" alt="Mirror" id="btnMirror"  onclick="btnMirror_onclick()"/>
    <img src="Images/Flip.png" title="Flip" alt="Flip" id="btnFlip" onclick="btnFlip_onclick()"/>
    <img src="Images/Crop.png" title="Crop" alt="Crop" id="btnCrop" onclick="btnCrop_onclick();"/>
    <img src="Images/ChangeSize.png" title="Change Image Size" alt="Change Image Size" id="btnChangeImageSize" onclick="btnChangeImageSize_onclick();"/></li>
</ul>

</div>

<div id="divSave" class="divinput" style="position:relative">
<ul>
    <li><img alt="arrow" src="Images/arrow.gif" width="9" height="12"/><b>Save Image</b></li>
    <li style="padding-left:15px;">
        <label for="txt_fileNameforSave">File Name: <input type="text" size="20" id="txt_fileNameforSave"/></label></li>
    <li style="display:none; padding-left:12px;">
        <label for="imgTypebmp">
            <input type="radio" value="bmp" name="imgType_save" id="imgTypebmp" onclick ="rdsave_onclick();"/>BMP</label>
	    <label for="imgTypejpeg">
		    <input type="radio" value="jpg" name="imgType_save" id="imgTypejpeg" onclick ="rdsave_onclick();"/>JPEG</label>
	    <label for="imgTypetiff">
		    <input type="radio" value="tif" name="imgType_save" id="imgTypetiff" onclick ="rdTIFFsave_onclick();"/>TIFF</label>
	    <label for="imgTypepng">
		    <input type="radio" value="png" name="imgType_save" id="imgTypepng" onclick ="rdsave_onclick();"/>PNG</label>
	    <label for="imgTypepdf">
		    <input type="radio" value="pdf" name="imgType_save" id="imgTypepdf" onclick ="rdPDFsave_onclick();"/>PDF</label></li>
    <li style="display:none; padding-left:12px;">
        <label for="MultiPageTIFF_save"><input type="checkbox" id="MultiPageTIFF_save"/>Multi-Page TIFF</label>
        <label for="MultiPagePDF_save"><input type="checkbox" id="MultiPagePDF_save"/>Multi-Page PDF </label></li>
    <li style="text-align: center">
        <input id="btnSave" type="button" value="Save Image" onclick ="btnSave_onclick()"/></li>
</ul>
</div>

<div id="divUpload" class="divinput" style="position:relative">
<ul>
    <li><img alt="arrow" src="Images/arrow.gif" width="9" height="12"/><b>Upload Ke Pangkalan Data.</b></li>
    <li style="padding-left:9px;">
        <label for="txt_fileName"> Sila Klik Upload Setelah Imbasan Selesai.<input type="hidden" size="20" id="txt_fileName" /></label></li>
    <li style="display:none; padding-left:9px;">
	    <label for="imgTypejpeg2">
		    <input type="radio" value="jpg" name="ImageType" id="imgTypejpeg2" onclick ="rd_onclick();"/>JPEG</label>
	    <label for="imgTypetiff2">
		    <input type="radio" value="tif" name="ImageType" id="imgTypetiff2" onclick ="rdTIFF_onclick();"/>TIFF</label>
	    <label for="imgTypepng2">
		    <input type="radio" value="png" name="ImageType" id="imgTypepng2" onclick ="rd_onclick();"/>PNG</label>
	    <label for="imgTypepdf2">
		    <input type="radio" value="pdf" name="ImageType" id="imgTypepdf2" onclick ="rdPDF_onclick();"/>PDF</label></li>
    <li style="display:none; padding-left:9px;">
        <label for="MultiPageTIFF"><input type="checkbox" id="MultiPageTIFF"/>Multi-Page TIFF</label>
        <label for="MultiPagePDF"><input type="checkbox" id="MultiPagePDF"/>Multi-Page PDF </label></li>
    <li style="text-align: center">
        <input id="btnUpload" type="button" value="Upload Image" onclick ="btnUpload_onclick()"/></li>
</ul>
</div>



</div>

</div>

<div id="tailcontainer" class="body_Broad_width" style="background-color:#ffffff; border:0;">

<div class="body_Broad_width" style="height:4px; background-color:#303030"></div>
<div class="body_Broad_width" style="height:6px; background-color:#ff8e13"></div>
<br />
<div style="width:10px; height:85px;float:right; border:0px; padding:0px;">
<img alt = "&gt;" src="Images/bottomright.gif"/></div>
<div class="body_Narrow_width" style="font-size:larger; z-index:100; position:relative;height:85px; border:0px; padding:0px; float:right; text-align:center; background-image: url(Images/bottommid.gif); background-repeat:repeat;">
<br />
Sistem eSurat Sepang
    
</div>

<div style="width:10px; height:85px;float:right; border:0px; padding:0px;">
    <img alt = "&gt;" src="Images/bottomleft.gif"/></div>


</div>


</div>

<div id="ImgSizeEditor" style="visibility:hidden; text-align:left;">	
<ul>
    <li><label for="img_height"><b>New Height :</b>
        <input type="text" id="img_height" style="width:50%;" size="10"/>pixel</label></li>
    <li><label for="img_width"><b>New Width :</b>&nbsp;
        <input type="text" id="img_width" style="width:50%;" size="10"/>pixel</label></li>
    <li>Interpolation method:
        <select size="1" id="InterpolationMethod"><option value = ""></option></select></li>
    <li style="text-align:center;">
        <input type="button" value="   OK   " id="btnChangeImageSizeOK" onclick ="btnChangeImageSizeOK_onclick();"/>
        <input type="button" value=" Cancel " id="btnCancelChange" onclick ="btnCancelChange_onclick();"/></li>
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
        <input type="button" value="  OK  " id="btnCropOK" onclick ="btnCropOK_onclick()"/></li>
</ul>
</div>
<div style="width:50%; height:100%; float:left; text-align:right;">
<ul>
    <li><label for="img_right"><b>right : </b>
        <input type="text" id="img_right" style="width:50%;" size="4"/></label></li>
    <li><label for="img_bottom"><b>bottom:</b>
        <input type="text" id="img_bottom" style="width:50%;" size="4"/></label></li>
    <li style=" text-align:center;">
        <input type="button" value="Cancel" id="cancelcrop" onclick ="btnCropCancel_onclick()"/></li>
</ul>
</div>
</div>

<?php

include "config.php";

$sid = $_SESSION['sid'];
$Imbas = $_SESSION['newimbas'];

?>

<script type="text/javascript" language="javascript" src="Scripts/ProductKey.js"></script>
<script type="text/javascript" language="javascript" src="Scripts/online_demo_productInfo.js"></script>
<script type="text/javascript" language="javascript" src="Scripts/online_demo_scan.php?sid=<?php echo $sid ?>&Imbas=<?php echo $Imbas?>"></script>
<script type="text/javascript" language="javascript" src="Scripts/online_demo_common.php?sid=<?php echo $sid ?>&Imbas=<?php echo $Imbas?>"></script>
<script type="text/javascript" language="javascript" src="Scripts/jquery.js"></script>

<script type="text/javascript">
    $("ul.PCollapse li>div").click(function() {
        if ($(this).next().css("display") == "none") {
            $(".divType").next().hide("normal");
            $(".divType").children(".mark_arrow").removeClass("expanded");
            $(".divType").children(".mark_arrow").addClass("collapsed");
            $(this).next().show("normal");
            $(this).children(".mark_arrow").removeClass("collapsed");
            $(this).children(".mark_arrow").addClass("expanded");
        }
    });
</script>
</body>
</html>

