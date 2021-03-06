<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Jobs Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

  </head>
  <body>

  <?php include_once("inc/Header.php");
         
          require_once 'controller/userJob.ctrl.php';
          $loginId=$_SESSION['loginID'];
          include_once"controller/fileupload.ctrl.php";
          require_once 'inc/alert.view.php';
          $alertView=new alert();
  
        $uiButtonCtrl= new uiButtonControl();

        // Action for Finishing a Job
        if(array_key_exists('Finish', $_POST)) {       
          
            $uiButtonCtrl->finishButton($_POST["requestNo"]); 
            echo $alertView->showAlert("The Job has been completed successfully.","success");
            header("Refresh: 3; location:userOpenJobs.php");

        
        // Action for Resuming a Job   
        }else if(array_key_exists('Confirm', $_POST)) {          

          $filePath='files/jobFiles/'.$_POST["requestNo"];         

          $addFiles= new userJobFileUploader();        
          list($message,$status)=$addFiles->saveFiles($_FILES['fileToUpload'],$filePath);          

          if($status=="success"){
            $uiButtonCtrl->resumeButton($_POST["requestNo"]);          
            echo $alertView->showAlert("Your Job has successfully resumed.",$status);            
            header("Refresh: 3; location:userOpenJobs.php");         
            

          }else{
            echo $alertView->showAlert($message,$status);
          }

          

          
        } 
         
  

  
  ?>

  <link rel="stylesheet" href="css/newJobs.css">
    <?php 
    
    $uictrll=new uiTableControl();
    $result=$uictrll-> requestHistory($loginId);
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
              <th>Request Type</th>
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
              <input type="hidden" name="requestNo" value='.$row["requestNo"].'>        
              <input type="submit" name="Finish"  class="btn btn-secondary " value="Finish"  /> </form></td></tr>';
            
            $resumeButton='<td> <button class="btn btn-warning" id='.$row["requestNo"].' onclick="popupFunction('.$row["requestNo"].')">Resume</button></td></tr>';
             
        
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
    }else{require_once 'inc/alert.view.php';
    $alertView=new alert();
      
      echo $alertView->showAlert('No Jobs avialable','info');}
    ?>


    

    
 
  <?php 
  
  include_once('inc/Footer.php'); ?>
    
  <!-- Popup Contetn -->
  <div class="popup">
  <div class="popup-content">
  <img src="files/img/close.jpg" alt="" class="closebtn"> 
        <form class="popup-form" method='post' multiple="multiple" enctype="multipart/form-data">
            
          <div class="container-fluid">
              <div><label for="referenceNo">Refernce Number: </label> <p id="referenceNo"></p>
              <p>Upload required Attachments</p> </div>
              <div><label for="myfile">Select files:</label>
              <input type="file" id="fileToUpload[]" name="fileToUpload[]" multiple>
              </div>
              <br><br>

              <!-- -->
              <input type="hidden" name="requestNo" id="hidden" value=''>
              <input type='submit' name='Confirm' class='Confirm-btn btn btn-success' id="confirm" value='Confirm' /> 

          </div>                 

        </form>
  </div>
  
  </div>


  <script>
    function popupFunction(requestNo){
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



   

   