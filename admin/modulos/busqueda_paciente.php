<?php
error_reporting(0);
//fetch.php
// $connect = mysqli_connect("localhost", "root", "", "gestor_restaurante");
require_once "../../config/conexion.php";
$output = '';
if (isset($_POST["query"])) {
    $search = mysqli_real_escape_string($link, $_POST["query"]);
    $query = "SELECT * FROM paciente WHERE cedula LIKE '%".$search."%'
 OR nombre LIKE '%".$search."%'
 OR fecha LIKE '%".$search."%'
 ";
} else {
    $query = "SELECT * FROM paciente ORDER BY fecha DESC";
}
$result = mysqli_query($link, $query);
if (mysqli_num_rows($result) > 0) {
    $output .= '
  <div class="table-responsive text-center">
   <table class="table table-hover">
    <tr>
    <th>#</th>
    <th>Fecha de registro</th>
    <th>Paciente</th>
    <th>Cedula</th>
    <th>Edad</th>
    <th>Fecha de nacimiento</th>
    <th>Fecha de hisopado</th>
    <th>Lugar de hisopado</th>
    <th>dirección</th>
    <th>contactos</th>
    <th>positivos en casa</th>
    <th>Otros pacientes</th>
    <th>Bolsas de comida</th>
    <th>Medicamentos</th>
    <th>Observación</th>
    </tr>
 ';

    while ($row = mysqli_fetch_array($result)) {
        $output .= '
   <tr>
   <td>'.$row["id"].'</td>
   <td>'.$row["fecha"].'</td>
   <td>'.$row["nombre"].'</td>
   <td>'.$row["cedula"].'</td>
   <td>'.$row["edad"].'</td>
   <td>'.$row["fecha_nac"].'</td>
   <td>'.$row["fecha_hi"].'</td>
   <td>'.$row["lugar_hisopado"].'</td>
   <td>'.$row["direccion"].'</td>
   <td>'.$row["contactos"].'</td>
   <td>'.$row["positivo"].'</td>
   <td>'.$row["otros_paci"].'</td>
   <td>'.$row["bolsa_comida"].'</td>
   <td>'.$row["medicamento"].'</td>
   <td>'.$row["observa"].'</td>
   </tr>
  ';
    }
    echo $output;
} else {
    echo 'Sin registros';
}
