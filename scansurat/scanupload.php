<?php	


include "../config.php";

$fh = fopen('rec.txt', 'a');
fwrite($fh, $_FILES['RemoteFile']['name']."\r\n");


//$k_id = substr(0,strpos($_FILES['RemoteFile']['name'], '.jpg'));
//$name = substr($_FILES['RemoteFile']['name'],0,strpos($_FILES['RemoteFile']['name'], '.jpg'));

//echo $_FILES['RemoteFile']['name'].$name;

$month = date('F');
$year  = date('Y');
$nama = time().rand().".jpg";
//$sid=$_POST['sid'];
	//$destination = substr($_FILES['RemoteFile']['name'], 0, -4);
	
	$sid = substr($_FILES['RemoteFile']['name'], 0, (strpos($_FILES['RemoteFile']['name'],"-")));
   //  system("mkdir edokumen/$year");
 //   system("mkdir edokumen/$year/$month");
    
    shell_exec("mkdir edocument\\$year");
    shell_exec("mkdir edocument\\$year\\$month");
  
	$tmp_name = $_FILES['RemoteFile']['tmp_name'];
	$location  = $_FILES['RemoteFile']['name'];

	if(move_uploaded_file($tmp_name, "edocument/$year/$month/$nama"))
	{
	//print("Imbasan FC : 'edocument/$year/$month'"); 
    //var_dump($_FILES);
    
    	$sql ="insert into document 
	(tahun,bulan,nama,sid)
	values(
  '$year',
  '$month',
  '$nama',
  '$sid'
  )";
	             mysql_query($sql);
  } 

?>
