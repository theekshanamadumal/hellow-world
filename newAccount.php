<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create new account</title>
</head>
<body>
<?php include_once("inc/Header.php"); ?>

<form action = "newAccount.php" method="POST">    
    
 NATIONAL ID NO : <input name="ID" type="text" id=""><br>
 FIRST_NAME     : <input name="first_name" type="text" id=""><br>
 SECOND_NAME    : <input name="second_name" type="text" id=""><br>
 ADDRESS        : <input name="address" type="text" id=""><br>
 TELEPHONE      : <input name="telephone" type="text" id=""><br>
 EMAIL ADDRESS   : <input name="email" type="text" id=""> <br>
 SCHOOL         : <input name="school" type="text" id="">
   
 OCCUPATION    :          <select name="occupation">
 <option value="teacher">teacher</option>
 <option value="Principal">Principal</option>
 <option value="Staff">Staff</option>

            </select>
    <br>
 enter   password : <input name="password1" type="password" id=""><br>
 confirm password : <input name="password2" type="password" id=""><br>   
<input name="submit" type="submit" id="">
</form>
<?php

    if (isset($_POST['submit'])) {

    
        $ID=$_POST["ID"];    
        $pp=$_POST["password1"];
        
        $first_name=$_POST['first_name'];
        $second_name=$_POST['second_name'];
        $address=$_POST['address'];
        $telephone=$_POST['telephone'];
        $email=$_POST['email'];
        $school=$_POST['school'];
        $occupation=$_POST['occupation'];

        require_once 'controller/newAcc.ctrl.php';
        $PswrdColumn='passwords';
    }
   
?></div>
<?php include_once('inc/Footer.php'); ?>
</body>
</html>
