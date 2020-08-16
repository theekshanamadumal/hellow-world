
<!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>change password</title>
    </head>
    <body>
    <?php include_once("inc/Header.php"); ?>
    
    

    <form action = "ChangePassword.php" method="POST">
    user ID  :<input name="user_id" type="text" id="">

    Email    :<input name="email" type="email" id="">

   <input name="submit" type="submit" id="" value="Submit">
   </form>

   <?php
   
   if   (isset($_POST['submit'])){

       $id=$_POST['user_id'];
       $email=$_POST['email'];
       require_once 'controller/changePassword.ctrl.php';
       $changePassword = new changePassword();
       $message=$changePassword->changePswd($id,$email);
       echo $message;
   }
    ?>  
    
    
    <?php include_once('inc/Footer.php'); ?>
    </body>


</html>

  
        
