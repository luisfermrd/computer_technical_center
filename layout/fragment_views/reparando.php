<!--Equipos que se estan reparando-->
<div class="container">
        <table id="tabla_registros" class="table table-striped display responsive nowrap" style="width:100%">
            <thead>
                <tr>
                    <th>Id trabajador</th>
                    <th>Nombre trabajador</th>
                    <th>Id equipo</th>
                    <th>Nombre equipo</th>
                    <th>Daño</th>
                    <th>Opcion</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($equipos_reparando as $equipo) {
                        $query4 = $pdo->prepare('SELECT nombre FROM trabajador WHERE identificacion = "'.$equipo['id_trabajador'].'"');
                        $query4->execute();
                        $trabajador = $query4->fetch(PDO::FETCH_ASSOC);

                        $query5 = $pdo->prepare('SELECT danio, aquipo FROM equipo WHERE identificador = "'.$equipo['id_equipo'].'"');
                        $query5->execute();
                        $datoEquipo = $query5->fetch(PDO::FETCH_ASSOC);

                        ?>
                            <tr>
                                <td><?php echo $equipo['id_trabajador'];?></td>
                                <td><?php echo $trabajador['nombre'];?></td>
                                <td><?php echo $equipo['id_equipo'];?></td>
                                <td><?php echo $datoEquipo['aquipo'];?></td>
                                <td><?php echo $datoEquipo['danio'];?></td>
                                <td>
                                    <a type="button" class="btn btn-primary" href="<?php echo $URL?>/layout/admin/crud/equipo_reparado.php?id_equipo=<?php echo $equipo['id_equipo'];?>&id_trabajador=<?php echo $equipo['id_trabajador'];?>">Equipo reparado</a>
                                </td>
                            </tr>
                        <?php
                    }
                ?>
            </tbody>
        </table>
    </div>