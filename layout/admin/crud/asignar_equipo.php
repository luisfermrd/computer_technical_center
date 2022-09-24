
<?php
include('../../../app/config/conexion.php');
include('../../../app/config/controller_sesion.php');
$id = $_GET['id'];
$query = $pdo->prepare("SELECT*FROM trabajador");
$query->execute();
$trabajadores = $query->fetchAll(PDO::FETCH_ASSOC);
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
    <form action="<?php echo $URL?>/app/config/controller_asignar_equipo.php" method="post">
        <h1>Seleccione el trabajador al que le asignara el equipo...</h1>
        <input type="hidden" name="cod_equipo" value="<?php echo $id  ?>">
        <div class = "container-s">
            <section class="container-select">
                <select class="form-select" aria-label="Default select example" name="select">
                <?php
                    foreach ($trabajadores as $trabajador) {
                    ?>
                        <option value="<?php echo $trabajador['identificacion'];?>"><?php echo $trabajador['nombre'];?></option>
                    <?php
                    }
                ?>
                    
                </select>
            </section>
        </div>
        
        <section class="botones">
            <a href="<?php echo $URL?>/layout/admin/views/equipos_reparar.php" class="btn-2 cancelar">Regresar</a>
            <button type="submit" class="btn-2 asignar">Asignar</button>
        </section>
    </form>
</section>

</body>
</html>