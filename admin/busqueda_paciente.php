<?php
error_reporting(0);
//fetch.php
include '../config/conexion.php';

$output = '';
if (isset($_POST["query"])) {
    $search = mysqli_real_escape_string($link, $_POST["query"]);
    $query = "SELECT * FROM paciente WHERE cedula LIKE '%" . $search . "%'
    OR names LIKE '%" . $search . "%'
    OR fecha_registro LIKE '%" . $search . "%'";

} else {
    $query = "SELECT * FROM paciente ORDER BY fecha_registro DESC";
}
$result = mysqli_query($link, $query);
if (mysqli_num_rows($result) > 0) {
    $output .= '
    <div class="table-responsive text-center">
        <table class="table table-hover">
            <tr>
            <th>Id</th>
            <th>Fecha de registro</th>
            <th>Cedula</th>
            <th>Paciente</th>
            <th>Telefono</th>
            <th>Edad</th>
            <th>A./E</th>
            <th>Fecha de hisopado</th>
            <th>Lugar de hisopado</th>
            <th>Dirección</th>
            <th>Sintomas</th>
            <th>Contactos en casa</th>  
            <th>Positivos en casa</th>
            <th>Opciones</th>
            </tr>
    ';

    while ($row = mysqli_fetch_array($result)) {
            $output .= '
    <tr>
    <td>' . $row["id"] . '</td>
    <td>' . $row["fecha_registro"] . '</td>
    <td>' . $row["cedula"] . '</td>
    <td>' . $row["names"] . '</td>
    <td>' . $row["telefono"] . '</td>
    <td>' . $row["edad"] . '</td>
    <td>' . $row["enfe_o_alergia"] . '</td>
    <td>' . $row["fecha_hi"] . '</td>
    <td>' . $row["lugar_hisopado"] . '</td>
    <td>' . $row["direccion"] . '</td>
    <td>' . $row["sintomas"] . '</td>
    <td>' . $row["contactos_en_casa"] . '</td>
    <td>' . $row["positivos_en_casa"] . '</td>
    <td>
        <div class="">
            <form class="" method="post">
                <input type="text" name="id" style="display:none" value="' . $row["id"] . '"> 
                <button class="btn btn-danger btn-sm" name="delete" type="submit"><i class="fas fa-trash-alt"></i></button>
            </form>
                <a href="query/updateclient.php?id=' . $row["id"] . '"" class="btn btn-info btn-sm mt-1" name="update"><i class="fas fa-pencil-alt"></i></a>
        </div>
    </td>        
    </tr>
    ';
    }
    echo $output;
} else {
    echo 'Sin registros';
}
