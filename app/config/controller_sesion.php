<?php
session_start();
if (isset($_SESSION['user'])) {
    //Existe la sesion
}else{
    header('location: '.$URL.'/login/index.php');
}
?>