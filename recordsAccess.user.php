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
<?php
    if(isset($_SESSION['loginID'])) {?>
    
<?php
    echo$_POST['category'];
    if (isset($_POST['category'])){
        $userId=$_SESSION['loginID'];
        include_once('controller/recordAccess.ctrl.php');
        $recordViewer=new recordViewer();
        $result=$recordViewer->viewRecords($userId);
        echo $result;
       
         
    }
    else{
        $message='select the record category';
        $status='info';
    }
    require_once 'alert.view.php';
    $alertView=new alert();
    echo $alertView->showAlert($message,$status);


    }
    else{
        $function='popupFunction();';    
    }
?>

        <form method="POST" action="recordsAccess.user.php">
        <span class="form-group">
                <label for="category">Record Category</label>
                <select class="form-control" name="category">
                      
                    <option></option>
                    <option value="01">01</option>
                    <option value="02">02</option>
                    <option value="03">03</option>
                    <option value="04">04</option>
                    <option value="05">05</option>
                    <option value="06">06</option>
                    <option value="07">07</option>
                    <option value="08">08</option>
                    <option value="09">09</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                </select>
        </span>
        </form>


<?php 
include_once('inc/Footer.php');
include_once('inc/popUp.view.php');

?>


</body>
</html>