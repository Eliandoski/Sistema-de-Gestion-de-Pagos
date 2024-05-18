<?php
	require '../Login/conexion2.php';
	
	$where = "";
	
	if(!empty($_POST))
	{
		$valor = $_POST['campo'];
		if(!empty($valor)){
			$where = "WHERE LOGI_USER LIKE '%$valor'";
		}
	}

	$sql = "SELECT * FROM usuarios $where";
	$resultado = $mysqli->query($sql);
	
?>
<html lang="es">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="Pagos/css/bootstrap.min.css" rel="stylesheet">
		<link href="Pagos/css/bootstrap-theme.css" rel="stylesheet">
		<link href="Pagos/css/menu.css" rel="stylesheet">
		<link rel="stylesheet" href="Residentes/CSS/loader.css">
		<script src="Pagos/js/jquery-3.1.1.min.js"></script>
		<script src="Pagos/js/bootstrap.min.js"></script>	
		<script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
	</head>
	
	<body>
	<div id="demo-content">
          <div id="loader-wrapper">
            <div id="loader"></div>
            <div class="loader-section section-left"></div>
                <div class="loader-section section-right"></div>
            </div>
          <div id="content"> </div>
</div>
	<header>
        <div class="icon__menu">
            <i class="fas fa-bars" id="btn_open"></i>
        </div>
    </header>

    <div class="menu__side" id="menu_side">

        <div class="name__page">
            <i class="fa fa-user-gear"></i>
            <h4>Administrador</h4>
        </div>

        <div class="options__menu">	

            <a href="inicio_admin.php" class="selected">
                <div class="option">
                    <i class="fas fa-home" title="Inicio"></i>
                    <h4>Inicio</h4>
                </div>
            </a>

			<a href="usuarios.php">
                <div class="option">
                    <i class="fa fa-user-plus" title="Usuarios"></i>
                    <h4>Usuarios</h4>
                </div>
            </a>

            <a href="Residentes/residentes.php">
                <div class="option">
                    <i class="fa fa-users" title="Residentes"></i>
                    <h4>Residentes</h4>
                </div>
            </a>

            <a href="Pagos/pagos.php">
                <div class="option">
                    <i class="fa fa-money" title="Pagos"></i>
                    <h4>Pagos</h4>
                </div>
            </a>
            <a href="../index.php">
                <div class="option">
                    <i class="fa fa-power-off" title="Cerrar Sesion"></i>
                    <h4>Cerrar Sesion</h4>
                </div>
            </a>

        </div>

    </div>
		<div class="container">
			<div class="row">
				<h2 style="text-align:center; font-family: 'Helvetica Neue', sans-serif; font-size: 40px; font-weight: 800;">Usuarios</h2><br>
			</div>
			
			<div class="row">
				<a href="nuevo.php" class="btn btn-success" style="font-family: 'Helvetica Neue', sans-serif;"><i class="fa-solid fa-user-plus"></i> Añadir</a><p></p>
			</div>
			
			<br>
			
			<div class="row table-responsive">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>ID</th>
							<th>USUARIO</th>
							<th>CONTRASEÑA</th>
							<th style="text-align: center" colspan="2">ACCIÓN</th>

						</tr>
					</thead>
					
					<tbody>
						<?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
							<tr>
								<td><?php echo $row['id']; ?></td>
								<td><?php echo $row['LOGI_USER']; ?></td>
								<td><?php echo $row['LOGI_CONT']; ?></td>
								<td style="text-align: center"><a href="modificar.php?id=<?php echo $row['id']; ?>"><span class="fa-solid fa-pen-to-square" style="color: #000000; font-size: 20px;"></span></a></td>
								<td style="text-align: center"><a href="#" data-href="eliminar.php?id=<?php echo $row['id']; ?>" data-toggle="modal" data-target="#confirm-delete"><span class="fa-solid fa-trash" style="color: #ff0000; font-size: 20px;"></span></a></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
		
		<!-- Modal -->
		<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="myModalLabel">Eliminar Registro</h4>
					</div>
					
					<div class="modal-body">
						¿Desea eliminar este registro?
					</div>
					
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
						<a class="btn btn-danger btn-ok">Eliminar</a>
					</div>
				</div>
			</div>
		</div>
		<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script>
  $(function() {
      setTimeout(function(){
        $('body').addClass('loaded');
      }, 1000);
});
</script>
		<script>
			$('#confirm-delete').on('show.bs.modal', function(e) {
				$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
				
				$('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
			});
		</script>	
		
	</body>
</html>	