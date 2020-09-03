<?php
include_once 'model/recordAccess.model.php';
class recordViewer{
    public function viewRecords($userId)
    {
        $recordAccessModel=new recordAccessModel();
        return $recordAccessModel->getRecordHistory($userId);
    }
}

?>