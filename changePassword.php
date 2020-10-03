
<!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    </head>
    <body>
    <?php include_once("inc/Header.php"); ?>
    
    <?php
    if   (isset($_POST['submit'])){

       $id=$_POST['userId'];
       $email=$_POST['email'];
       require_once 'controller/changePassword.ctrl.php';
       require_once 'inc/alert.view.php';
       $changePassword = new changePassword();
       $alertView=new alert();
       list($massege,$status)=$changePassword->changePswd($id,$email);
       echo $alertView->showAlert($massege,$status);
    }
    ?>  
    <div class="row" style="padding-top: 5%;">

    <div class="col-sm-4"></div>
    <div class="col-sm-4"> 
    <div class="col-md-auto "> 
    <div class="formcontainer  ">
        <form action = "ChangePassword.php" method="POST">
        <div class="container" class="textInput">
        <label for="uname"><b>User ID</b> </label>
        <input name="userId" type="text" placeholder="Enter NIC number">
        <label for="uname"><b>Email </b> </label>        
        <input name="email" type="text" placeholder="Enter email address">
        <input name="submit"  class="loginbtn" type="submit" id="" value="Submit">
        <br>
        <br>
        </div> 
       </form>
    
    </div>
    </div> 

        
    </div>
    <div class = "col-sm-4"></div>
        
    </div>
        
    </div>
    
   <?php include_once('inc/Footer.php'); ?>
    </body>


</html>

  
        
