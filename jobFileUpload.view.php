
 <!-- Popup form to upload the required attachments for the request -->
 <div class="popup">
  <div class="popup-content">
  <img src="img/close.jpg" alt="" class="close"> 
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

    document.querySelector(".close").addEventListener("click",function(){
    document.querySelector(".popup").style.display="none";
    })
  </script>