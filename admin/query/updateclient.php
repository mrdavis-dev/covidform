<?php
// Initialize the session
session_start();
// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: ../../index.php");
    exit;
}
include '../../config/conexion.php';
$id = $_GET["id"];
?>
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

    <!-- adsense y google -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-VT6YBNX2GD"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-VT6YBNX2GD');
    </script>
    
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4118735753673684" crossorigin="anonymous"></script>

    <title>Actualizar Paciente</title>
</head>

<body style="font-family: 'Mukta', sans-serif;">
    <?php include '../modulos/navbar.php'; ?>
    <?php
    $sql = "SELECT * FROM paciente where id = $id";
    $result = $link->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '
            <div class="container mt-5">
            <h3>Actualizar datos del paciente</h3>
            <div class="mt-4">
    
                <form action="update.php" method="post">
                <input style="display:none" type="text"  name="id" value="' . $row["id"] . '">
                    <div class="mb-3">
                        <label for="">Cédula</label>
                        <input class="form-control form-control-lg" type="text" placeholder="Cedula:" name="cedula" value="' . $row["cedula"] . '">
                    </div>
    
                    <div class="mb-3">
                        <label for="">Nombre completo</label>
                        <input class="form-control form-control-lg" type="text" placeholder="Nombre Completo:" name="names" value="' . $row["names"] . '">
                    </div>
    
                    <div class="mb-3">
                        <label for="">Teléfono</label>
                        <input class="form-control form-control-lg" type="text" placeholder="Telefono:" name="telefono" value="' . $row["telefono"] . '">
                    </div>
    
                    <div class="mb-3">
                        <label for="">Edad</label>
                        <input class="form-control form-control-lg" type="text" placeholder="Edad:" name="edad" value="' . $row["edad"] . '">
                    </div>
    
                    <div class="mb-3">
                        <Label>Tiene alguna alergia o enfermedad:</Label>
                        <input class="form-control form-control-lg" type="text" placeholder="Describa la alergia o enfermedad" name="enfe_o_alergia" value="' . $row["enfe_o_alergia"] . '">
                    </div>
    
                    <div class="mb-3">
                        <label for="">Fecha de hisopado:</label>
                        <input class="form-control form-control-lg" type="date" placeholder="" name="fecha_hi" value="' . $row["fecha_hi"] . '">
                    </div>
    
                    <div class="mb-3">
                        <label for="">Lugar de hisopado</label>
                        <input class="form-control form-control-lg" type="text" placeholder="Lugar de hisopado:" name="lugar_hisopado" value="' . $row["lugar_hisopado"] . '">
                    </div>
    
                    <div class="mb-3">
                        <label for="">Dirección</label>
                        <input class="form-control form-control-lg" type="text" placeholder="Direccion:" name="direccion" value="' . $row["direccion"] . '">
                    </div>
    
                    <div class="mb-3">
                        <label for="">Sintomas</label>
                        <input class="form-control form-control-lg" type="text" placeholder="Sintomas:" name="sintomas" value="' . $row["sintomas"] . '">
                    </div>
    
                    <div class="mb-3">
                        <label for="">Contactos en casa</label>
                        <input class="form-control form-control-lg" type="number" placeholder="Contactos en casa:" name="contactos_en_casa" value="' . $row["contactos_en_casa"] . '">
                    </div>
    
                    <div class="mb-4">
                        <label for="">Positivos en casa</label>
                        <input class="form-control form-control-lg" type="number" placeholder="Positivos en casa:" name="positivos_en_casa" value="' . $row["positivos_en_casa"] . '">
                    </div>

                    <div class="mb-4">
                        <label for="" class="form-label">Nota:</label>
                        <textarea class="form-control" name="nota" rows="3">' . $row["nota"] . '</textarea>
                    </div>
    
                    <div class="col-6 mx-auto mt-4 mb-5">
                        <button type="submit" name="save" class="btn btn-success btn-lg btn-block">Actualizar datos</button>
                    </div>
                </form>
            </div>
        </div>
            ';
        }
    } else {
    }
    ?>
</body>

</html>