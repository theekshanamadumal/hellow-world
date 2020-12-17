<?php
include_once 'model/fileupload.model.php';
class fileuploader{

	public function uploadFile($file,$category,$NIC,$description)
    {if($NIC!=null){
		if ((strlen($NIC)==10 and (($NIC[strlen($NIC)-1] =='v') or ($NIC[strlen($NIC)-1] =='V') )) or (strlen($NIC) ==12) ){
		$extension=(pathinfo($file['name'],PATHINFO_EXTENSION));
		$targetFileName=$NIC.'-'.$description.'.'.$extension;
		$target_file = "files/records/".$category."/".$targetFileName;

		list($message,$status)=$this->saveFile($file,$target_file);

		if ($status=="success") {
			$tableUpdate=$this->updateRecordTable($category,$description.'.'.$extension,$NIC);
				if (!$tableUpdate) {
					$message =  "The file table upload error ";
					$status="error";
				}
		}
		}else{
			$message = "Invalid ID number.";
			$status = "warning";
		} 
	}else {$message='National Identy value can not be empty.';
		$status="warning";
}      	
		return array($message,$status);
	}


	public function saveFile($file,$target_file)
	{
		
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
				
					$message =  "The file ". basename( $file["name"]). " has been uploaded Successfully.";
					$status="success";
				}
				
			  
			  	else {
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



class userJobFileUploader{

	public function saveFiles($fileList,$filePath)
	{ if(!$this->is_files_choosen($fileList)){
		$message = "No files have been selected";
		$status="warning";
		return array($message,$status);}
	else{
		if (!file_exists($filePath)){
			mkdir($filePath);
		}
		$fileCount=0;
		foreach ($fileList['name'] as $fileName){
					
			$size=$fileList['size'][$fileCount];
			$tempName=$fileList["tmp_name"][$fileCount];
			$target_file=$filePath.'/'.$fileName;
			list($message,$status)=$this->uploadFile($target_file,$size,$tempName,$fileName);
			return array($message,$status);}

			echo $fileList['name'][$fileCount].'<br>';
			$fileCount++;

		}

       
   
	} 

	public function uploadFile($target_file,$size,$tempName,$fileName)
	{  

		
		if (file_exists($target_file)) {
			$message = "Sorry, file alreadys exists.";
			$status="warning";
		  }

		  elseif ( $size> 50000000) {
			$message = "Sorry, your file is too large.";
			$status="warning";
		  }

		else{

			if (move_uploaded_file($tempName, $target_file)) {
			  
				$message =  "The file ". basename( $fileName). " has been uploaded Successfully.";
				$status="success";
				
			}
			  
			
			else {
				$message = "Sorry, there was an error uploading your file.";
				$status="error";
			}
		  
		}
		return array($message,$status);
	}

	public function is_files_choosen()
    {
        if(!isset($fileList) || $fileList['error'][0] == UPLOAD_ERR_NO_FILE) {
            return true;
        }
        else return false;
	}

}

?>
