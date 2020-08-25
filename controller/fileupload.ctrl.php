<?php
include_once 'model/fileupload.model.php';
class fileupload{
	public function file_upload($target_file)
    {
    	$filename = $_FILES['fileToUpload']['name'];
	   	$size = $_FILES['fileToUpload']['size'];
		if($this->is_file_choosen()){
			$message = "No file selected";
		}
		else{
		   	if (file_exists($target_file)) {
		      $message = "Sorry, file already exists.";
		    }

		    elseif ($_FILES["fileToUpload"]["size"] > 50000000) {
		      $message = "Sorry, your file is too large.";
		    }

		    else{
		      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		      	$uploadModel = new uploadModel();
		      	$msg = $uploadModel->file_details($filename,$size);
		      	echo $msg;
		        $message =  "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		      } else {
		        $message = "Sorry, there was an error uploading your file.";
		      }
		    }
		}
		return $message;

	}
	public function is_file_choosen()
    {
        if(!isset($_FILES['fileToUpload']) || $_FILES['fileToUpload']['error'] == UPLOAD_ERR_NO_FILE) {
            return true;
        }
        else return false;
    }
}
?>