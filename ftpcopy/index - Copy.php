<style>


hr
{
color: black;
background-color: black;
height: 1px;
}

.bordered {
margin-top:5px;
    *border-collapse: collapse; /* IE7 and lower */
    border-spacing: 0;
   /* width: 100%;*/    
    border: solid #ccc 1px;
    -moz-border-radius: 6px;
    -webkit-border-radius: 6px;
    border-radius: 6px;
    -webkit-box-shadow: 0 1px 1px #ccc; 
    -moz-box-shadow: 0 1px 1px #ccc; 
    box-shadow: 0 1px 1px #ccc;         
}

.bordered tr:hover {
    background: #fbf8e9;
    -o-transition: all 0.1s ease-in-out;
    -webkit-transition: all 0.1s ease-in-out;
    -moz-transition: all 0.1s ease-in-out;
    -ms-transition: all 0.1s ease-in-out;
    transition: all 0.1s ease-in-out;     
}    
    
.bordered td, .bordered th {
    border-left: 1px solid #ccc;
    border-top: 1px solid #ccc;
    padding: 5px;
    text-align: left;    
}

.bordered th {
    background-color: #dce9f9;
    background-image: -webkit-gradient(linear, left top, left bottom, from(#ebf3fc), to(#dce9f9));
    background-image: -webkit-linear-gradient(top, #ebf3fc, #dce9f9);
    background-image:    -moz-linear-gradient(top, #ebf3fc, #dce9f9);
    background-image:     -ms-linear-gradient(top, #ebf3fc, #dce9f9);
    background-image:      -o-linear-gradient(top, #ebf3fc, #dce9f9);
    background-image:         linear-gradient(top, #ebf3fc, #dce9f9);
    -webkit-box-shadow: 0 1px 0 rgba(255,255,255,.8) inset; 
    -moz-box-shadow:0 1px 0 rgba(255,255,255,.8) inset;  
    box-shadow: 0 1px 0 rgba(255,255,255,.8) inset;        
    border-top: none;
    text-shadow: 0 1px 0 rgba(255,255,255,.5); 
}

.bordered td:first-child, .bordered th:first-child {
    border-left: none;
}

.bordered th:first-child {
    -moz-border-radius: 6px 0 0 0;
    -webkit-border-radius: 6px 0 0 0;
    border-radius: 6px 0 0 0;
}

.bordered th:last-child {
    -moz-border-radius: 0 6px 0 0;
    -webkit-border-radius: 0 6px 0 0;
    border-radius: 0 6px 0 0;
}

.bordered th:only-child{
    -moz-border-radius: 6px 6px 0 0;
    -webkit-border-radius: 6px 6px 0 0;
    border-radius: 6px 6px 0 0;
}

.bordered tr:last-child td:first-child {
    -moz-border-radius: 0 0 0 6px;
    -webkit-border-radius: 0 0 0 6px;
    border-radius: 0 0 0 6px;
}

.bordered tr:last-child td:last-child {
    -moz-border-radius: 0 0 6px 0;
    -webkit-border-radius: 0 0 6px 0;
    border-radius: 0 0 6px 0;
}



</style>

<div style='color:white; margin-top:-10px; margin-left:-10px; height:110px;width:101%; background-image:url(../header2.png);'> 
<TABLE border=0 width="100%" >
  <TBODY>
  <TR>
    <TD><img src='../header1.png'></TD>
    <TD width=300>
        <br>
        <font color='black'>
      <?php
       if(isset($_SESSION['Email']))
        {
			 echo "Selamat Datang ";
       echo $_SESSION['Email'];
			 echo "<br>";
				echo date("j F Y, h:i:s");
			echo "<br>";
			?>
			<A href="login.php?a=logout">LOGOUT</A>
<br>
</font>
<?php
}
?>
      </TD></TR>
</TBODY></TABLE>
</div>

<h2>Sila Pilih Dokumen Untuk Dimuatnaik</h2>
<table width="100%" border='0' cellpadding='0' cellspacing='0'>
<tr>
<td width="40%" valign="top">
<table width="90%" border='0' cellpadding='0' cellspacing='0'>
     <tr>
 <td>
        <iframe src="pdfjs.php" name = "myIframe"  width="520" height="550"></iframe>
 </td>
     </tr>
</table>
</td>
<td width="60%" valign="top">
<table width="100%" border='1' cellpadding='0' cellspacing='0'>
     <tr style="background-color:black;color:white;">
     <td width="16%">&nbsp; <b> Tarikh Dicipta </b></td>
     <td width="40%">&nbsp; <b> Nama Fail </b></td>
    <td width="20%">&nbsp; <b> Fail Saiz </b></td> 
     <td width="40%">&nbsp; <b> Pilihan </b></td>
     </tr>

   <?php

include("../include/dbcommon.php");


   
   // get the name of the folder from url, escape space with %20
   $url = str_replace("","%20", $_GET['projekt']);
   $isFolder = is_dir("raw/".$projekt."/");
	
   // folder name on server 
   $folder = "raw/".$url."/"; 
   if($isFolder){
      $data = scandir($folder);
   } 
   if($data){
      foreach ($data as $dat) {
         $info = pathinfo($folder."/".$dat); 
         // get image size
         $size = ceil(filesize($folder."/".$dat)/1024); 
         if ($dat != "." && $dat != ".." && $dat != "_notes" && $info['extension'] != "") { ?>
           <tr> 
          <td> &nbsp; <b><?php  echo date ("d/m/Y", filemtime($folder)); ?></b>  </td> 
           <td> &nbsp; <b><?php echo $info['filename']; ?></b>  </td>
            <td> &nbsp; <b><?php echo $size. ' kb'; ?></b>  </td>
           <td> &nbsp; <a href="pdfjs.php?f=<?php echo $info['basename'];?>" target="myIframe">Lihat</a> | <a href="copy.php?f=<?php echo $info['basename'];?>" onclick="return confirm('Adakah Anda Pasti?')">Pilih</a></td>
           </tr>
       	 <?php };
      };
    }else{
        // this folder is not available
       	echo "<tr> <td>Tiada Fail.</td></tr>"; 
    } ?> 

    
</table>
</td>
</tr>
</table>
<br>

<table width="60%" border='0' cellpadding='0' cellspacing='0'>
     <tr >
     <td width="16%">&nbsp; </td>
     <td width="40%">&nbsp;</td>
    <td width="20%">&nbsp; </td> 
     <td align='right' width="40%">&nbsp;&nbsp;&nbsp;&nbsp; <button type="button" onclick="javascript:window.close()">Kembali</button></td>
     </tr>
</table>

<style>
/* Inset, by Dan Eden */ 
hr { border: 0; height: 0; border-top: 1px solid rgba(0, 0, 0, 0.1);
border-bottom: 1px solid rgba(255, 255, 255, 0.3); }
                          </style>
                          <br><br>
                          <hr>
                          &copy; 2016 Pejabat Daerah Sepang