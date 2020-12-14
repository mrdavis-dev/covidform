<div style="margin-top:100px;" class="">
  <form class="" method="post">
    <div class="form-group col-mb-4">
    <label>Para borrar un informe introdusca el id del informe:</label>
    <div class="form-group">
      <div class="input-group">
      <input type="text" name="id" id="id" placeholder="id" class="form-control col-md-1" />
      </div>
    </div>
  <button type="submit" name="delete1" class="btn btn-primary mb-2">borrar informe</button>
</div>
  </form>
        <h3 class="mb-2">Informes diarios</h3>
        <div class="form-group">
          <div class="input-group">
          <input type="text" name="search_text1" id="search_text1" placeholder="Buscar" class="form-control col-md-5 col-sm-10" />
          </div>
        </div>
        <div id="result1" style="overflow-y: scroll; height: 25rem; display: block;"></div>
</div>
<!-- script autosearch -->
<script src="./js/informes.js"></script>
<?php
require_once "../config/conexion.php";
//function delete
        if (isset($_POST['delete1'])) {
          $iddel1 = $_POST['id'];

         $sqldel1 = "DELETE FROM informes WHERE id='$iddel1'";
         if(mysqli_query($link, $sqldel1)){
             echo "Records were updated successfully.";
             echo "<meta http-equiv=\"refresh\>";
         } else {
             echo "ERROR. " . mysqli_error($link);
         }
         // Close connection
         mysqli_close($link);
        }
?>
