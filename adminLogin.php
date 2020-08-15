<html>
<head><title> login page</title></head>
<body>

<?php
if   (isset($_POST['submit'])){
    $username=$_POST['user_name'];
    $givenPassword=$_POST['password'];
    
    $table='adminpwrds';
    $PswrdColumn='password1';
    $destination="adminUi.php";
    

    require_once 'controller/userLogin.ctrl.php';
    $loginctrll=new loginCtrl();
    $massege=$loginctrll->log($table,$PswrdColumn,$username,$givenPassword,$destination);
    echo$massege;
}
    

?>
<form action = 'adminLogin.php' method="POST">
    <pre ><br><br><br><h3><center>
admin name:  <input name="user_name" type="text" id="">

password :  <input name="password" type="password" id="">

    <input name="submit" type="submit" id="" value="log in"></form>	<br>
   
   
    <hr>
    <a href="ChangePassword.php">CAN'T REMEMBER PASSWORD</a><br>
    <a href="NewAccount.php">CREATE NEW ACCOUNT</a><br>
    <a href="./">main</a>
    </center></h3><hr>
    </pre>
        	
</body>
</html>
