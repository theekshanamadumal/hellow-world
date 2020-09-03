
<!-- Popup form to upload the required attachments for the request -->

<div class="popup">
  <div class="popup-content" >
  <img src="files/img/close.jpg" alt="" class="closebtn" > 
  <div style="padding:7em;">
  <?php  
   
    $message='login before search  records<br>
        <a href="userLogin.php">login here</a>';
    echo $message;
  ?>
  </div>
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
    <?php echo $function ?>
  </script>
