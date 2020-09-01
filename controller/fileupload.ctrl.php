<?php
include_once 'model/fileupload.model.php';
class fileuploader{
	public function uploadFile($target_file,$file)
    {
		if($this->is_file_choosen($file)){
			$message = "No file selected";
		}
		else{
		   	if (file_exists($target_file)) {
		      $message = "Sorry, file already exists.";
		    }

		    elseif ($file['size'] > 50000000) {
		      $message = "Sorry, your file is too large.";
		    }

		    else{
		      if (move_uploaded_file($file["tmp_name"], $target_file)) {
		      	
		      } else {
		        $message = "Sorry, there was an error uploading your file.";
		      }
		    }
		}
		return $message;

	}
	public function is_file_choosen()
    {
        if(!isset($file) || $file['error'] == UPLOAD_ERR_NO_FILE) {
            return true;
        }
        else return false;
	}
	



	public function updateRecordTable($recordType,$recordName,$userId){
		$uploadModel = new fileUplpoadModel();
		return $uploadModel-> uploadFile($recordType,$recordName,$userId);


	}
	
	
}

?>
$msg = $uploadModel->file_details($file['name']);
echo $msg;
$message =  "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";