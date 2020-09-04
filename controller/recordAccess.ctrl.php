<?php
include_once 'model/recordAccess.model.php';
class recordViewer{
    public function viewRecords($userId,$category)
    {
        $recordAccessModel=new recordAccessModel();
        return $recordAccessModel->openFiles($userId,$category);
    }
}

?>