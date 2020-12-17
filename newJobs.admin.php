<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Jobs</title>
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
$var="new";
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
       <th>Request Type</th>
       <th>User ID</th>
       <th>Uploads</th>
       <th></th>
       
     </tr>
   </thead>
   <!--Table head-->
   <!--Table body-->
   <tbody id="requestTable">
   <?php

while ($row=$adctrll->fetchData($result)){
  $rowdata= "<tr><td class='column1'>" .$row["requestNo"]
           ."</td><td class='column1'> ".$row["details"]
           ."</td><td class='column1'>".$row["userId"]."</td>";

           $num=$row["requestNo"];
           $files=scandir("./files/jobFiles/".$num);
           $filesum="<td>";
           foreach($files as $file){
            if ($file!="." and $file!=".."){
            $filesum=$filesum.'<a href="./files/jobFiles/'.$num.'/'.$file.'">'.$file.'</a><br>';
           }}
            $filesum=$filesum."</td>";


            
  $proceedButton='<td> <form method="post"> 
  <input type="hidden" name="requestNo" value='.$row["requestNo"].'>
  <input type="submit" name="Proceed"
          class="btn btn-success" value="Proceed" /> </form></td></tr>';
       
  
  
      echo $rowdata,$filesum,$proceedButton;
  
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
    else {require_once 'inc/alert.view.php';
      $alertView=new alert();
        
        echo $alertView->showAlert('No New Jobs Submitted Yet','info');}
    
    ?>

<?php
        $adButtonCtrl= new adButtonControl();

        if(array_key_exists('Proceed', $_POST)) { 
          
          
            $adButtonCtrl->proceedButton1($_POST["requestNo"]); 
        } 
       
         
    ?> 


<?php include_once('inc/Footer.php'); ?> 
    
</body>
</html>