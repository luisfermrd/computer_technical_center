<?php
include('../../../app/config/conexion.php');
include('../../../app/config/controller_sesion.php');
$id_equipo= $_GET['id'];
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
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <title>Computer Technical Center</title> 
</head>
<body>
<section class="susses">
    <form action="<?php echo $URL?>/app/config/controller_entregar_equipo.php" method="post">
        <h1>Complete los datos:</h1>

        <input type="hidden" name="cod_equipo" value="<?php echo $id_equipo  ?>">

        <div class="contendor_input">
            <label>Valor del pago:</label>
            <div class="input">
            <i class='bx bx-money ic' ></i>
                <input type="number" placeholder="Pago" required name="pago">
            </div>
        </div>

        <div class="contendor_input">
            <label>Garantia:</label>
            <div class="input">
            <i class='bx bx-check-square ic'></i>
                <input type="text" placeholder="Garantia" required name="garantia">
            </div>
        </div>

        <section class="botones">
            <a href="<?php echo $URL?>/layout/admin/views/equipos_reparados.php" class="btn-2 cancelar">Regresar</a>
            <button type="submit" class="btn-2 asignar">Registrar pago</button>
        </section>

    </form>
</section>

</body>
</html>