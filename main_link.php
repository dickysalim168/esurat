<style>
body{
background-image:url(body_background.jpg);
margin-top:0;
padding-top:0;
font-size:10px;
}

table {
      font-size:12px;
}

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

<div style='color:white; margin-top:-10px; margin-left:-10px; height:110px;width:101%; background-image:url(header2.png);'> 
<TABLE border=0 width="100%" >
  <TBODY>
  <TR>
    <TD><img src='header1.png'></TD>
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


<style>
#cssmenu2{
	border:none;
	border:0px;
	margin-left:-10px;
  	margin-top:-10px;
	padding:0px;
	font-family:verdana,geneva,arial,helvetica,sans-serif;
	font-size:14px;
	font-weight:bold;
	color:8e8e8e;
	}
#cssmenu2 ul{
	background:url(images/menu-bg.gif) top left repeat-x;
	height:43px;
	list-style:none;
	margin:0;
	padding:0;
	}
	#cssmenu2 li{
		float:left;
		padding:0px 8px 0px 8px;
		}
	#cssmenu2 li a{
		color:#666666;
		display:block;
		font-weight:bold;
		line-height:43px;
		padding:0px 25px;
		text-align:center;
		text-decoration:none;
		}
		#cssmenu2 li a:hover{
			color:#000000;
			text-decoration:none;
			}
	#cssmenu2 li ul{
		background:#e0e0e0;
		border-left:2px solid #0079b2;
		border-right:2px solid #0079b2;
		border-bottom:2px solid #0079b2;
		display:none;
		height:auto;
		filter:alpha(opacity=95);
		opacity:0.95;
		position:absolute;
		width:225px;
		z-index:200;
		/*top:1em;
		/*left:0;*/
		}
	#cssmenu2 li:hover ul{
		display:block;
		}
	#cssmenu2 li li {
		display:block;
		float:none;
		padding:0px;
		width:225px;
		}
	#cssmenu2 li ul a{
		display:block;
		font-size:12px;
		font-style:normal;
		padding:0px 10px 0px 15px;
		text-align:left;
		}
		#cssmenu2 li ul a:hover{
			background:#949494;
			color:#000000;
			opacity:1.0;
			filter:alpha(opacity=100);
			}
	#cssmenu2 p{
		clear:left;
		}	
	#cssmenu2 .active > a{
		background:url(images/current-bg.gif) top left repeat-x;
		color:#ffffff;
		}
	#cssmenu2 .active > a:hover {
		color:#ffffff;
		}
		</style>


<?php

function isactive2($url)
{
  $active = "";
   if(strpos(strtoupper($_SERVER["REQUEST_URI"]),strtoupper($url)) )
   {
      $active = "class='active'";
   }  
   return $active;                                                                                                         
}


  echo "
<div id='cssmenu2' >
<ul>";
 if($_SESSION['Level'] == '3')
 {	
  echo "
<ul>
<li ".isactive2('menu')."><a target='_self' href='menuview_list.php'>Dashboard</A> </li>
<li ".isactive2('surat_list')."><a target='_self' href='surat_view_list.php'>Inbox</A> </li> 
<li ".isactive2('changepwd')."><a target='_self'  href='changepwd.php'>Tukar KataLaluan  </A> </li>
 ";
  }
 else if($_SESSION['Level'] == '2')
 {
 echo"
 
<li ".isactive2('menu')."><a target='_self' href='menu.php'>Dashboard</A> </li>
<li ".isactive2('surat_view_list')."><a target='_self' href='surat_view_list.php'>Inbox</A> </li>
<li ".isactive2('surat_list')."><a target='_self' href='surat_list.php'>Senarai Surat</A> </li>
<li ".isactive2('changepwd')."><a target='_self'  href='changepwd.php'>Tukar KataLaluan  </A> </li>
 ";
 }
 else if($_SESSION['Level'] == '1')
 {
 echo"
 
<li ".isactive2('menu')."><a target='_self' href='menu.php'>Dashboard</A> </li>
<li ".isactive2('surat_view_list')."><a target='_self' href='surat_view_list.php'>Inbox</A> </li>
<li ".isactive2('surat_list')."><a target='_self' href='surat_list.php'>Senarai Surat</A> </li>
<li ".isactive2('pengguna_list')."><a target='_self' href='pengguna_list.php'>Senarai Pengguna</A> </li>
";
?>
<li ".isactive2('pengguna_list')."> <a href="#" onclick="window.open('extras/index.php','Laporan','width=1020,height=540').focus()">Laporan</a></li>
<?php   
echo "<li ".isactive2('changepwd')."><a target='_self'  href='changepwd.php'>Tukar KataLaluan  </A> </li>
 ";
 }
 else if($_SESSION['Level'] == '4')
 {
 echo"
 
<li ".isactive2('menu')."><a target='_self' href='menu.php'>Dashboard</A> </li>
<li ".isactive2('surat_view_list')."><a target='_self' href='surat_view_list.php'>Inbox</A> </li>
<li ".isactive2('surat_list')."><a target='_self' href='surat_list.php'>Senarai Surat</A> </li>
";
?>
<li ".isactive2('pengguna_list')."> <a href="#" onclick="window.open('extras/index.php','Laporan','width=1020,height=540').focus()">Laporan</a></li>
<?php   
echo "<li ".isactive2('changepwd')."><a target='_self'  href='changepwd.php'>Tukar KataLaluan  </A> </li>
 ";
 } 
 echo "</ul>
</div>";
?>
<br>