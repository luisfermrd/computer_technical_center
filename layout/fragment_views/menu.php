<nav class="sidebar close">
    <header>
        <div class="image-text">
            <span class="image">
                <a href="<?php echo $URL?>/layout/admin/views/principal.php">
                    <img src="<?php echo $URL?>/public/img/logo.png" alt="">
                </a>
            </span>

            <div class="text logo-text">
                <span class="name">Administracion</span>
                <span class="profession">Computer Technical</span>
            </div>
        </div>

        <i class='bx bx-chevron-right toggle'></i>
    </header>

    <div class="menu-bar">
        <div class="menu">

            <ul class="menu-links">
                <li>
                    <a href="<?php echo $URL?>/layout/admin/views/principal.php">
                        <i class='bx bx-home-alt icon'></i>
                        <span class="text nav-text">Inicio</span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo $URL?>/layout/admin/views/agregar_equipo.php">
                        <i class='bx bxs-file-plus icon'></i>
                        <span class="text nav-text">Agregar equipo</span>
                    </a>
                </li>


                <li>
                    <a href="<?php echo $URL?>/layout/admin/views/trabajadores.php">
                    <i class='bx bx-briefcase icon'></i>
                        <span class="text nav-text">Trabajadores</span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo $URL?>/layout/admin/views/usuarios.php">
                    <i class='bx bx-user icon'></i>
                        <span class="text nav-text">Usuarios</span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo $URL?>/layout/admin/views/equipos_reparar.php">
                    <i class='bx bx-desktop icon' ></i>
                        <span class="text nav-text">Reparar</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo $URL?>/layout/admin/views/equipos_reparando.php">
                    <i class='bx bx-desktop icon' ></i>
                        <span class="text nav-text">Reparando</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo $URL?>/layout/admin/views/equipos_reparados.php">
                    <i class='bx bx-desktop icon' ></i>
                        <span class="text nav-text">Reparados</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo $URL?>/layout/admin/views/equipos_entregados.php">
                    <i class='bx bx-desktop icon' ></i>
                        <span class="text nav-text">Entregados</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="bottom-content">
            <li class="">
                <a href="<?php echo $URL?>/app/config/controller_cerrar_sesion.php">
                    <i class='bx bx-log-out icon' ></i>
                    <span class="text nav-text">Logout</span>
                </a>
            </li>
        </div>
    </div>

</nav>