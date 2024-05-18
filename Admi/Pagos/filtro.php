<?php
sleep(1);
include('config.php');

/**
 * Nota: Es recomendable guardar la fecha en formato año - mes y dia (2022-08-25)
 * No es tan importante que el tipo de fecha sea date, puede ser varchar
 * La funcion strtotime:sirve para cambiar el forma a una fecha,
 * esta espera que se proporcione una cadena que contenga un formato de fecha en Inglés US,
 * es decir año-mes-dia e intentará convertir ese formato a una fecha Unix dia - mes - año.
*/

$fechaInit = date("Y-m-d", strtotime($_POST['f_ingreso']));
$fechaFin  = date("Y-m-d", strtotime($_POST['f_fin']));

$sqlTrabajadores = ("SELECT * FROM pagos WHERE  `PAGO_MESS` BETWEEN '$fechaInit' AND '$fechaFin' ORDER BY PAGO_MESS ASC");
$query = mysqli_query($con, $sqlTrabajadores);
//print_r($sqlTrabajadores);
$total   = mysqli_num_rows($query);
echo '<strong>Total: </strong> ('. $total .')';
?>

<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NOMBRE</th>
            <th scope="col">FECHA DE PAGO</th>
            <th scope="col">MONTO</th>
            <th scope="col">TIPO DE PAGO</th>
            <th scope="col">FORMA DE PAGO</th>
            <th scope="col">DESCRIPCIÓN</th>
        </tr>
    </thead>
    <?php
    $i = 1;
    while ($dataRow = mysqli_fetch_array($query)) { ?>
        <tbody>
            <tr>
            <td><?php echo $i++; ?></td>
                <td><?php echo $dataRow['RESI_NOMB']; ?></td>
                <td><?php echo $dataRow['PAGO_MESS']; ?></td>
                <td><?php echo $dataRow['PAGO_MONT']; ?></td>
                <td><?php echo $dataRow['PAGO_TIPP']; ?></td>
                <td><?php echo $dataRow['PAGO_TIPO']; ?></td>
                <td><?php echo $dataRow['PAGO_DESC']; ?></td>
                
            </tr>
        </tbody>
    <?php } ?>
</table>