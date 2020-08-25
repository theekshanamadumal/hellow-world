<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Upload Button</title>
</head>
<body>

	<form action="fileupload.php" method="post" enctype="multipart/form-data">
  	Select File to upload:
  		<input type="file" name="fileToUpload" id="fileToUpload"><br><br>
  		<input type="submit" value="Upload File" name="submit">
	</form>

	<?php
   
   	if(isset($_POST['submit'])){
       $target_dir = "uploads/";
	   $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	   $filename = $_FILES['fileToUpload']['name'];
	   $size = $_FILES['fileToUpload']['size'];
       require_once 'controller/fileupload.ctrl.php';
       $fileupload = new fileupload();
       $message=$fileupload->file_upload($target_file);
       echo $message;
   	   }
    ?>

</body>
</html>