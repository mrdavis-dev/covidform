<?php
error_reporting(0);
//fetch.php
// $connect = mysqli_connect("localhost", "root", "", "gestor_restaurante");
require_once "../../config/conexion.php";
$output = '';
if (isset($_POST["query"])) {
    $search = mysqli_real_escape_string($link, $_POST["query"]);
    $query = "SELECT * FROM informes WHERE corregimiento LIKE '%".$search."%'
 OR observacion LIKE '%".$search."%'
 OR distrito LIKE '%".$search."%'
 ";
} else {
    $query = "SELECT * FROM informes ";
}
$result = mysqli_query($link, $query);
if (mysqli_num_rows($result) > 0) {
    $output .= '
  <div class="table-responsive text-center">
   <table class="table table-hover">
    <tr>
    <th>#</th>
    <th>Fecha</th>
    <th>Distrito</th>
    <th>Corregimiento</th>
    <th>Casas supervisadas</th>
    <th>Positivos en casa(aislamiento)</th>
    <th>Contactos en casa(cuarentena)</th>
    <th>Casos Nuevos</th>
    <th>Seguimiento</th>
    <th>Cantidad de medicamentos</th>
    <th>Bolsas de comida</th>
    <th>Beneficiados por Medicamento</th>
    <th>Observación</th>
    </tr>
 ';

    while ($row = mysqli_fetch_array($result)) {
        $output .= '
   <tr>
   <td>'.$row["id"].'</td>
   <td>'.$row["fecha"].'</td>
   <td>'.$row["distrito"].'</td>
   <td>'.$row["correg"].'</td>
   <td>'.$row["casas_sup"].'</td>
   <td>'.$row["positivo_casa"].'</td>
   <td>'.$row["contactos_casa"].'</td>
   <td>'.$row["casos_nuevos"].'</td>
   <td>'.$row["seguimiento"].'</td>
   <td>'.$row["cant_medica"].'</td>
   <td>'.$row["bolsa_comida"].'</td>
   <td>'.$row["benef_medica"].'</td>
   <td>'.$row["observacion"].'</td>
   </tr>
  ';
    }
    echo $output;
} else {
    echo 'Sin registros';
}
