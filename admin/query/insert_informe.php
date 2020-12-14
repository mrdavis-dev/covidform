<?php
require_once "../../config/conexion.php";

$distrito = $_POST['distrito'];
$corre = $_POST['corregimiento'];
$cs = $_POST['casas_supervisadas'];
$positivos = $_POST['positivos'];
$contactos = $_POST['contactos_en_casa'];
$cn = $_POST['casos_nuevos'];
$segui = $_POST['seguimientos'];
$bc = $_POST['bolsas_comida'];
$cdm = $_POST['cantidad_medicamentos'];
$bm = $_POST['beneficiados_medicamento'];
$observa = $_POST['observacion'];

if (empty($_POST['save'])) {
  // code...
  echo "<script>alert('no se ah registrado nada...');history.go(-1);</script>";
  // header("location: ../index.php?enviado");
}else{
  $sql = "INSERT INTO informes (distrito, correg, casas_sup, positivo_casa, contactos_casa, casos_nuevos, seguimiento, bolsa_comida, cant_medica, benef_medica, observacion)
  VALUES ('$distrito','$corre','$cs','$positivos','$contactos','$cn','$segui','$bc','$cdm','$bm','$observa')";
  $result = mysqli_query($link,$sql);

  // header("location: ../index.php?enviado");
  echo ("<script>
    window.alert('Enviado con éxito');
    window.location.href='../create_informe.php';
    </script>");
}
?>
