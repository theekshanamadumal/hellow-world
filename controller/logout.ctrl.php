<?php
   session_start();
   
   if(session_destroy()) {
      echo'loggedout';
      header("location:../Home.php");
   }
?>