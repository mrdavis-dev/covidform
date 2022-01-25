<?php
// Initialize the session
session_start();
// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: ../index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title>MENÚ</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/8632e9fdd4.js" crossorigin="anonymous"></script>
    <!-- adsense y google -->
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4118735753673684" crossorigin="anonymous"></script>
</head>

<body>

    <!-- navbar -->
    <?php include("modulos/navbar.php") ?>

    <div class="container col-sm-10">

        <div class="">
            <div style="margin-top:50px;">
                <h3 class="mb-2">Registrados</h3>
                <form class="" method="post">
                    <div class="form-group col-mb-4">
                        <!-- <label>Para borrar un registro introdusca el id del registro:</label> -->
                        <div class="form-group">
                            <div class="input-group">
                                <button type="submit" name="delete" class="btn btn-primary mb-2"><i class="fas fa-trash-alt"></i> Borrar</button>
                                <input type="text" name="id" id="id" placeholder="id" class="form-control col-md-1" />
                            </div>
                        </div>
                    </div>
                </form>
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" name="search_text" id="search_text" placeholder="Buscar" class="form-control col-md-6 col-sm-10" />
                    </div>
                </div>
                <div id="result" style="overflow-y: scroll; height: 25rem; display: block;"></div>
            </div>
            <!-- script autosearch -->

            <script>
                $(document).ready(function() {

                    load_data();

                    function load_data(query) {
                        $.ajax({
                            url: "busqueda_paciente.php",
                            method: "POST",
                            data: {
                                query: query
                            },
                            success: function(data) {
                                $('#result').html(data);
                            }
                        });
                    }
                    $('#search_text').keyup(function() {
                        var search = $(this).val();
                        if (search != '') {
                            load_data(search);
                        } else {
                            load_data();
                        }
                    });
                });
            </script>


            <?php
            require_once "../config/conexion.php";
            //function delete
            if (isset($_POST['delete'])) {
                $iddel = $_POST['id'];

                $sqldel = "DELETE FROM paciente WHERE id='$iddel'";
                if (mysqli_query($link, $sqldel)) {
                    echo "Records were updated successfully.";
                    echo "<meta http-equiv=\"refresh\>";
                } else {
                    echo "ERROR: Could not able to execute $sqlup. " . mysqli_error($link);
                }
                // Close connection
                mysqli_close($link);
            }
            ?>
        </div>

    </div>
    <?php include("modulos/footer.php") ?>
</body>

</html>




<!-- <div class="page-header"> -->
<!-- <h5>Hola, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>.</h5> -->
<!-- </div> -->