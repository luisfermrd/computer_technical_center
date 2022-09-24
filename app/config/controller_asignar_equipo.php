<?php
$id = $_POST['cod_equipo'];
$trabajador = $_POST['select'];
include('conexion.php');

$stmt = $pdo->prepare("INSERT INTO trabajador_tiene_equipo(id_equipo, id_trabajador) VALUES (:id_equipo,:id_trabajador)"); 
$stmt->bindparam(':id_equipo', $id);
$stmt->bindparam(':id_trabajador', $trabajador); 
$stmt->execute();

$reparando = 'SI';
$stmt2 = $pdo->prepare("UPDATE equipo SET reparando=:reparando WHERE identificador = :identificador"); 
$stmt2->bindParam(':reparando', $reparando); 
$stmt2->bindParam(':identificador', $id); 
$stmt2->execute();
header('Location: '.$URL.'/layout/admin/views/equipos_reparar.php');

?>