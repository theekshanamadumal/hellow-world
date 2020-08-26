<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <?php include_once("inc/Header.php"); ?>
 <link rel="stylesheet" href="css/jobService.css">
 
 <div class="container-fluid">
    <div class="row">
    <div class="col-sm-8">
        <?php
            
            $jobType=$_GET['jobType'];
            $filename="services/".$jobType.".php";

            
            global $variable;
            $variable = $jobType;
            include_once("services/request.php");
            
                    

            include_once($filename);
        ?>
    </div>
    <div class="col-sm-4">    
         <form method='post'>
            <input type='submit' name='Request' class='button' value='Request' />
            </form>
    </div>
    </div>
</div>

    
 <?php include_once('inc/Footer.php'); ?>
    
</body>
</html>