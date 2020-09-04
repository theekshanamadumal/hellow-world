<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ongoing Jobs</title>
</head>
<body>
<?php include_once("inc/Header.php"); ?>
<link rel="stylesheet" href="css/newJobs.css">
<script src="inc/searchBar.js"></script>
<?php


error_reporting(E_ALL);
require_once 'controller/adminJob.ctrl.php';
//$loginId=$_SESSION['loginID'];
$adctrll=new adminTableControl();
$var="ongoing";
$result=$adctrll-> requestHistory($var);
if ($adctrll->hasJobsSubmitted($result)) {?>
      <div class="row">
<div class="col-sm-8"> </div>
<div class="col-sm-4"> 
<div class="search-bar"><input type="text" id="searchBar"  placeholder="Search Keyword..."></div>
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
       <th> </th>
       <th></th>
       
       
     </tr>
   </thead>
   <!--Table head-->
   <!--Table body-->
   <tbody id="requestTable">
   <?php

while ($row=$adctrll->fetchData($result)){
  $rowdata= "<tr><td class='column1'>" .$row["requestNo"]
           ."</td><td class='column1'>".$row["requestId"]
           ."</td><td class='column1'>type  ".$row["requestId"]
           ."</td><td class='column1'>".$row["userId"]
           ."</td><td class='column1'>".$row["description"]."</td>";

 

           $pendingButton='<td> <button class="btn btn-warning" id='.$row["requestNo"].' onclick="popupFunction2('.$row["requestNo"].')">Pause</button></td>';
       
          $completeButton='<td> <button class="btn btn-success" id='.$row["requestNo"].' onclick="popupFunction('.$row["requestNo"].')">Complete</button></td></tr>';
  
      echo $rowdata,$pendingButton,$completeButton;
  
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
    else   {require_once 'inc/alert.view.php';
      $alertView=new alert();
        
        echo $alertView->showAlert('No Ongoing Jobs available','info');}
    
    ?>

<?php
        $adButtonCtrl= new adButtonControl();

       
        if(array_key_exists('upload', $_POST)) { 
          
          $function='popupFunction();';
            $adButtonCtrl->CompleteButton($_POST["requestNo"]); 
            $adButtonCtrl->Changedescription($_POST["requestNo"],$_POST["Description"]); 
        } 
        elseif(array_key_exists('upload2', $_POST)) { 
          
          $function='popupFunction2();';
            $adButtonCtrl->proceedButton2($_POST["requestNo"]); 
            $adButtonCtrl->Changedescription($_POST["requestNo"],$_POST["Description2"]); 
        } 
       
         
    ?> 


<?php include_once('inc/Footer.php'); ?> 
<?php include_once('addDescription.view.php'); ?>

 <!-- Popup form to upload the required attachments for the request -->

 <div class="popup">
  <div class="popup-content">
  <img src="files/img/close.jpg" alt="" class="closebtn" > 
        <form class="popup-form" method='post' multiple="multiple" enctype="multipart/form-data">
          <div class="container-fluid">
              
              <div>
              <p>Add new Description2</p>
              <input name="Description2" type="text" >
              </div>
              <br><br>
              <input type="hidden" name="requestNo" id="hidden" value=''>
              <input type="submit" name="upload2" class=" btn btn-success" value="Save" ></input>
              <br><br>
          </div>                
        </form>
  </div>
  </div>

<!-- Script function to enable popup container-->
  <script>
      //document.write("hii");
    function popupFunction2(requestNo){
    var number = requestNo;
    document.querySelector(".popup").style.display="flex";
    //document.getElementById("referenceNo").innerHTML=number;
    
    //changing the value of hidden to the requestNO
    document.getElementById("hidden").value = number;
    document.getElementById("id").name = "upload2";
    //document.write(document.getElementById("id").name);
    
    }    

    document.querySelector(".closebtn").addEventListener("click",function(){
    document.querySelector(".popup").style.display="none";
    })

    

    
  </script>
    
</body>
</html>