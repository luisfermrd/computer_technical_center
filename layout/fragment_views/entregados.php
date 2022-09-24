<!--Equipos entregados-->
<div class="container">
        <table id="tabla_registros" class="table table-striped display responsive nowrap" style="width:100%;">
            <thead>
                <tr>
                    <th>id equipo</th>
                    <th>Nombre cliente</th>
                    <th>Equipo</th>
                    <th>Fecha de entrega</th>
                    <th>Pago</th>
                    <th>Garantia</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($equipos_entregados as $equipo) {
                        $query7 = $pdo->prepare('SELECT nombre FROM cliente WHERE id = "'.$equipo['id'].'"');
                        $query7->execute();
                        $cliente = $query7->fetch(PDO::FETCH_ASSOC);

                        ?>
                            <tr>
                                <td><?php echo $equipo['identificador'];?></td>
                                <td><?php echo $cliente['nombre'];?></td>
                                <td><?php echo $equipo['aquipo'];?></td>
                                <td><?php echo $equipo['fecha_salida'];?></td>
                                <td><?php echo $equipo['pago'];?></td>
                                <td><?php echo $equipo['garantia'];?></td>
                            </tr>
                        <?php
                    }
                ?>
            </tbody>
        </table>
    </div>