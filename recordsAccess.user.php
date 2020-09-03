<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>records</title>
</head>

<body>
<?php require_once'inc/Header.php';?>
<link rel="stylesheet" href="css/jobService.css">
<link rel="stylesheet" href="css/jobService.css">
<?php
    if(isset($_SESSION['loginID'])) {

        $userId=$_SESSION['loginID'];
        include_once('controller/recordAccess.ctrl.php');
         
        

    }
    else{
        $function='popupFunction();';    
    }
?>
<?php 
include_once('inc/Footer.php');
include_once('inc/popUp.view.php');

?>


</body>
</html>