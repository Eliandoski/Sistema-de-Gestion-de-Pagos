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
				<h3 style="text-align:center">NUEVO REGISTRO</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="guardar.php" autocomplete="off">
				<div class="form-group">
					<label for="RESI_NOMB" class="col-sm-2 control-label">Nombre:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nombre" name="RESI_NOMB" placeholder="Nombre" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="RESI_APEL" class="col-sm-2 control-label">Apellidos:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="email" name="RESI_APEL" placeholder="Apellidos" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="RESI_CEDU" class="col-sm-2 control-label">Cedula:</label>
					<div class="col-sm-10">
						<input type="tel" class="form-control" id="cedula" name="RESI_CEDU" placeholder="Cedula">
					</div>
				</div>
				
				<div class="form-group">
					<label for="RESI_TELF" class="col-sm-2 control-label">Telefono:</label>
					<div class="col-sm-10">
					<input type="text" class="form-control" id="telefono" name="RESI_TELF" placeholder="Telefono" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="RESI_CASA" class="col-sm-2 control-label">Nº DE CASA:</label>
					<div class="col-sm-10">
					<input type="text" class="form-control" id="casa" name="RESI_CASA" placeholder="Nº de Casa" required>
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