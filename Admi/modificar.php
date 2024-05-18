<?php
	require 'Login/conexion2.php';
	
	$id = $_GET['id'];
	
	$sql = "SELECT * FROM usuarios WHERE id = '$id'";
	$resultado = $mysqli->query($sql);
	$row = $resultado->fetch_array(MYSQLI_ASSOC);
	
?>
<html lang="es">
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="Pagos/css/bootstrap.min.css" rel="stylesheet">
		<link href="Pagos/css/bootstrap-theme.css" rel="stylesheet">
		<script src="Pagos/js/jquery-3.1.1.min.js"></script>
		<script src="Pagos/js/bootstrap.min.js"></script>
		<script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>	
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<h3 style="text-align:center">MODIFICAR REGISTRO</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="update.php" autocomplete="off">
				<div class="form-group">
					<label for="LOGI_USER" class="col-sm-2 control-label">Usuario:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nombre" name="LOGI_USER" placeholder="Usuario" value="<?php echo $row['LOGI_USER']; ?>" required>
					</div>
				</div>
				
				<input type="hidden" id="id" name="id" value="<?php echo $row['id']; ?>" />
				
				<div class="form-group">
					<label for="LOGI_CONT" class="col-sm-2 control-label">Contraseña:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="apellidos" name="LOGI_CONT" placeholder="Contraseña" value="<?php echo $row['LOGI_CONT']; ?>"  required>
					</div>
				</div>

				
				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="usuarios.php" class="btn btn-warning"><i class="fa-solid fa-arrow-left" style="color: #ffffff;"></i> Regresar</a>
						<button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk" style="color: #FFFFFF;"></i> Guardar</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>