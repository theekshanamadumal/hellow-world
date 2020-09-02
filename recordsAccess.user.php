<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Access files</title>
</head>
<body>
    <h1>code to access files</h1>

    <?php 
    if(isset($_SESSION['loginID'])) {

        echo'logeed';

    }
    else{?>
        
 <div class="popup">
  <div class="popup-content">
  <img src="files/img/close.jpg" alt="" class="closebtn" > 
        <form class="popup-form" method='post' multiple="multiple" enctype="multipart/form-data">
          <div class="container-fluid">
              <div style="display:inline"><p>Job Type : <?php echo 'jobtype';?> </p> 
              </div>
              <div style="display:inline"><p>Job Name : <?php echo 'jobName';?></p> 
              </div>
              <div>
              <p>Upload required Attachments</p>
              <label for="myfile">Select files:</label>
              <input type="file" id="fileToUpload[]" name="fileToUpload[]" multiple>
              </div>
              <br><br>
              <input type="hidden" name="requestNo" id="hidden" value=''>
              <input type='submit' name='upload' class='Confirm-btn btn btn-success' id="upload" value='Confirm' /> 
              <br><br>
          </div>                
        </form>
  </div>
  </div>
    <?php }    ?>

</body>
</html>