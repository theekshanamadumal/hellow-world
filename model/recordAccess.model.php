<?php
include_once 'connection.model.php';
class recordAccessModel extends connection
{
    public function getRecordHistory($loginId,$category){

        $query= "SELECT recordName FROM records WHERE userID='{$loginId}' and recordType='{$category}'";
        $result=$this->runQuery($query);
        return $result;
    }

    /*public function validateID($loginId)
    {
        $query= "SELECT recordName FROM records WHERE userID='{$loginId}' and recordType='{$category}'";
        $result=$this->runQuery($query);
        return $result;
    }*/

    public function openFiles($loginId,$category){

       
            if ($category=='' or $loginId=='') {
                $message= "select a category and NIC";
                $status='info'; 
            } 
            else {

                $dir='files/records/'.$category;
                if (is_dir($dir)){
                    
                    $fileResult=$this->getRecordHistory($loginId,$category);
                    if ($this->numRows($fileResult)>0){
                       
                        echo'no of files : '.$this->numRows($fileResult).'<br><br>';
                        
                        while ($recordNameArray=$this->fetchAssoc($fileResult) ) {

                            $recordName=$recordNameArray['recordName'];
                            
                            $fileName= "Avaliable File:<a href=   '$dir/$loginId-$recordName'  target='_blank' > $loginId-$recordName</a><br>        ";
                            echo$fileName;
                        }
                       
                        $message= "select the requred file";
                        $status='success';

                    }
                    else{
                        $message= "no records avaliable";
                        $status='info';
                    }
                    
                    
                }
                else{
                    $message= "filePath error";
                    $status='error';
                }
            }
            return array($message,$status);
    }
    
    
}


?>