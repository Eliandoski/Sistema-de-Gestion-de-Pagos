<?php
	
	require 'conexion.php';
	
	$RESI_NOMB = $_POST['RESI_NOMB'];
	$RESI_APEL = $_POST['RESI_APEL'];
	$RESI_CEDU = $_POST['RESI_CEDU'];
	$RESI_TELF = $_POST['RESI_TELF'];
	$RESI_CASA = $_POST['RESI_CASA'];
	
	$sql = "INSERT INTO residentes (RESI_NOMB, RESI_APEL, RESI_CEDU, RESI_TELF, RESI_CASA) VALUES ('$RESI_NOMB', '$RESI_APEL', '$RESI_CEDU', '$RESI_TELF', '$RESI_CASA')";
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
					header("Location: residentes.php");
 ?>
					
					<a href="residentes.php" class="btn btn-primary">Regresar</a>
					
				</div>
			</div>
		</div>
	</body>
</html>
