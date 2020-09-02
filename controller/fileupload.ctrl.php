<?php
include_once 'model/fileupload.model.php';
class fileuploader{
	public function uploadFile($file,$category,$NIC,$description)
    {
		$targetFileName=$NIC.'-'.$description;
	    $target_file = "files/records/".$category."/".$targetFileName;
	           

		if(!$this->is_file_choosen($file)){
			$message = "No file selected";
			$status="warning";
		}
		else{
		   	if (file_exists($target_file)) {
			  $message = "Sorry, file already exists.";
			  $status="warning";
		    }

		    elseif ($file['size'] > 50000000) {
			  $message = "Sorry, your file is too large.";
			  $status="warning";
		    }

		    else{
		      if (move_uploaded_file($file["tmp_name"], $target_file)) {
				$tableUpdate=$this->updateRecordTable($category,$description,$NIC);
				if ($tableUpdate) {
					$message =  "The file ". basename( $file["name"]). " has been uploaded Successfully.";
					$status="success";
				}
				else {
					$message="table update failed";
					$status="error";
				}

		      	
		      } else {
				$message = "Sorry, there was an error uploading your file.";
				$status="error";
		      }
		    }
		}
		return array($message,$status);

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
