<?php
include('../../../app/config/conexion.php');
include('../../../app/config/controller_sesion.php');
$id_equipo= $_GET['id_equipo']; 
$id_trabajador= $_GET['id_trabajador']; 
$query = $pdo->prepare('DELETE FROM trabajador_tiene_equipo WHERE id_trabajador = :id_trabajador && id_equipo = :id_equipo');
$query->bindparam(':id_trabajador',$id_trabajador);
$query->bindparam(':id_equipo',$id_equipo);
$query->execute();
$query2 = $pdo->prepare('UPDATE equipo SET reparado = "SI" WHERE identificador = :id_equipo ');
$query2->bindparam(':id_equipo',$id_equipo);
$query2->execute();


?>

<!DOCTYPE html>
<html lang="es">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo $URL?>/public/css/asignar_equipo.css">
    <!--======= Bootstrap CSS ==== -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Computer Technical Center</title> 
</head>
<body>
<section class="susses">
    <h1>Se ha cambiado el estado del equipo a reparado!...</h1>
        
    <section class="botones">
        <a href="<?php echo $URL?>/layout/admin/views/equipos_reparando.php" class="btn-2 cancelar">Regresar</a>
    </section>
    
</section>

</body>
</html>