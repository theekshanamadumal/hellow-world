
 <!-- Popup form to upload the required attachments for the request -->
 <?php
 if(isset($_POST['upload'])){
    $jobNo=2;
    $filePath='files/jobFiles/'.$jobNo;
       
    include_once"controller/fileupload.ctrl.php";
    $fileSaver = new userJobFileUploader();
    $fileSaver->saveFiles($_FILES['fileToUpload'],$filePath);

    
 }
 
 
?>
 
 
 
 
 <div class="popup">
  <div class="popup-content">
  <img src="img/close.jpg" alt="" class="closebtn" > 
        <form class="popup-form" method='post' multiple="multiple" enctype="multipart/form-data">
            
          <div class="container-fluid">
              <div style="display:inline"><p>Job Type : </p> <p id="jobType"></p>
              </div>
              <div>
              <p>Upload required Attachments</p>
              <label for="myfile">Select files:</label>
              <input type="file" id="fileToUpload[]" name="fileToUpload[]" multiple>
              </div>
              <br><br>

              <!--  -->
              <input type="hidden" name="requestNo" id="hidden" value=''>
              <input type='submit' name='upload' class='Confirm-btn btn btn-success' id="upload" value='upload' /> 
              <br><br>
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