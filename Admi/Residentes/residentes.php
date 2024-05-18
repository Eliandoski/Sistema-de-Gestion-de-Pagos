<?php
require 'conexion.php';

$where = "";
$campo = "";

if (!empty($_POST)) {
    $campo = $_POST['campo'];
    if (!empty($campo)) {
        $where = "WHERE RESI_NOMB LIKE '%$campo' OR RESI_APEL LIKE '%$campo' OR RESI_CEDU LIKE '%$campo' OR RESI_TELF LIKE '%$campo' OR RESI_CASA LIKE '%$campo'";
    }
}

$sql = "SELECT * FROM residentes $where";
$resultado = $mysqli->query($sql);
?>

<html lang="es">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<link rel="stylesheet" href="CSS/loader.css">
		<link href="css/menu.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
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
<div class="col-md-12 text-center mt-5">     
                <span id="loaderFiltro">  </span>
</div>
	<header>
        <div class="icon__menu">
            <i class="fas fa-bars" id="btn_open"></i>
        </div>
    </header>

    <div class="menu__side" id="menu_side">

        <div class="name__page">
            <i class="fa fa-user-gear"></i>
            <h4>Usuario</h4>
        </div>

        <div class="options__menu">	

            <a href="../inicio_admin.php" class="selected">
                <div class="option">
                    <i class="fas fa-home" title="Inicio"></i>
                    <h4>Inicio</h4>
                </div>
            </a>

			<a href="../usuarios.php">
                <div class="option">
                    <i class="fa fa-user-plus" title="Usuarios"></i>
                    <h4>Usuarios</h4>
                </div>
            </a>

            <a href="residentes.php">
                <div class="option">
                    <i class="fa fa-users" title="Residentes"></i>
                    <h4>Residentes</h4>
                </div>
            </a>

            <a href="../Pagos/pagos.php">
                <div class="option">
                    <i class="fa fa-money" title="Pagos"></i>
                    <h4>Pagos</h4>
                </div>
            </a>

            <a href="../../index.php">
                <div class="option">
                    <i class="fa fa-power-off" title="Cerrar Sesion"></i>
                    <h4>Cerrar Sesion</h4>
                </div>
            </a>

        </div>

    </div>
		<div class="container">
			<div class="row">
				<h2 style="text-align:center; font-family: 'Helvetica Neue', sans-serif; font-size: 40px; font-weight: 800;">Residentes</h2><br>
			</div>
			
			<div class="row">
				<a href="nuevo.php" class="btn btn-success" style="font-family: 'Helvetica Neue', sans-serif;"><i class="fa-solid fa-plus"></i> Añadir</a>
				<a href="fpdf/PruebaV.php" target="_blank" class="btn btn-danger" style="font-family: 'Helvetica Neue', sans-serif;"><i class="fa-solid fa-file-pdf" style="color: #FFFFFFF;"></i> Generar Reporte</a><br><br>
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <input type="text" id="campo" name="campo" value="<?php echo $campo; ?>" />
    <button type="submit" id="enviar" name="enviar" class="btn btn-info" style="font-family: 'Helvetica Neue', sans-serif;">
        <i class="fa-solid fa-magnifying-glass" style="color: #ffffff;"></i> Buscar
    </button>
</form>
			</div>
			
			<br>
			
			<div class="row table-responsive">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>ID</th>
							<th>NOMBRE</th>
							<th>APELLIDOS</th>
							<th>CÉDULA</th>
							<th>TELÉFONO</th>
							<th>Nº DE CASA</th>
							<th style="text-align: center" colspan="2">ACCIÓN</th>

						</tr>
					</thead>
					
					<tbody>
						<?php 
						include('config.php');
						$i =1;
						while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
							<tr>
							    <td><?php echo $i++; ?></td>
								<td><?php echo $row['RESI_NOMB']; ?></td>
								<td><?php echo $row['RESI_APEL']; ?></td>
								<td><?php echo $row['RESI_CEDU']; ?></td>
								<td><?php echo $row['RESI_TELF']; ?></td>
								<td><?php echo $row['RESI_CASA']; ?></td>
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
		
		<script>
			$('#confirm-delete').on('show.bs.modal', function(e) {
				$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
				
				$('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
			});
		</script>	
		 <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script src="assets/js/material.min.js"></script>
  <script>
  $(function() {
      setTimeout(function(){
        $('body').addClass('loaded');
      }, 600);


//FILTRANDO REGISTROS
$("#filtro").on("click", function(e){ 
  e.preventDefault();
  
  loaderF(true);

  var f_ingreso = $('input[name=fecha_ingreso]').val();
  var f_fin = $('input[name=fechaFin]').val();
  console.log(f_ingreso + '' + f_fin);

  if(f_ingreso !="" && f_fin !=""){
    $.post("filtro.php", {f_ingreso, f_fin}, function (data) {
      $("#tableEmpleados").hide();
      $(".resultadoFiltro").html(data);
      loaderF(false);
    });  
  }else{
    $("#loaderFiltro").html('<p style="color:red;  font-weight:bold;">Debe seleccionar ambas fechas</p>');
  }
} );


function loaderF(statusLoader){
    console.log(statusLoader);
    if(statusLoader){
      $("#loaderFiltro").show();
      $("#loaderFiltro").html('<img class="img-fluid" src="img/cargando.svg" style="left:50%; right: 50%; width:50px;">');
    }else{
      $("#loaderFiltro").hide();
    }
  }
});
</script>
	</body>
</html>	