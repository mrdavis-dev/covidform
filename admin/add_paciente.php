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
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Agregar paciente</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </head>
  <body>
    <?php include("modulos/navbar.php") ?><br>

    <div class="container-fluid">
      <div class="row">
    <div class="col">
      <h2>Ingresa los datos solicitados</h2>
      <small id="emailHelp" class="form-text text-muted">tenga en cuenta que la información a rellenar debe ser precisa.</small><br>
      <form action="query/insert_paciente.php" method="post">
    <div class="form-group">
      <!-- <label for="exampleInputEmail1">Nombre</label> -->
      <input type="text" class="form-control"name="name" placeholder="Nombre del paciente:">
    </div>
    <div class="form-group">
      <!-- <label for="exampleInputEmail1">Nombre</label> -->
      <input type="text" class="form-control" name="cedula"  placeholder="Cedula:">
    </div>
    <div class="form-group">
      <!-- <label for="exampleInputEmail1">Nombre</label> -->
      <input type="number" class="form-control"  name="edad" placeholder="Edad:">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Fecha de nacimineto</label>
      <input type="date" class="form-control"  name="fecha_nac" placeholder="Fecha de nacimiento:">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Fecha de hisopado</label>
      <input type="date" class="form-control"  name="fecha_hi" placeholder="Fecha de hisopado:">
    </div>
    <div class="form-group">
      <!-- <label for="exampleInputEmail1">Nombre</label> -->
      <input type="text" class="form-control"  name="lugar_hisopado" placeholder="Lugar de hisopado:">
    </div>
    <div class="form-group">
      <!-- <label for="exampleInputEmail1">Nombre</label> -->
      <textarea class="form-control" name="direccion" placeholder="Dirección" rows="3" cols="80"></textarea>
    </div>
    <div class="form-group">
      <!-- <label for="exampleInputEmail1">Nombre</label> -->
      <input type="number" class="form-control"  name="contactos" placeholder="contactos:">
    </div>
    <div class="form-group">
      <!-- <label for="exampleInputEmail1">Nombre</label> -->
      <input type="number" class="form-control"  placeholder="Cantidad de positivos en hogar:" name="positivo">
    </div>
    <div class="form-group">
      <!-- <label for="exampleInputEmail1">Nombre</label> -->
      <textarea class="form-control"  placeholder="Otros pacientes:" name="otros_paci" rows="10" cols="80"></textarea>
    </div>
    <div class="form-group">
      <!-- <label for="exampleInputEmail1">Nombre</label> -->
      <input type="number" class="form-control"  name="bolsa_comida" placeholder="bolsas de comida:">
    </div>
    <div class="form-group">
      <!-- <label for="exampleInputEmail1">Nombre</label> -->
      <textarea class="form-control"  placeholder="Medicamentos:" name="medicamento" rows="10" cols="80"></textarea>
    </div>
    <div class="form-group">
      <!-- <label for="exampleInputEmail1">Nombre</label> -->
      <textarea class="form-control"  placeholder="Observación:" name="observa" rows="10" cols="80"></textarea>
    </div>
    <input type="submit" name="save" class="btn btn-primary" value="Submit">

    </form>
    </div>
    <div class="col">
      <?php include("modulos/listview_registro.php") ?>
      <!-- script autosearch -->
      <script src="js/pacientes.js"></script>
    </div>
    </div>
    </div>

<?php include("modulos/footer.php") ?>
  </body>
</html>
