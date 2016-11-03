<?php	
	$fileTempName = $_FILES['RemoteFile']['tmp_name'];	
	$fileSize = $_FILES['RemoteFile']['size'];
	$fileName = $_FILES['RemoteFile']['name'];

	if (file_exists($fileName)) 
		$fWriteHandle = fopen($fileName, 'w');
	else
		$fWriteHandle = fopen($fileName, 'w');

	$fReadHandle = fopen($fileTempName, 'rb');

	$fileContent = fread($fReadHandle, $fileSize);

	fwrite($fWriteHandle, $fileContent);

	fclose($fWriteHandle);
?>
