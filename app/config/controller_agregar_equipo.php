<?php
include('controller_sesion.php');
include('conexion.php');
$identificacion = $_POST['identificacion'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$telefono=$_POST['telefono'];
$equipo=$_POST['equipo'];
$descripcion=$_POST['descripcion'];
date_default_timezone_set('America/Bogota');
$fecha = date("Y-m-d");
$Query = $pdo->prepare("SELECT id FROM cliente WHERE identificacion = :identificacion");
$Query->bindparam(':identificacion',$identificacion);
$Query->execute();
$id = -1;
$encontroCliente = false;
$guardado = false;
foreach ($Query as $cliente) {
    $encontroCliente = true;
    $id = $cliente['id'];
}

if ($encontroCliente) {
    $stmt2 = $pdo->prepare("INSERT INTO equipo(danio, fecha_entrada, id, aquipo) VALUES (:danio, :fecha_entrada, :id, :aquipo)");
    $stmt2->bindparam(':danio',$descripcion);
    $stmt2->bindparam(':fecha_entrada',$fecha);
    $stmt2->bindparam(':id',$id);
    $stmt2->bindparam(':aquipo', $equipo); 
    $stmt2->execute();
    $guardado = true;
}else{
    $stmt = $pdo->prepare("INSERT INTO cliente(nombre, apellido, telefono, identificacion) VALUES (:nombre, :apellido, :telefono, :identificacion)"); 
    $stmt->bindparam(':nombre', $nombre); 
    $stmt->bindparam(':apellido', $apellido);
    $stmt->bindparam(':telefono', $telefono);   
    $stmt->bindparam(':identificacion', $identificacion);  
    $stmt->execute(); 
    $id = $pdo->lastInsertId();

    $stmt2 = $pdo->prepare("INSERT INTO equipo(danio, fecha_entrada, id, aquipo) VALUES (:danio, :fecha_entrada, :id,  :aquipo)");
    $stmt2->bindparam(':danio',$descripcion);
    $stmt2->bindparam(':fecha_entrada',$fecha);
    $stmt2->bindparam(':id',$id);
    $stmt2->bindparam(':aquipo', $equipo);
    $stmt2->execute();
    $guardado = true;
}


$informacion = nl2br('| ID: '.$id." |----------| ".'Nombres: '.$nombre.' '.$apellido." |----------| ".'Equipo: '.$equipo." |----------| ".'Descripcion: '.$descripcion.'| ');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="<?php echo $URL?>/public/css/controller_agregar.css">
    <title>Resultado</title>
</head>
<body>
    <?php
        if($guardado){
    ?>
            <section class="susses_guardar">
                <h1>Datos guardados correctamente</h1>
                <?php
                    include("generarqr.php");
                ?>
                <section class="botones">
                    <a href="<?php echo $URL?>/layout/admin/views/agregar_equipo.php" class="btn cancelar">Regresar</a>
                    <a href="temp/Qr.png" download class="btn descargar">Descargar Qr</a>
                </section>
            </section>
    <?php
        }else{
    ?>
            <section class="error_guardar">
                <h1>Error al guardar la informacion</h1>
                <a href="<?php echo $URL?>/layout/admin/views/agregar_equipo.php" class="btn cancelar">Regresar</a>
            </section>
    <?php
        }
    ?>
    
</body>
</html>