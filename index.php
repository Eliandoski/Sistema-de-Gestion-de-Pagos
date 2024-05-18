<?php
include ("login/Conexion.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Residentes/CSS/loader.css">
    <title>Administrador</title>
    <link rel="stylesheet" href="login/style.css" />
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
    <main>
      <div class="box">
        <div class="inner-box">
          
          <div class="forms-wrap">
            <form action="login/validar2.php" autocomplete="off" class="sign-in-form" method="POST">
              <div class="logo">
                <img src="login/img/admin.png" alt="easyclass" />
                <h4>Administrador</h4>
              </div>
              <div class="heading">
                <h2>Iniciar como Administrador</h2>
                <h6>Eres un Usuario?</h6>
                <a href="#" class="toggle">Usuario</a>
              </div>
              
              <div class="actual-form">
                <div class="input-wrap">
                  <input type="text" name="ADMI_USER"  minlength="4"  class="input-field"  autocomplete="off"  />
                  <label>Usuario</label>
                </div>

                <div class="input-wrap">
                  <input  type="password"  name="ADMI_CONT"  minlength="4"  class="input-field"  autocomplete="off"  />
                  <label>Contraseña</label>
                </div>

                <input type="submit" value="Iniciar Sesión" class="sign-btn" />
              </div>
            </form>

            <form action="login/validar.php" autocomplete="off" class="sign-up-form" method="POST">
              <div class="logo">
                <img src="login/img/user.png" alt="easyclass" />
                <h4>Usuario</h4>
              </div>

              <div class="heading">
                <h2>Iniciar como Usuario</h2>
                <h6>Eres un Administrador?</h6>
                <a href="#" class="toggle">Administrador</a>
              </div>

              <div class="actual-form">
                <div class="input-wrap">
                  <input type="text"  minlength="4"  name="LOGI_USER"  class="input-field"  autocomplete="off"  required
                  />
                  <label>Usuario</label>
                </div>
                <div class="input-wrap">
                  <input  type="password"  name="LOGI_CONT"  minlength="4"  class="input-field"  autocomplete="off"  required
                  />
                  <label>Contraseña</label>
                </div>
                <input type="submit" value="Iniciar Sesión" class="sign-btn" />

          
              </div>
            </form>
          </div>

          <div class="carousel">
            <div class="images-wrapper">
              <img src="login/img/pagos.jpg" class="image img-1 show" alt="" />
            </div>

            <div class="text-slider">
              <div class="text-wrap">
                <div class="text-group">
                  <h2>Sistema de Administración de Pagos</h2>
                </div>
              </div>

              <div class="bullets">
                <span class="active" data-value="1"></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <!-- Javascript -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script>
  $(function() {
      setTimeout(function(){
        $('body').addClass('loaded');
      }, 1000);
});
</script>
    <script src="login/app.js"></script>
    <script src="login/vista.js"></script>
  </body>
</html>
