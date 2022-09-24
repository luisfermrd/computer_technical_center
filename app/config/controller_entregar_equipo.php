<?php
$id = $_POST['cod_equipo'];
$pago = $_POST['pago'];
$garantia = $_POST['garantia'];
date_default_timezone_set('America/Bogota');
$fecha = date("Y-m-d");
include('conexion.php');

$entregado = 'SI';
$stmt2 = $pdo->prepare("UPDATE equipo SET fecha_salida=:fecha_salida, pago=:pago, garantia=:garantia, entregado=:entregado WHERE identificador = :identificador"); 
$stmt2->bindParam(':fecha_salida', $fecha); 
$stmt2->bindParam(':pago', $pago); 
$stmt2->bindParam(':garantia', $garantia); 
$stmt2->bindParam(':entregado', $entregado); 
$stmt2->bindParam(':identificador', $id); 
$stmt2->execute();
header('Location: '.$URL.'/layout/admin/views/equipos_reparados.php');

?>