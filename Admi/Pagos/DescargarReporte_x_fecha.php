<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> <!--Importante--->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descargar</title>
    <style>
    .color{
        background-color: #9BB;  
    }
</style>
</head>
<body>
    
<?php
include('config.php');
$fecha = date("d_m_Y");


/**PARA FORZAR LA DESCARGA DEL EXCEL */
header("Content-Type: text/html;charset=utf-8");
header("Content-Type: application/vnd.ms-excel charset=iso-8859-1");
$filename = "ReporteExcel_" .$fecha. ".xls";
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Content-Disposition: attachment; filename=" . $filename . "");


/***RECIBIENDO LAS VARIABLE DE LA FECHA */
$fechaInit = date("Y-m-d", strtotime($_POST['fecha_ingreso']));
$fechaFin  = date("Y-m-d", strtotime($_POST['fechaFin']));
               

$sqlTrabajadores = ("SELECT * FROM pagos WHERE (PAGO_MESS>='$fechaInit' and PAGO_MESS<='$fechaFin') ORDER BY PAGO_MESS ASC");
$query = mysqli_query($con, $sqlTrabajadores);
?>


<table style="text-align: center;" border='1' cellpadding=1 cellspacing=1>
<thead>
    <tr style="background: #D0CDCD;">
    <th class="color">ID</th>
    <th class="color">NOMBRE</th>
    <th class="color">FECHA DE PAGO</th>
    <th class="color">MONTO</th>
    <th class="color">TIPO DE PAGO</th>
    <th class="color">FORMA DE PAGO</th>
    <th class="color">DESCRIPCIÓN</th>
    </tr>
</thead>
<?php
$i =1;
    while ($dataRow = mysqli_fetch_array($query)) { ?>
    <tbody>
        <tr>
        <td><?php echo $i++; ?></td>
            <td><?php echo $dataRow['RESI_NOMB']; ?></td>
            <td><?php echo $dataRow['PAGO_MESS']; ?></td>
            <td><?php echo $dataRow['PAGO_MONT'] ; ?></td>
            <td><?php echo $dataRow['PAGO_TIPP'] ; ?></td>
            <td><?php echo $dataRow['PAGO_TIPO'] ; ?></td>
            <td><?php echo $dataRow['PAGO_DESC'] ; ?></td>
        </tr>
    </tbody>
    
<?php } ?>
</table>

</body>
</html>