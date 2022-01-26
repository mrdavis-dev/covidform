<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@300&display=swap" rel="stylesheet">

    <title>Actualizando...</title>
</head>

<body style="font-family: 'Mukta', sans-serif;">
    <?php
    include '../../config/conexion.php';

    $id = $_POST["id"];
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

    $query = "UPDATE paciente SET cedula = '$cedula', names = '$names', telefono = '$telefono', edad = '$edad', 
enfe_o_alergia = '$enfe_o_alergia', fecha_hi = '$fecha_hi', lugar_hisopado = '$lugar_hisopado', direccion = '$direccion',
sintomas = '$sintomas', contactos_en_casa = '$contactos_en_casa', positivos_en_casa = '$positivos_en_casa'  WHERE id = '$id'";

    if (mysqli_query($link, $query)) {
        echo '
        <div class="container text-center">
        <img src="https://icon-library.com/images/spin-icon/spin-icon-2.jpg" style="width: ;">
        <h3>Actualizando datos...</h3>
        <script>
        setTimeout(function(){
            window.location.href="../welcome.php?guardado";
        }, 1000);
        </script>
        </div>
        ';
    } else {
        echo "Error updating record: " . mysqli_error($link);
    }
    ?>
</body>

</html>