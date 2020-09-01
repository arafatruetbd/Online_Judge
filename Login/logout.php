<?php
session_start( );
if((isset($_SESSION['userName']))){
   unset($_SESSION['userName']);
   unset($_SESSION['Password']);
}  
session_destroy();
header("location: index.php");

 
?>