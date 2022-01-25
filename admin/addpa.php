<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/8632e9fdd4.js" crossorigin="anonymous"></script>
    <title>Agregar paciente</title>
</head>

<body>
    <?php include 'modulos/navbar.php'; ?>
    <div class='container mt-5'>
        <h3>Registrar paciente</h3>
        <div class="mt-4">

            <form action="query/insert_paciente.php" method="post">

                <div class="mb-3">
                    <label for=""></label>
                    <input class="form-control form-control-lg" type="text" placeholder="Cedula:" name="cedula">
                </div>

                <div class="mb-3">
                    <label for=""></label>
                    <input class="form-control form-control-lg" type="text" placeholder="Nombre Completo:" name="names">
                </div>

                <div class="mb-3">
                    <label for=""></label>
                    <input class="form-control form-control-lg" type="text" placeholder="Telefono:" name="telefono">
                </div>

                <div class="mb-3">
                    <label for=""></label>
                    <input class="form-control form-control-lg" type="text" placeholder="Edad:" name="edad">
                </div>

                <div class="mb-3">
                    <Label>Tiene alguna alergia o enfermedad:</Label>
                    <label class="mt-4" for="chk-Yes">
                        <input type="radio" id="chk-Yes" name="show-div" /> Si
                    </label>
                    <label for="chk-No">
                        <input type="radio" id="chk-No" name="show-div" /> No
                    </label>
                    <input class="form-control form-control-lg" type="text" style="display: none;" placeholder="Describa la alergia o enfermedad" id="showDiv" name="enfe_o_alergia">
                </div>

                <div class="mb-3">
                    <label for="">Fecha de hisopado:</label>
                    <input class="form-control form-control-lg" type="date" placeholder="" name="fecha_hi">
                </div>

                <div class="mb-3">
                    <label for=""></label>
                    <input class="form-control form-control-lg" type="text" placeholder="Lugar de hisopado:" name="lugar_hisopado">
                </div>

                <div class="mb-3">
                    <label for=""></label>
                    <input class="form-control form-control-lg" type="text" placeholder="Direccion:" name="direccion">
                </div>

                <div class="mb-3">
                    <label for=""></label>
                    <input class="form-control form-control-lg" type="text" placeholder="Sintomas:" name="sintomas">
                </div>

                <div class="mb-3">
                    <label for=""></label>
                    <input class="form-control form-control-lg" type="number" placeholder="Contactos en casa:" name="contactos_en_casa">
                </div>

                <div class="mb-4">
                    <label for=""></label>
                    <input class="form-control form-control-lg" type="number" placeholder="Positivos en casa:" name="positivos_en_casa">
                </div>

                <div class="col-6 mx-auto mt-4 mb-5">
                    <button type="submit" name="save" class="btn btn-success btn-lg btn-block">Agregar paciente</button>
                </div>
            </form>
        </div>
    </div>
</body>

<script type="text/javascript">
    $(function() {
        $("input[name='show-div']").click(function() {
            if ($("#chk-Yes").is(":checked")) {
                $("#showDiv").show();
            } else {
                $("#showDiv").hide();
            }
        });
    });
</script>

</html>