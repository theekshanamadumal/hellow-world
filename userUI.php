<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include_once("inc/Header.php"); ?>
<link rel="stylesheet" href="css/userUI.css">
<div class="admin-content">
    <div class="admin-container">
        <div class="container p-3 my-3 bg-company text-dark">  
                <h1>Job Services</h1>
                <p>Description</p>
                <div class= "btns">
                    <button class="btn btn-1" onclick="location.href='userOpenJobs.php';" style="cursor: pointer;">Open Jobs</button>
                    <button class="btn btn-1" onclick="location.href='userFinishedJobs.php';" style="cursor: pointer;">Finished Jobs</button>
                </div>        
        </div>
        <div class="container p-3 my-3 bg-company text-dark">
            
                <h1>File System</h1>
                <p>This feature is enabled for you to access files, forms, transcripts, certificates, copys etc. related to you currently exsisting in our file system.</p>
                <div class= "btns">
                <button class="btn btn-1" onclick="location.href='#';" style="cursor: pointer;">Access File System</button>
                
                </div>
        </div>
    </div>
</div>
<?php include_once('inc/Footer.php'); ?> 
</body>
</html>