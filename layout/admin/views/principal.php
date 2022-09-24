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
    
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    
    <title>Computer Technical Center</title> 
</head>
<body>

<?php
    include("../../fragment_views/menu.php");
?>

<section class="home">
    <div class="text">Computer Technical Center</div>
</section>

<script src="<?php echo $URL?>/public/js/script.js"></script>

</body>
</html>