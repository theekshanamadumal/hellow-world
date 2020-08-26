<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
<?php include_once("inc/Header.php"); ?>
<link rel="stylesheet" href="css/adminUI.css">
<div class="admin-content">
    <div class="admin-container">
        <div class="container p-3 my-3 bg-company text-dark">  
                <h1>Job Services</h1>
                <div class= "btns">
                    <button class="btn btn-1" onclick="location.href='newJobs.admin.php';" style="cursor: pointer;">New Jobs</button>
                    <button class="btn btn-1" onclick="location.href='pendingJobs.admin.php';" style="cursor: pointer;">Pending Jobs</button>
                    <button class="btn btn-1" onclick="location.href='#';" style="cursor: pointer;">Ongonig Jobs</button>
                    <button class="btn btn-1" onclick="location.href='#';" style="cursor: pointer;">Completed Jobs</button>
                </div>        
        </div>
        <div class="container p-3 my-3 bg-company text-dark">
            
                <h1>File Management</h1>
                <div class= "btns">
                <button class="btn btn-1" onclick="location.href='#';" style="cursor: pointer;">Search</button>
                <button class="btn btn-1" onclick="location.href='fileUpload.admin.php';" style="cursor: pointer;">Uploads</button>
                </div>
        </div>
    </div>
</div>
<?php include_once('inc/Footer.php'); ?> 
</body>
</html>
