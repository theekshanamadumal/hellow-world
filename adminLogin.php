<html>
<head><title> Login page</title></head>
<body>
<?php include_once("inc/Header.php"); ?>
<?php
if   (isset($_POST['submit'])){
    $username=$_POST['user_name'];
    $givenPassword=$_POST['password'];
    
    $table='adminpwrds';
    $PswrdColumn='password1';
    $destination="adminUI.php";
    

    require_once 'controller/userLogin.ctrl.php';
    $loginctrll=new loginCtrl();
    $massege=$loginctrll->log($table,$PswrdColumn,$username,$givenPassword,$destination);
    echo$massege;
}
    

?>


<div class="row">

    <div class = "col"></div>
    <div class="col-md-auto ">    
    <div class="formcontainer  ">
        <form action = 'adminLogin.php' method="POST" enctype="multipart/form-data">
        <div class="container">
            <label for="uname"><b>Admin ID</b> </label>
            <input name="user_name" type="text" placeholder="Enter Username">

            <label for="psw"><b>Password</b> </label>
            <input name="password" type="password" placeholder="Enter Password">

            <input name="submit"  class="loginbtn" type="submit" value="Login">
            </div>
        </form>	
    </div>
    </div>
    <div class = "col"></div>
</div>

<?php include_once('inc/Footer.php'); ?> 
   	
</body>
</html>
