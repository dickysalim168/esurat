<?php
include("include/dbcommon.php");

if(isset($_FILES['userfile']))
{
$sid = $_SESSION['sid'];
$Imbas = $_SESSION['tarikhSurat'].md5($_SESSION['rujukanSurat']).".pdf";

//echo $Imbas;
//exit;

$uploaddir = '../upload/';
$uploadfile = $uploaddir . $Imbas;

echo "<p>";

if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) 
{
     $sql = "UPDATE surat SET Imbas = '$Imbas' WHERE sid = '$sid'";
     mysql_query($sql);
     
     
     ?>
     
     <html>
     
     <head>
           <script>
                function ok()
                {
                      top.opener.document.getElementById("upload").innerHTML = "<a href='#' onclick='window.open(\"upload/<?php echo $Imbas ?>\", \"mywindow\",\"location=1,status=1,scrollbars=1\");'><?php echo $Imbas?></a>";                      
                      close();                     
                }
           </script>
     </head>
     
     <body>
           <h2>File Successfully Updoaded.</h2>
           <input type='button' value='Close' onclick="ok()">
     
     </body>
     </html>
     
     <?php
     
     exit;
  
} 
else 
{
   echo "Upload failed";
}

/*
echo "</p>";
echo '<pre>';
echo 'Here is some more debugging info:';
print_r($_FILES);
print "</pre>";
*/
 }
?> 

<h2>Upload File</h2>
<form enctype="multipart/form-data" action="imbas.php" method="POST">
    <input type="hidden" name="MAX_FILE_SIZE" value="512000" />
    Choose File: <input name="userfile" type="file" />  <br>
    <input type="submit" value="Send File" />
</form>


