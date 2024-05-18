<?php
// Recuperar el nombre de la URL si está presente
$nombre = isset($_GET['nombre']) ? $_GET['nombre'] : '';
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
				<h3 style="text-align:center">NUEVO REGISTRO</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="guardar.php" autocomplete="off">
				<div class="form-group">
					<label for="RESI_NOMB" class="col-sm-2 control-label">NOMBRE</label>
					<div class="col-sm-10">
					<input type="text" class="form-control" id="nombre" name="RESI_NOMB" placeholder="Nombre" value="<?php echo $nombre; ?>" readonly>
					</div>
				</div>
				
				<div class="form-group">
					<label for="PAGO_MESS" class="col-sm-2 control-label">FECHA DE PAGO</label>
					<div class="col-sm-10">
					<input type="DATE" class="form-control" id="nombre" name="PAGO_MESS" placeholder="Nombre"  required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="PAGO_MONT" class="col-sm-2 control-label">MONTO</label>
					<div class="col-sm-10">
						<input type="tel" class="form-control" id="cedula" name="PAGO_MONT" placeholder="Monto">
					</div>
				</div>
				<div class="form-group">
					<label for="PAGO_TIPP" class="col-sm-2 control-label">TIPO DE PAGO:</label>
					<div class="col-sm-10">
					<select name="PAGO_TIPP" id="PAGO_TIPP" class="form-control">
					<option value="Seleccione...">Seleccione...</option>
							<option value="Pago Completo">Pago Completo</option>
							<option value="Abono">Abono</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="PAGO_MONT" class="col-sm-2 control-label">FORMA DE PAGO</label>
					<div class="col-sm-10">
					<select name="PAGO_TIPO" id="PAGO_TIPO" class="form-control">
					<option value="Seleccione...">Seleccione...</option>
							<option value="Efectivo">Efectivo</option>
							<option value="Transferencia">Transferencia</option>
						</select>
					</div>
				</div>


				<div class="form-group">
					<label for="PAGO_DESC" class="col-sm-2 control-label">DESCRIPCIÓN</label>
					<div class="col-sm-10">
					<input type="text" class="form-control" id="telefono" name="PAGO_DESC" value="Pago a guardianía de la Julio Estupiñan" required>
					</div>
				</div>

				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="pagos.php" class="btn btn-warning"><i class="fa-solid fa-arrow-left" style="color: #ffffff;"></i> Regresar</a>
						<button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk" style="color: #FFFFFF;"></i> Guardar</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>