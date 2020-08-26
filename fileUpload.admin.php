<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Documents</title>
</head>
<body>
<?php include_once("inc/Header.php"); ?>
    <div class="container">
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
    

        <form action="fileupload.admin.php">
            <div class="form-group">
                <label for="sel1">Category</label>
                <select class="form-control" id="category">
                    <option value="01">01</option>
                    <option value="02">02</option>
                    <option value="03">03</option>
                    <option value="04">04</option>
                    <option value="05">05</option>
                    <option value="06">06</option>
                    <option value="07">07</option>
                    <option value="08">08</option>
                    <option value="09">09</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                </select>
            </div>

            <div class="form-group">
                <label for="inputdefault">NIC number</label>
                <input class="form-control" id="NIC" type="text">
            </div>

            <div class="form-group">
                <label for="inputdefault">Description</label>
                <input class="form-control" id="description" type="text">
            </div>

            

            <label for="myfile">Select files (Submit only in pdf form):</label>
            <input type="file" id="myfile" name="myfile" multiple><br><br>
            <button type="submit" class="btn btn-success">Upload</button>


        </form> 

    </div>
<?php include_once('inc/Footer.php'); ?>
</body>
</html>