<?php
include('../../../app/config/config.php');
include('../../../app/config/controller_sesion.php');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="<?php echo $URL?>/public/css/menu.css">
    <link rel="stylesheet" href="<?php echo $URL?>/public/css/agregar_equipo.css">
    
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    
    <title>Agregar Equipo</title> 
</head>
<body>

<?php
    include("../../fragment_views/menu.php");
?>

<section class="home">
    <div class="text">Agregar Equipo</div>
    <section class="contenedor_form">
        <form action="<?php echo $URL?>/app/config/controller_agregar_equipo.php" method="post" class="formulario">
            <section class="contenedor_grupo">

                <section class="titulo">
                    <h2>Informacion del cliente:</h2>
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
                    <label>Nombre:</label>
                    <div class="input">
                        <i class='bx bx-rename ic'></i>
                        <input type="text" placeholder="Nombre" required name="nombre">
                    </div>
                </div>
                <div class="contendor_input">
                    <label>Apellido:</label>
                    <div class="input">
                        <i class='bx bx-rename ic'></i>
                        <input type="text" placeholder="Apellido" required name="apellido">
                    </div>
                </div>
                <div class="contendor_input">
                    <label>Telefono:</label>
                    <div class="input">
                        <i class='bx bx-dialpad ic'></i>
                        <input type="number" placeholder="Telefono" required name="telefono">
                    </div>
                </div>

            </section>

            <section class="contenedor_grupo">

                <section class="titulo">
                    <h2>Informacion del equipo:</h2>
                    <hr>
                </section>

                <div class="contendor_input">
                    <label>Equipo:</label>
                    <div class="input">
                        <i class='bx bx-laptop ic'></i>
                        <input type="text" placeholder="Equipo" required name="equipo">
                    </div>
                </div>

                <div class="contenedor_text_area">
                    <label>Descripcion del problema:</label>
                    <textarea name="descripcion" rows="3" placeholder="Describa el daño del equipo" required></textarea>
                </div>

            </section>
        
            <div class="button">
                <input type="submit" name="guardar" class="btn">
            </div>
        </form>
    </section>
</section>
<script src="<?php echo $URL?>/public/js/script.js"></script>

</body>
</html>