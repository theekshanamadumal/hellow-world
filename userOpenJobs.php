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
    $uictrll=new uiControl();
    $result=$uictrll-> requestHistory($loginId);
    if ($uictrll->hasJobsSubmitted($result)) {
        ?>
      <div class="row">
      <div class="col-sm-8"> </div>
      <div class="col-sm-4"> 
      <div class="search-bar"><input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.."></div>
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
       <th>Status</th>
       <th>Description</th>
       <th></th>
       
     </tr>
   </thead>
   <tbody>
   <?php
   
    $finishButton='<td><button type="button" class="btn btn-secondary">Secondary</button></td></tr>';
    $resumeButton='<td><button type="button" class="btn btn-warning">Warning</button></td></tr>';

    while ($row=$uictrll->fetchData($result)){
        $rowdata= "<td class='column1' >" .$row["requestNo"]."</td><td class='column1'>".$row["details"]."</td><td class='column1'>".$row["status"] . "</td><td class='column1'>".$row["description"]."</td>";
        
        switch ($row["status"]) {
          case 'completed':
            echo $rowdata,$finishButton;
            break;
          
          case 'pending':
            echo $rowdata,$resumeButton;
          
          default:
            echo'</tr>';
            break;
        }
    }?>
            </tbody>
        </table>
        </div>
  </div>
  </div>
    <?php
    }
    else   echo "No Jobs Submitted Yet";
    
    ?>
    <?php include_once('inc/Footer.php'); ?>
  </body>

</html>



   

   