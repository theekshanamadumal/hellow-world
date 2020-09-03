<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pending Jobs</title>
</head>
<body>
<?php include_once("inc/Header.php"); ?>
<link rel="stylesheet" href="css/newJobs.css">
<?php


error_reporting(E_ALL);
require_once 'controller/adminJob.ctrl.php';
//$loginId=$_SESSION['loginID'];
$adctrll=new adminTableControl();
$var="pending";
$result=$adctrll-> requestHistory($var);
if ($adctrll->hasJobsSubmitted($result)) {?>
      <div class="row">
<div class="col-sm-8"> </div>
<div class="col-sm-4"> 
        <div class="search-bar"><input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search..."></div>
</div>
</div>


        <div>
        <div class='table-responsive'>
 <!--Table-->
 <table id="tablePreview" class="table table-hover table-striped">
 <!--Table head-->
   <thead>
     <tr>
       <th>Request #</th>
       <th>Request ID</th>
       <th>Request Type</th>
       <th>User ID</th>
       <th>Description</th>
       <th>Resume</th>
       <th>Complete</th>
       <th></th>
       
     </tr>
   </thead>
   <!--Table head-->
   <!--Table body-->
   <tbody>
   <?php

   

while ($row=$adctrll->fetchData($result)){
  $rowdata= "<tr><td class='column1'>" .$row["requestNo"]
           ."</td><td class='column1'>".$row["requestId"]
           ."</td><td class='column1'>type  ".$row["requestId"]
           ."</td><td class='column1'>".$row["userId"]
           ."</td><td class='column1'>".$row["description"]."</td>";

 

  $ongoingButton='<td> <form method="post"> 
  <input type="hidden" name="requestNo" value='.$row["requestNo"].'>
  <input type="submit" name="Resume"
          class="btn btn-warning" value="Resume" /> </form></td>';
       
          $completeButton='<td> <button class="btn btn-success" id='.$row["requestNo"].' onclick="popupFunction('.$row["requestNo"].')">Complete</button></td></tr>';
  
      echo $rowdata,$ongoingButton,$completeButton;
  
}

     
     
     ?>
   </tbody>
   <!--Table body-->
 </table>
 <!--Table-->
</div>
        </div>
    </div>
    <?php
    }
    else   echo "No Jobs Submitted Yet";
    
    ?>

<?php
        $adButtonCtrl= new adButtonControl();

        if(array_key_exists('Resume', $_POST)) { 
          
          
            $adButtonCtrl->proceedButton1($_POST["requestNo"]); 
        }
        elseif(array_key_exists('upload', $_POST)) { 
          
         // $function='popupFunction();';
             //echo $_POST["requestNo"];
            $adButtonCtrl->CompleteButton($_POST["requestNo"]); 
            $adButtonCtrl->Changedescription($_POST["requestNo"],$_POST["Description"]); 
        } 
       
         
    ?> 


<?php include_once('inc/Footer.php'); ?> 
<?php include_once('addDescription.view.php'); ?>
    
</body>
</html>