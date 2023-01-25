<?php 
session_start();
if(isset($_SESSION['email'])){
session_destroy();
 header("location: login1.php");
}else{
    header("location: reg1.php");
}
?>