
 <!-- Popup form to upload the required attachments for the request -->

 <div class="popup">
  <div class="popup-content">
  <img src="files/img/close.jpg" alt="" class="closebtn" > 
        <form class="popup-form" method='post' multiple="multiple" enctype="multipart/form-data">
          <div class="container-fluid">
              <div style="display:inline"><p>Job Type : <?php echo $jobType;?> </p> 
              </div>
              <div style="display:inline"><p>Job Name : <?php echo $jobName;?></p> 
              </div>
              <div>
              <p>Upload required Attachments</p>
              <label for="myfile">Select files:</label>
              <input type="file" id="fileToUpload[]" name="fileToUpload[]" multiple>
              </div>
              <br><br>
              <input type="submit" name="upload" class=" btn btn-success" value="Confirm" ></input>
              <br><br>
          </div>                
        </form>
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

    

    
  </script>