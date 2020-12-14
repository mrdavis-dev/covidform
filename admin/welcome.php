<?php
// Initialize the session
session_start();
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>MENÚ</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<!-- navbar -->
<?php include("modulos/navbar.php") ?>
<h5>Version BETA 1.1</h5>
<div class="container col-sm-10">

    <div class="">
      <?php include("modulos/listview_registro.php") ?>
      <?php include("modulos/listview_informe.php") ?>
    </div>

</div>
<?php include("modulos/footer.php") ?>
</body>
</html>




<!-- <div class="page-header"> -->
    <!-- <h5>Hola, <b><?php echo htmlszpecialchars($_SESSION["username"]); ?></b>.</h5> -->
<!-- </div> -->
