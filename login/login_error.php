<?php
include('../app/config/config.php');
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="<?php echo $URL?>/public/css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
</head>

<body>
        <form action="<?php echo $URL?>/app/config/controller_login.php" method="POST">
            <div class="form_container">
                <div class="login">
                    <h1 class="animate__animated animate__backInLeft">Computer Technical Center</h1>
                    <p>Usuario</p><input type="text" placeholder="ingrese su nombre de usuario" name="usuario" required>
                    <p>Contraseña</p> <input type="password" placeholder="ingrese su contraseña" name="contraseña" required>
                    <div class="error">
                        <h3>Usuario o contraseña incorrectos</h3>
                    </div>
                </div>
                <input type="submit" value="Ingresar" name ="btnLogin">
            </div>
        </form>
</body>

</html>