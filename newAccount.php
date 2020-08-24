<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create new account</title>
</head>
<body>
<?php include_once("inc/Header.php"); ?><br>

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
        $newAcCtrll=new newAccCtrl();
        $message=$newAcCtrll->createAccount($ID,$pw1,$pw2,$first_name,$second_name,$address,$telephone,$email,$school,$occupation);
        echo $message;
    }
?>

<form action = "newAccount.php" method="POST">  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text">@</span>
    </div>
    <input type="text" class="form-control" placeholder="Username">
  </div>

 NATIONAL ID NO : <input name="ID" type="text">
 FIRST_NAME     : <input name="first_name" type="text">
 SECOND_NAME    : <input name="second_name" type="text">
 ADDRESS        : <input name="address" type="text">
 TELEPHONE      : <input name="telephone" type="text">
 EMAIL ADDRESS   : <input name="email" type="text">
 SCHOOL         : <input name="school" type="text">
 OCCUPATION    :          
 <select name="occupation">
 <option value="teacher">teacher</option>
 <option value="Principal">Principal</option>
 <option value="Staff">Staff</option>
</select><br>
 enter   password : <input name="password1" type="password">
 confirm password : <input name="password2" type="password"> 
<input name="submit" type="submit">
</form>



<?php include_once('inc/Footer.php'); ?>
</body>
</html>
