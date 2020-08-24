
<!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>change password</title>
    </head>
    <body>
    <?php include_once("inc/Header.php"); ?>
    
    <?php
    if   (isset($_POST['submit'])){

       $id=$_POST['userId'];
       $email=$_POST['email'];
       require_once 'controller/changePassword.ctrl.php';
       $changePassword = new changePassword();
       $message=$changePassword->changePswd($id,$email);
       echo $message;
    }
    ?>  

    <form action = "ChangePassword.php" method="POST">
    user ID  :<input name="userId" type="text" id="">
    Email    :<input name="email" type="email" id="">
   <input name="submit" type="submit" id="" value="Submit">
   </form>

   <?php include_once('inc/Footer.php'); ?>
    </body>


</html>

  
        
