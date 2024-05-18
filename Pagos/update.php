<?php
	require 'conexion.php';

	$id = $_POST['id'];
	$RESI_NOMB = $_POST['RESI_NOMB'];
	$PAGO_MESS = $_POST['PAGO_MESS'];
	$PAGO_MONT = $_POST['PAGO_MONT'];
	$PAGO_TIPP = $_POST['PAGO_TIPP'];
	$PAGO_TIPO = $_POST['PAGO_TIPO'];
	$PAGO_DESC = $_POST['PAGO_DESC'];
	
	$sql = "UPDATE pagos SET RESI_NOMB='$RESI_NOMB', PAGO_MESS='$PAGO_MESS', PAGO_MONT='$PAGO_MONT', PAGO_TIPP='$PAGO_TIPP', PAGO_TIPO='$PAGO_TIPO', PAGO_DESC='$PAGO_DESC' WHERE id = '$id'";
	$resultado = $mysqli->query($sql);
	
?>

<html lang="es">
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<div class="row" style="text-align:center">
				<?php 
					mysqli_close($mysqli);
					header("Location: pagos.php");
 ?>
				
				<a href="pagos.php" class="btn btn-primary">Regresar</a>
				
				</div>
			</div>
		</div>
	</body>
</html>
