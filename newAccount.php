<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create new account</title>
</head>
<body>
<?php include_once("inc/Header.php"); ?><br>
<link rel="stylesheet" href="css/newAccount.css">

<?php
    if (isset($_POST['submit'])) {

        $ID=$_POST["ID"];    
        $pw1=$_POST["password1"];
        $pw2=$_POST["password2"];
        
        $first_name=$_POST['first_name'];
        $second_name=$_POST['second_name'];
        $address=$_POST['address'];
        $telephone=$_POST['telephone'];
        $email=$_POST['email'];
        $school=$_POST['school'];
        $occupation=$_POST['occupation'];

        require_once 'controller/newAcc.ctrl.php';
        require_once 'inc/alert.view.php';
        $newAcCtrll=new newAccCtrl();
        $alertView=new alert();
        list($message,$status)=$newAcCtrll->createAccount($ID,$pw1,$pw2,$first_name,$second_name,$address,$telephone,$email,$school,$occupation);
        echo $alertView->showAlert($message,$status);
    }
?>
<div class="row">

<div class = "col-sm-3"></div>
<div class = "col-sm-6">
<div class="col-md-auto "> 
<div  class="form-container">

    <form action = "newAccount.php" method="POST" style="border: none;">
    <div class="container" class="textInput">
 <input name="ID" type="text" placeholder="National ID Number" >
 <input name="first_name" type="text"  placeholder="First Name">
  <input name="second_name" type="text"  placeholder="Last Name">
  <input name="address" type="text"  placeholder="Address">
  <input name="telephone" type="text"  placeholder="Telephone">
  <input name="email" type="text"  placeholder="Email Address">
  <input name="school" type="text"  placeholder="School"><br><br>
  Occupation         
 <select name="occupation"  placeholder="Occupation"><br><br>
 <option value=""></option>
 <option value="teacher">Teacher</option>
 <option value="Principal">Principal</option>
 <option value="Staff">Staff</option>
</select><br>
  <input name="password1" type="password"  placeholder="Enter Password">
  <input name="password2" type="password"  placeholder="Confirm Password"> 
  <input name="submit"  class="loginbtn" type="submit" value="Submit">
  </div>
</form>
</div>
    </div>
    </div>
    <div class = "col-sm-3"></div>
</div>



<?php include_once('inc/Footer.php'); ?>
</body>
</html>
