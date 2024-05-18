
<?php
include("conexion.php");

$USUARIO = $_POST['ADMI_USER'];
$PASSWORD = $_POST['ADMI_CONT'];

$consulta = "SELECT * FROM admi where ADMI_USER = '$USUARIO' and ADMI_CONT ='$PASSWORD' ";
$resultado = mysqli_query($Conexion, $consulta);

$filas = mysqli_num_rows($resultado);

mysqli_free_result($resultado);
mysqli_close($Conexion);

if ($filas) {
    header("location:../Admi/inicio_admin.php");
} else {
    echo '<script>
        alert("Usuario o Contraseña Incorrectas");
        window.location.replace("../index.php"); 
      </script>';
}
?>