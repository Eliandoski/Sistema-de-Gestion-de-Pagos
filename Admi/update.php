<?php
	
	require 'Login/conexion2.php';

	$id = $_POST['id'];
	$LOGI_USER = $_POST['LOGI_USER'];
	$LOGI_CONT = $_POST['LOGI_CONT'];

	
	$sql = "UPDATE usuarios SET LOGI_USER='$LOGI_USER', LOGI_CONT='$LOGI_CONT' WHERE id = '$id'";
	$resultado = $mysqli->query($sql);
	
?>

<html lang="es">
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="Pagos/css/bootstrap.min.css" rel="stylesheet">
		<link href="Pagos/css/bootstrap-theme.css" rel="stylesheet">
		<script src="Pagos/js/jquery-3.1.1.min.js"></script>
		<script src="Pagos/js/bootstrap.min.js"></script>	
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<div class="row" style="text-align:center">
				<?php 
					mysqli_close($mysqli);
					header("Location: usuarios.php");
 ?>
				
				<a href="usuarios.php" class="btn btn-primary">Regresar</a>
				
				</div>
			</div>
		</div>
	</body>
</html>
