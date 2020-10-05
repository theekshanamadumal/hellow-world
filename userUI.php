<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include_once("inc/Header.php"); 
if(isset($_SESSION['loginID'])){ ?>
<link rel="stylesheet" href="css/userUI.css">
<div class="admin-content">
    <div class="admin-container">
        <div class="container p-3 my-3 bg-company text-dark">  
                <h1>Job Services</h1>
                <p>All the job services previously requested, completed and currently ongoing jobs can be access from here.</p>
                <div class= "btns">
                    <button class="btn btn-1" onclick="location.href='servicesHome.php';" style="cursor: pointer;">Request a Service</button>
                    <button class="btn btn-1" onclick="location.href='userOpenJobs.php';" style="cursor: pointer;">Open Services</button>
                    <button class="btn btn-1" onclick="location.href='userFinishedJobs.php';" style="cursor: pointer;">Finished Services</button>
                </div>        
        </div>
        <div class="container p-3 my-3 bg-company text-dark">
            
                <h1>File System</h1>
                <p>This feature is enabled for you to access files, forms, transcripts, certificates, copys etc. related to you currently exsisting in our file system.</p>
                <div class= "btns">
                <button class="btn btn-1" onclick="location.href='recordsAccess.user.php';" style="cursor: pointer;">Access File System</button>
                
                </div>
        </div>
    </div>
</div>
<?php  }else{
    require_once 'inc/alert.view.php';
    $alertView=new alert();
    echo $alertView->showAlert("Need to be Logged in first","warning");
}

?>
<?php include_once('inc/Footer.php'); ?> 
</body>
</html>