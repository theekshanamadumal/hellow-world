<?php 
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}?>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<!-- Custom CSS Style Sheet -->
<link rel="stylesheet" href="css/CustomStyleSheet.css">
<!-- Optional JavaScript -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<div class="container-fluid px-5">
<!-- Logo Panel -->
<div class="row p-1" >
        <div class="col">
            <div class="logo"><img class="Responsive image" src="img/logo.png" width="400" height="80"></div>
            <div class="clearfix"></div>
        </div>
        <div class="col   d-none d-md-block d-lg-block ">
            <h2 class="text-right" >Online Web Portal</h2>
        </div>
</div>

<!-- Navigation Panel -->
<nav class="navbar navbar-expand-lg navbar-light bg-company-red rounded">
  <a class="navbar-brand  d-none d-sm-block d-md-none d-block d-sm-none d-none d-md-block d-lg-none" href="#">Online Web Portal</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="Home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="ContactUs.php">Contact Us</a>
      </li>
      
     </ul>
     <ul class="nav navbar-nav navbar-right" id="myNavbar">
          
          <?php if(!isset($_SESSION['loginID'])) {?>
            <li class="nav-item active">
              <a class="nav-link" href="newAccount.php">Register&nbsp;</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="userLogin.php"> Login</a>
            </li>
            
          <?php } else {?>
            <li class="nav-item active"><a class="nav-link" href=<?php  echo $_SESSION['uI'] ?>>
            <?php echo $_SESSION['loginID'];?></a></li>
            <li class="nav-item active"><a class="nav-link" href="controller/logout.ctrl.php">Logout</a></li>
          <?php }?>
      </ul>
    
  </div>
</nav>





