<?php
$identificacion = $_POST['identificacion'];
$nombre=$_POST['nombre'];
$telefono=$_POST['telefono'];
$certificado=$_POST['certificado'];
include('conexion.php');
$Query = $pdo->prepare("SELECT * FROM trabajador WHERE identificacion = :identificacion");
$Query->bindparam(':identificacion',$identificacion);
$Query->execute();
$encontroCliente = false;
foreach ($Query as $cliente) {
    if($cliente['identificacion'] == $identificacion){
        $encontroCliente = true;
    }  
}

if (!$encontroCliente) {
    $stmt = $pdo->prepare("INSERT INTO trabajador(identificacion, nombre, telefono, certificado) VALUES (:identificacion, :nombre, :telefono, :certificado)"); 
    $stmt->bindparam(':identificacion', $identificacion);
    $stmt->bindparam(':nombre', $nombre); 
    $stmt->bindparam(':telefono', $telefono);  
    $stmt->bindparam(':certificado', $certificado);  
    $stmt->execute();
    header('Location: '.$URL.'/layout/admin/views/trabajadores.php');
}else{
    $var = "La identificacion ".$identificacion." ya se encuentra registrada a nombre de ".$cliente['nombre'];
    echo '<link rel="stylesheet" href="'.$URL.'/public/css/controller_agregar.css">
            <section class="error_guardar">
                <h1>Error al guardar la informacion</h1>
                <h1>'.$var.'</h1>
                <a href="'.$URL.'/layout/admin/views/trabajadores.php" class="btn cancelar">Regresar</a>
            </section>';
}
?>