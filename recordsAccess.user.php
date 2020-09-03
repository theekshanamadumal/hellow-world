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

        echo'logeed';

    }
    else{
        $function='popupFunction();';    
    
    
    }
?>
<?php include_once('inc/Footer.php'); ?>

<!-- Popup form to upload the required attachments for the request -->

<div class="popup">
  <div class="popup-content" >
  <img src="files/img/close.jpg" alt="" class="closebtn" > 
  <div style="padding:7em;">
  <?php  
   
    $message='login before search  records<br>
        <a href="userLogin.php">login here</a>';
    echo $message;
  ?>
  </div>
  </div>
  </div>


<!-- Script function to enable popup container-->
<script>
    function popupFunction(){  
    document.querySelector(".popup").style.display="flex";
    }    
    document.querySelector(".closebtn").addEventListener("click",function(){
    document.querySelector(".popup").style.display="none";
    })
    <?php echo $function ?>
  </script>



</body>
</html>