<?php
session_start();

// Check if the user is logged in, if not then redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <title>CREAR INFORME</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"
    />
  </head>
  <body>

    <?php include("modulos/navbar.php") ?>
    <div class="container-fluid">
      <div class="row">
    <div class="col">

      <?php include("modulos/listview_registro.php") ?>
      <small>Complete su informe con los datos recolectados en el dia.</small>
      <!-- script autosearch -->
      <script src="js/pacientes.js"></script>
    </div>


    <div class="col">
      <br><br>
      <h2>Ingresa los datos solicitados</h2>
      <small style="color:#FF323C;" class="form-text text-muted">tenga en cuenta que la información a rellenar debe ser precisa y coherente con los datos del cuadro.</small><br>
      <form action="query/insert_informe.php" method="post">
    <div class="form-group">
      <!-- <label for="exampleInputEmail1">Nombre</label> -->
      <select class="form-control" name="distrito">
        <option value="distrito" selected>Distrito</option>
        <option value="David">David</option>
        <option value="Alanje">Alanje</option>
        <option value="Baru">Barú</option>
        <option value="Boqueron">Boquerón</option>
        <option value="Boquete">Boquete</option>
        <option value="Bugaba">Bugaba</option>
        <option value="Dolega">Dolega</option>
        <option value="Gualaca">Gualaca</option>
        <option value="Remedios">Remedios</option>
        <option value="Renacimiento">Renacimiento</option>
        <option value="San Felix">San Félix</option>
        <option value="San Lorenzo">San Lorenzo</option>
        <option value="Tierras Altas">Tierras Altas</option>
        <option value="Tole">Tolé</option>

    </select>
    </div>
    <div class="form-group">
      <!-- <label for="exampleInputEmail1">Nombre</label> -->
      <input type="text" class="form-control" name="corregimiento"  placeholder="corregimiento:">
    </div>
    <div class="form-group">
      <!-- <label for="exampleInputEmail1">Nombre</label> -->
      <input type="number" class="form-control"  name="casas_supervisadas" placeholder="Casas supervisadas:">
    </div>
    <div class="form-group">
      <!-- <label for="exampleInputEmail1">Nombre</label> -->
      <input type="number" class="form-control" name="positivos" placeholder="positivos en casa(aislamineto):">
    </div>
    <div class="form-group">
      <!-- <label for="exampleInputEmail1">Nombre</label> -->
      <input type="number" class="form-control"  name="contactos_en_casa" placeholder="contactos en casa(cuarentena):">
    </div>
    <div class="form-group">
      <!-- <label for="exampleInputEmail1">Nombre</label> -->
      <input type="number" class="form-control"  name="casos_nuevos" placeholder="Casos nuevos:">
    </div>
    <div class="form-group">
      <!-- <label for="exampleInputEmail1">Nombre</label> -->
      <input type="number" class="form-control"  name="seguimientos" placeholder="Seguimiento:">
    </div>
    <div class="form-group">
      <!-- <label for="exampleInputEmail1">Nombre</label> -->
      <input type="number" class="form-control"  name="bolsas_comida" placeholder="Bolsas de comida:">
    </div>
    <div class="form-group">
      <!-- <label for="exampleInputEmail1">Nombre</label> -->
      <input type="number" class="form-control"  name="cantidad_medicamentos" placeholder="Cantidad medicamentos:">
    </div>
    <div class="form-group">
      <!-- <label for="exampleInputEmail1">Nombre</label> -->
      <input type="number" class="form-control"  name="beneficiados_medicamento" placeholder="Beneficiados por medicamento:">
    </div>
    <div class="form-group">
      <!-- <label for="exampleInputEmail1">Nombre</label> -->
      <textarea class="form-control" name="observacion" placeholder="Observación" rows="8" cols="80"></textarea>
    </div>

    <input type="submit" name="save" class="btn btn-primary" value="Submit">

  </form>
    </div>
    </div>
    <?php include("modulos/footer.php") ?>
  </body>
</html>
