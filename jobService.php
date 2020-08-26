<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <?php include_once("inc/Header.php"); ?>

 <?php
    
    $jobType=$_GET['jobType'];
    $filename="services/".$jobType.".php";

    
    global $variable;
    $variable = $jobType;
    include_once("services/request.php");
    
            

    include_once($filename);
 ?>
 
 


    
 <?php include_once('inc/Footer.php'); ?>
    
</body>
</html>