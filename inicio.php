<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Residentes/CSS/loader.css">
    <link rel="stylesheet" href="Residentes/CSS/bienveni.css">

    <title>INICIO</title>

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
<div class="contenedor">
    <div class="cont_bien">
        <p class="tex_bien">Bienvenido Usuario al Gestor de Pagos</p>
        <img class="img_bien" src="Residentes/IMG/bien_img.png" alt="">
        
    </div>
    <div class="cont_resi">
        <p class="text">RESIDENTES</p>
        <img src="Residentes/IMG/residentes.png" alt="" width="100px"><br>
        <button><a href="Residentes/residentes.php">Residentes</a></button>
    </div>
    <div class="cont_pagos">
        <p class="text">PAGOS</p>
        <img src="Residentes/IMG/pagos.png" alt="" width="100px"><br>
        <button><a href="Pagos/pagos.php">Pagos</a></button>

    </div>
    <div class="cont_sesion">
        <p class="text">CERRAR SESION</p>
        <img src="Residentes/IMG/cerrar.png" alt="" width="100px"><br>
        <button><a href="index.php">Cerrar Sesión</a></button>

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
<br>
<br>
<script src="Residentes/JS/loader.js"></script>
<script src="JS/log.js"></script>
</body>
</html>