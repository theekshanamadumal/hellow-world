
 <!-- Popup form to upload the required attachments for the request -->

 <div class="popup">
  <div class="popup-content">
  <img src="files/img/close.jpg" alt="" class="closebtn" > 
        <form class="popup-form" method='post' multiple="multiple" enctype="multipart/form-data">
          <div class="container-fluid">
              
              <div>
              <p>Add new Description</p>
              <input name="Description" type="text" >
              </div>
              <br><br>
              <input type="hidden" name="requestNo" id="hidden" value=''>
              <input type="submit" name="upload" id = "id" class=" btn btn-success" value="Save" ></input>
              <br><br>
          </div>                
        </form>
  </div>
  </div>

<!-- Script function to enable popup container-->
  <script>
    function popupFunction(requestNo){
    var number = requestNo;
    document.querySelector(".popup").style.display="flex";
    //document.getElementById("referenceNo").innerHTML=number;
    
    //changing the value of hidden to the requestNO
    document.getElementById("hidden").value = number;
    
    }    

    document.querySelector(".closebtn").addEventListener("click",function(){
    document.querySelector(".popup").style.display="none";
    })

    

    
  </script>