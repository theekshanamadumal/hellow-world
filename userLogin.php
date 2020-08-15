<html>
<head><title> Login page</title></head>
<body>

<?php
if   (isset($_POST['submit'])){
    $username=$_POST['user_name'];
    $givenPassword=$_POST['password'];

    $table='passwords';
    $PswrdColumn='password';
    $destination="UserJobs.php";
    

    require_once 'controller/userLogin.ctrl.php';
    $loginctrll=new loginCtrl();
    $massege=$loginctrll->log($table,$PswrdColumn,$username,$givenPassword,$destination);
    echo$massege;
}
    

?>
<?php include_once("inc/Header.php"); ?>
<div class="container pl-5">
    <form action = 'userLogin.php' method="POST">
    
        Username:  <input name="user_name" type="text" id="">

        Password :  <input name="password" type="password" id="">

        <input name="submit" type="submit" id="" value="log in">
    </form>	
    <br>    
    <a href="ChangePassword.php">CAN'T REMEMBER PASSWORD</a><br>
    <a href="NewAccount.php">CREATE NEW ACCOUNT</a><br>
        
</div>
<?php include_once('inc/Footer.php'); ?>      	
</body>
</html>
