<?php
include('../../../app/config/conexion.php');
include('../../../app/config/controller_sesion.php');
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
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="<?php echo $URL?>/public/css/menu.css">
    <link rel="stylesheet" href="<?php echo $URL?>/public/css/agregar_trabajador.css">
    
    <!----===== Boxicons CSS ===== -->
    <link rel="stylesheet" type="text/css" href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <!--======= Bootstrap CSS ==== -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!--Tabla responsive-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.dataTables.min.css">
    <title>Trabajadores</title> 
</head>
<body>

<?php
    include("../../fragment_views/menu.php");
?>

<section class="home">
    <div class="text">Trabajadores</div>

    <section class="contenedor_form">
        <form action="<?php echo $URL?>/app/config/controller_agregar_trabajador.php" method="post" class="formulario">
            <section class="contenedor_grupo">

                <section class="titulo">
                    <h2>Informacion del trabajador:</h2>
                    <hr>
                </section>

                <div class="contendor_input">
                    <label>N° Identificacion:</label>
                    <div class="input">
                    <i class='bx bx-id-card ic'></i>
                        <input type="number" placeholder="N° Identificacion" required name="identificacion">
                    </div>
                </div>
                <div class="contendor_input">
                    <label>Nombres:</label>
                    <div class="input">
                        <i class='bx bx-rename ic'></i>
                        <input type="text" placeholder="Nombres" required name="nombre">
                    </div>
                </div>
                <div class="contendor_input">
                    <label>Telefono:</label>
                    <div class="input">
                        <i class='bx bx-dialpad ic'></i>
                        <input type="number" placeholder="Telefono" required name="telefono">
                    </div>
                </div>
                <div class="contendor_input">
                    <label>Certificado:</label>
                    <div class="input">
                    <i class='bx bx-certification ic' ></i>
                        <input type="text" placeholder="Certificado" required name="certificado">
                    </div>
                </div>

            </section>
        
            <div class="button">
                <input type="submit" name="guardar" class="btn2">
            </div>
        </form>
    </section>

    <div class="container container_tabla" >
        <section class="titulo2">
            <h2>Trabajadores registrados:</h2>
            <hr>
        </section>
        <table id="tabla_registros" class="table table-striped display responsive nowrap" style="width:100%">
            <thead>
                <tr>
                    <th>Identificacion</th>
                    <th>Nombres</th>
                    <th>Telefono</th>
                    <th>Certificado</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($trabajadores as $trabajador) {
                        ?>
                            <tr>
                                <td><?php echo $trabajador['identificacion'];?></td>
                                <td><?php echo $trabajador['nombre'];?></td>
                                <td><?php echo $trabajador['telefono'];?></td>
                                <td><?php echo $trabajador['certificado'];?></td>
                            </tr>
                        <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
</section>

<!--Tabla responsive-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
<script type="text/javascript" src="<?php echo $URL?>/public/js/script.js"></script>

</body>
</html>