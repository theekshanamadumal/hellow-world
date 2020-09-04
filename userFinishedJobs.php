<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Jobs Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

  </head>
  <body>
  <?php include_once("inc/Header.php"); ?>
  <link rel="stylesheet" href="css/newJobs.css">
    <?php 
    require_once 'controller/userJob.ctrl.php';
    $loginId=$_SESSION['loginID'];
    $uictrll=new uiTableControl();
    $result=$uictrll-> requestFinishedHistory($loginId);
    if ($uictrll->hasJobsSubmitted($result)) {
        ?>
     
      <div>
      <div class='table-responsive'>
 <!--Table-->
 <table id="tablePreview" class="table table-hover table-striped">
 <!--Table head-->
   <thead>
     <tr>
       <th>Request #</th>
       <th>Request ID</th>
       <th>Description</th>
       <th></th>
       
     </tr>
   </thead>
   <tbody>

   <?php
    while ($row=$uictrll->fetchData($result)){
        echo "<tr><td class='column1' >" .$row["requestNo"]."</td><td class='column1'>".$row["details"]."</td><td class='column1'>".$row["description"]."</td></tr>";
    }?>
            </tbody>
        </table>
        </div>
  </div>
  </div>
    <?php
    }
    else{
      require_once 'inc/alert.view.php';
      $alertView=new alert();
      echo $alertView->showAlert('No Jobs Submitted Yet','info');
    }  
    
    ?>
    <?php include_once('inc/Footer.php'); ?>
  </body>

</html>



   