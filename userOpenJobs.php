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
    $result=$uictrll-> requestHistory($loginId);
    if ($uictrll->hasJobsSubmitted($result)) {
        ?>

      <p id="demo"></p>
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
   
    
    while ($row=$uictrll->fetchData($result)){
        $rowdata= "<tr><td class='column1'>" .$row["requestNo"]
                 ."</td><td class='column1'>".$row["details"]
                 ."</td><td class='column1'>".$row["status"]
                 ."</td><td class='column1'>".$row["description"]."</td>";

        $finishButton='<td> <form method="post"> 
        
    
        <input type="submit" name="Finish"
                class="btn btn-secondary " value="Finish" id='.$row["requestNo"].'  /> </form></td></tr>';




        $resumeButton='<td> 
        
        <button class="btn btn-warning" id='.$row["requestNo"].' onclick="myFunction('.$row["requestNo"].')">Resume</button></td></tr>';
             
        
        switch ($row["status"]) {
          case 'completed':
            echo $rowdata,$finishButton;
            break;
          
          case 'pending':
            echo $rowdata,$resumeButton;
          break;
          
          default:
            echo $rowdata,'<td></td></tr>';
            break;
        }
    }?>
            </tbody>
        </table>
        </div>
  </div>


    <?php
    }
    else   echo "No Jobs Submitted Yet";
    
    ?>


    <?php
        $uiButtonCtrl= new uiButtonControl();

        if(array_key_exists('Finish', $_POST)) { 
          
          
            $ans=$uiButtonCtrl->finishButton($_POST["requestNo"]); 
           
        } 
        else if(array_key_exists('Confirm', $_POST)) { 
          echo $_POST["requestNo"];
          $uiButtonCtrl->resumeButton($_POST["requestNo"]);  
          
        } 
         
    ?> 


    
 
    <?php include_once('inc/Footer.php'); ?>
    
<div class="popup">
  <div class="popup-content">
  <img src="files/img/close.jpg" alt="" class="closebtn"> 
        <form class="popup-form" method='post'>
            
          <div class="container-fluid">
              <div><label for="referenceNo">Refernce Number: </label> <p id="referenceNo"></p>
              <p>Upload required Attachments</p> </div>
              <div><label for="myfile">Select files:</label>
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
  <script>
    function myFunction(requestNo){
    var number = requestNo;
    document.querySelector(".popup").style.display="flex";
    document.getElementById("referenceNo").innerHTML=number;
    
    //changing the value of hidden to the requestNO
    document.getElementById("hidden").value = number;
    
    }    

    document.querySelector(".closebtn").addEventListener("click",function(){
    document.querySelector(".popup").style.display="none";
    })
  </script>
  
  </body>

</html>



   

   