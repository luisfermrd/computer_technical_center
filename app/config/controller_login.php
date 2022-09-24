<?php
include('conexion.php');
$user=$_POST['usuario'];
$pass=$_POST['contraseña'];

$query_login = $pdo->prepare("SELECT*FROM admin where user='$user'");
$query_login->execute();

$usuario = $query_login->fetchAll(PDO::FETCH_ASSOC);
$contador = 0;
foreach ($usuario as $user) {
    $contador = $contador + 1;
    $usuario = $user['user'];
    $contrasenia = $user['pass'];
}

if ($contador == "0") {
    //No se encrontro el usuario
    header('Location: '.$URL.'/login/login_error.php');
}else{
    //Encontro el usuario
    if($pass == $contrasenia){
        session_start();
        $_SESSION['user']= $user;
        header('Location: '.$URL.'/layout/admin/views/principal.php');
    }else{
        header('Location: '.$URL.'/login/login_error.php');
    }
}
?>