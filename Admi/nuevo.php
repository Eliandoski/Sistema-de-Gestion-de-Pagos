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
				<h3 style="text-align:center">NUEVO REGISTRO</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="guardar.php" autocomplete="off">
				<div class="form-group">
					<label for="RESI_NOMB" class="col-sm-2 control-label">Usuario</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nombre" name="LOGI_USER" placeholder="Usuario" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="RESI_APEL" class="col-sm-2 control-label">Contraseña</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="email" name="LOGI_CONT" placeholder="Contraseña" required>
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