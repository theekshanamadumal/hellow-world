<html>
<head><title> Login page</title></head>
<body>
<?php include_once("inc/Header.php"); ?>
<?php
if   (isset($_POST['submit'])){
    $username=$_POST['user_name'];
    $givenPassword=$_POST['password'];

    $table='passwords';
    $PswrdColumn='password';
    $destination="userUi.php";
    

    require_once 'controller/userLogin.ctrl.php';
    require_once 'alert.view.php';
    $loginctrll=new loginCtrl();
    $alertView=new alert();
    list($massege, $status)=$loginctrll->log($table,$PswrdColumn,$username,$givenPassword,$destination,"user");
    echo $alertView->showAlert($massege,$status);
    
}
    

?>

<div class="row">

    <div class = "col"></div>
    <div class="col-md-auto ">    
    <div class="formcontainer  ">
        <form class="userLogin" action = 'userLogin.php' method="POST">
        <div class="container" class="textInput">
            <label for="uname"><b>Username</b> </label>
            <input name="user_name" type="text" placeholder="Enter Username">

            <label for="psw"><b>Password</b> </label>
            <input name="password" type="password" placeholder="Enter Password">

            <input name="submit"  class="loginbtn" type="submit" value="Login">
            <br>
            <br>    
            <div class="d-flex justify-content-between">
            <a href="ChangePassword.php">Forgot Password?</a>
            <a href="NewAccount.php">Create New Account</a></div>
            </div>
        </form>	
    </div>
    </div>
    <div class = "col"></div>
</div>

<?php include_once('inc/Footer.php'); ?> 
 	
</body>
</html>
