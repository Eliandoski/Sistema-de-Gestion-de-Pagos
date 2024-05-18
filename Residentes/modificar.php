<?php
	require 'conexion.php';
	
	$id = $_GET['id'];
	
	$sql = "SELECT * FROM residentes WHERE id = '$id'";
	$resultado = $mysqli->query($sql);
	$row = $resultado->fetch_array(MYSQLI_ASSOC);
	
?>
<html lang="es">
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>	
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<h3 style="text-align:center">MODIFICAR REGISTRO</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="update.php" autocomplete="off">
				<div class="form-group">
					<label for="RESI_NOMB" class="col-sm-2 control-label">Nombre</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nombre" name="RESI_NOMB" placeholder="Nombre" value="<?php echo $row['RESI_NOMB']; ?>" required>
					</div>
				</div>
				
				<input type="hidden" id="id" name="id" value="<?php echo $row['id']; ?>" />
				
				<div class="form-group">
					<label for="RESI_APEL" class="col-sm-2 control-label">Apellidos:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="apellidos" name="RESI_APEL" placeholder="Apellidos" value="<?php echo $row['RESI_APEL']; ?>"  required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="RESI_CEDU" class="col-sm-2 control-label">Cedula:</label>
					<div class="col-sm-10">
						<input type="tel" class="form-control" id="cedula" name="RESI_CEDU" placeholder="Cedula" value="<?php echo $row['RESI_CEDU']; ?>" >
					</div>
				</div>
				
				<div class="form-group">
					<label for="RESI_TELF" class="col-sm-2 control-label">Telefono:</label>
					<div class="col-sm-10">
					<input type="tel" class="form-control" id="telefono" name="RESI_TELF" placeholder="Telefono" value="<?php echo $row['RESI_TELF']; ?>" >
					</div>
				</div>
				
				<div class="form-group">
					<label for="RESI_CASA" class="col-sm-2 control-label">Nº DE CASA:</label>
					<div class="col-sm-10">
					<input type="tel" class="form-control" id="telefono" name="RESI_CASA" placeholder="Nº de Casa" value="<?php echo $row['RESI_CASA']; ?>" >
					</div>
				</div>
				
				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="residentes.php" class="btn btn-warning"><i class="fa-solid fa-arrow-left" style="color: #ffffff;"></i> Regresar</a>
						<button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk" style="color: #FFFFFF;"></i> Guardar</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>