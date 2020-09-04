<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Documents</title>
</head>
<body>
<?php include_once("inc/Header.php"); ?>
<br>
 

<?php
    if(isset($_POST['upload'])){
        
        if (isset($_POST['NIC'])    ){
            
            $category=$_POST['category'];
            $NIC=$_POST['NIC'];
            $description=$_POST['description'];

            $file = $_FILES['fileToUpload'];
     
            require_once 'controller/fileupload.ctrl.php';
            $fileupload = new fileuploader();
            list($message, $status)=$fileupload->uploadFile($file,$category,$NIC,$description);
        }
        else{
             $message='please insert all information.';
             $status="info";
        }
        
        require_once 'inc/alert.view.php';
        $alertView=new alert();
        echo $alertView->showAlert($message,$status);
    
    }
?>


<div class="container">
<div class='row'>
<div class="col-sm-3"></div>
<div class="col-sm-6" >
    
    

        <form action="fileupload.admin.php" method="post"  enctype="multipart/form-data" style="border: none;">
            <div class="form-group" >
                <!--label for="category">Record Category</label-->
                <select class="form-control" name="category">
                    <option >Record Category</option>
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
                <!--label for="inputdefault">NIC number</label>
                <input class="form-control" name="NIC" id="NIC" type="text"-->
                <input class="form-control" name="NIC" type="text" placeholder="NIC Number" >
            </div>

            <div class="form-group">
                <!--label for="inputdefault">Description</label>
                <input class="form-control" name="description" id="description" type="text"-->
                <input class="form-control" name="description" type="text" placeholder="description" >
            </div>

            <!--label for="myfile">Upload the file (Submit only in pdf form):</label-->
            <input type="file"  name="fileToUpload"  id="fileToUpload" ><br><br>
            
            <button name='upload'type="submit" class="btn btn-success">Upload</button>


        </form> 

</div>
<div class="col-sm-3"></div>
</div>
</div>
<?php include_once('inc/Footer.php'); ?>
</body>
</html>