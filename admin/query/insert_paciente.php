<?php
error_reporting(0);
require_once '../../config/conexion.php';

// $fecha_registro = $_POST['fecha_registro'];
$cedula = $_POST["cedula"];
$names = $_POST["names"];
$telefono = $_POST["telefono"];
$edad = $_POST['edad'];
$enfe_o_alergia = $_POST["enfe_o_alergia"];
$fecha_hi = $_POST["fecha_hi"];
$lugar_hisopado = $_POST["lugar_hisopado"];
$direccion = $_POST["direccion"];
$sintomas = $_POST["sintomas"];
$contactos_en_casa = $_POST["contactos_en_casa"];
$positivos_en_casa = $_POST["positivos_en_casa"];
$nota = $_POST["nota"];

if (empty($_POST['save'])) {
  // code...
  $sql = "INSERT INTO paciente (cedula, names, telefono, edad, enfe_o_alergia, fecha_hi, lugar_hisopado, direccion, sintomas, contactos_en_casa, positivos_en_casa, nota) 
  VALUES ('$cedula','$names','$telefono',$edad,'$enfe_o_alergia','$fecha_hi','$lugar_hisopado','$direccion','$sintomas',$contactos_en_casa,$positivos_en_casa,'$nota')";
  $result = mysqli_query($link, $sql);

  echo ("<script>
    window.alert('Enviado con éxito');
    window.location.href='../addpa.php';
    </script>");

} else {

  echo "<script>alert('no se ah registrado nada...');history.go(-1);</script>";
  
}
