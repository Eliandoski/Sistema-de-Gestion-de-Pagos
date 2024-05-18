<?php
include("conexion.php");

$USUARIO = $_POST['LOGI_USER'];
$PASSWORD = $_POST['LOGI_CONT'];

$consulta = "SELECT * FROM usuarios where LOGI_USER = '$USUARIO' and LOGI_CONT ='$PASSWORD' ";
$resultado = mysqli_query($Conexion, $consulta);

$filas = mysqli_num_rows($resultado);

mysqli_free_result($resultado);
mysqli_close($Conexion);

if ($filas) {
    header("location:../inicio.php");
} else {
    echo '<script>
        alert("Usuario o Contraseña Incorrectas");
        window.location.replace("../index.php"); 
      </script>';
}
?>