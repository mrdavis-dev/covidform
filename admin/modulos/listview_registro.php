<div style="margin-top:50px;">
  <form class="" method="post">
    <div class="form-group col-mb-4">
    <label>Para borrar un registro introdusca el id del registro:</label>
    <div class="form-group">
      <div class="input-group">
      <input type="text" name="id" id="id" placeholder="id" class="form-control col-md-1" />
      </div>
    </div>
  <button type="submit" name="delete" class="btn btn-primary mb-2">borrar registro</button>
</div>
  </form>
        <h3 class="mb-2">Registros</h3>
        <div class="form-group">
          <div class="input-group">
          <input type="text" name="search_text" id="search_text" placeholder="Buscar" class="form-control col-md-6 col-sm-10" />
          </div>
        </div>
        <div id="result" style="overflow-y: scroll; height: 25rem; display: block;"></div>
</div>
<!-- script autosearch -->
<script src="./js/pacientes.js"></script>
<?php
require_once "../config/conexion.php";
//function delete
        if (isset($_POST['delete'])) {
          $iddel = $_POST['id'];

         $sqldel = "DELETE FROM paciente WHERE id='$iddel'";
         if(mysqli_query($link, $sqldel)){
             echo "Records were updated successfully.";
             echo "<meta http-equiv=\"refresh\>";
         } else {
             echo "ERROR: Could not able to execute $sqlup. " . mysqli_error($link);
         }
         // Close connection
         mysqli_close($link);
        }
?>
