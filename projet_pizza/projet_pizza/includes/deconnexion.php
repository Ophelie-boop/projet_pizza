<?php
session_start();
 if(isset($_SESSION['id_client'])){

    session_unset();
    session_destroy(); 
    header('location:../index.php');   
}
   

?>