<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>records</title>
</head>

<body>
<?php require_once'inc/Header.php';?>
<link rel="stylesheet" href="css/jobService.css">
<link rel="stylesheet" href="css/jobService.css">

<div class='container'>
<div class='row'>
<div class="col-sm-3"></div>
<div class="col-sm-6">
<br><br>
<form method="POST" action="recordAccess.admin.php" style="border: none;">
    
        <p class="form-group">
                <label for="userID">NIC Number</label>
                <input type="text" name="userID" class="form-control">
                <label for="category">Record Category</label>
                <select class="form-control" name="category">
                      
                    <option></option>
                    <option value="01">01-Birth Cetificate</option>
                    <option value="02">02-Salary Reports</option>
                    <option value="03">03-Marriage Certificate</option>
                    <option value="04">04-Service Description</option>
                    <option value="05">05-Vacation Details</option>
                    <option value="06">06-Diploma Certificate</option>
                    <option value="07">07-Promotion Certificate</option>
                    <option value="08">08-Income details</option>
                    <option value="09">09-Childern's Birth Certificates</option>
                    <option value="10">10-Exam Certificate</option>
                    <option value="11">11-Transfer Letters</option>
                    <option value="12">12-Training Letters</option>
                    <option value="13">13-Loan Details</option>
                </select>
        </p>
        <p><button name='upload'type="submit" class="btn btn-success">Search</button></p>
    
    
        
</form>





<?php
//echo $_SESSION['adminID'];
if(isset($_SESSION['adminID'])) {
        
    
    if (isset($_POST['category']) && isset($_POST['userID'])){

        $message='action failed';
        $status='warning';
        $userId=$_POST['userID'];
        
        //$userId=$_SESSION['loginID'];
        $category=$_POST['category'];
        include_once('controller/recordAccess.ctrl.php');
        $recordViewer=new recordViewer();
        list($message,$status)=$recordViewer->viewRecords($userId,$category);
              
    }
    else{
        $message='select the record category and ID Number ';
        $status='info';
    }
}
else{
    $message='log in to the account<br><a href="adminLogin.php">Login Here</a>  ';
    $status='warning';   
}

require_once 'inc/alert.view.php';
$alertView=new alert();
echo $alertView->showAlert($message,$status);

?>
</div>
<div class="col-sm-3"></div>
</div>
</div>
<?php

include_once('inc/Footer.php');


?>
</body>
</html>