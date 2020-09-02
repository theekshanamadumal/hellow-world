
 <?php      
            $jobType=$_GET['jobType'];
            $filename="services/".$jobType.".php";
            

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $jobType;?></title>
</head>
<body>
 <?php include_once("inc/Header.php"); ?>
 <link rel="stylesheet" href="css/jobService.css">

<?php
 if(isset($_POST['Confirm'])){

            
global $variable;
$variable = $jobType;

include_once("controller/request.ctrl.php");
$reqctrll=new requestCtrl();
list($massege,$status)=$reqctrll->requst($variable);

require_once 'alert.view.php';

$alertView=new alert();

echo $alertView->showAlert($massege,$status);

}
?>



 
 <div class="container-fluid">
    <div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
        <?php
            include_once($filename);            
        ?>
        <button class="btn btn-primary" onclick="popupFunction(<?php echo $jobType?>)">Request</button>  
    </div>
    <div class="col-sm-2">    
         
    </div>
    </div>
    
</div>

    
 <?php include_once('inc/Footer.php'); ?>

 <!-- Popup form to upload the required attachments for the request -->
 <div class="popup">
  <div class="popup-content">
  <img src="img/close.jpg" alt="" class="closebtn"> 
        <form class="popup-form" method='post'>
            
          <div class="container-fluid">
              <div style="display:inline"><p>Job Type : </p> <p id="jobType"></p>
              </div>
              <div>
              <p>Upload required Attachments</p>
              <label for="myfile">Select files:</label>
              <input type="file" id="myfile" name="myfile" multiple>
              </div>
              <br><br>

              <!--  -->
              <input type="hidden" name="requestNo" id="hidden" value=''>
              <input type='submit' name='Confirm' class='Confirm-btn btn btn-success' id="confirm" value='Confirm' /> 

          </div>                 

        </form>
  </div>
  
  </div>

<!-- Script function to enable popup container-->
  <script>
    function popupFunction(jobType){
    
    document.querySelector(".popup").style.display="flex";
    document.getElementById("jobType").innerHTML=jobType;

    
    
    }    

    document.querySelector(".closebtn").addEventListener("click",function(){
    document.querySelector(".popup").style.display="none";
    })
  </script>
    
</body>
</html>