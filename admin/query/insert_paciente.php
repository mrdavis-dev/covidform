<?php
require_once "../../config/conexion.php";

$name = $_POST['name'];
$cedula = $_POST['cedula'];
$edad = $_POST['edad'];
$fecha_nac = $_POST["fecha_nac"];
$fecha_hi = $_POST['fecha_hi'];
$lugar_hi = $_POST["lugar_hisopado"];
$direccion = $_POST["direccion"];
$contactos = $_POST["contactos"];
$positivo = $_POST["positivo"];
$otros_paci = $_POST["otros_paci"];
$bolsa_comida = $_POST["bolsa_comida"];
$medicamento = $_POST["medicamento"];
$observa = $_POST["observa"];

if (empty($_POST['save'])) {
  // code...
  echo "<script>alert('no se ah registrado nada...');history.go(-1);</script>";
  // header("location: ../index.php?enviado");
}else{
  $sql = "INSERT INTO paciente (nombre, cedula, edad, fecha_nac, fecha_hi, lugar_hisopado, direccion, contactos, positivo, otros_paci, bolsa_comida, medicamento, observa) VALUES ('$name','$cedula','$edad','$fecha_nac','$fecha_hi','$lugar_hi','$direccion','$contactos','$positivo','$otros_paci','$bolsa_comida','$medicamento','$observa')";
  $result = mysqli_query($link,$sql);

  // header("location: ../index.php?enviado");
  echo ("<script>
    window.alert('Enviado con éxito');
    window.location.href='../add_paciente.php';
    </script>");
}
?>
