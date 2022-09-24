<!--Equipos que estan reparados-->
<div class="container">
    <table id="tabla_registros" class="table table-striped display responsive nowrap" style="width:100%;">
        <thead>
            <tr>
                <th>id</th>
                <th>Nombre cliente</th>
                <th>Equipo</th>
                <th>Fecha de entrada</th>
                <th>Opcion</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($equipos_reparados as $equipo) {
                    $query7 = $pdo->prepare('SELECT nombre FROM cliente WHERE id = "'.$equipo['id'].'"');
                    $query7->execute();
                    $cliente = $query7->fetch(PDO::FETCH_ASSOC);

                    ?>
                        <tr>
                            <td><?php echo $equipo['identificador'];?></td>
                            <td><?php echo $cliente['nombre'];?></td>
                            <td><?php echo $equipo['aquipo'];?></td>
                            <td><?php echo $equipo['fecha_entrada'];?></td>
                            <td>
                                <a type="button" class="btn btn-primary" href="<?php echo $URL?>/layout/admin/crud/entregar_equipo.php?id=<?php echo $equipo['identificador'];?>">Entregar</a>
                            </td>
                        </tr>
                    <?php
                }
            ?>
        </tbody>
    </table>
</div>