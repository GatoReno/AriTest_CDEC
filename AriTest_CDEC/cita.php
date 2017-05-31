<?php
require ("serv/conexion.php");

session_start();

if(!$_SESSION ){
  header("location:login.php");
}
  $id = $_POST['id'];
?>

<?php
include("include/head.php");
 ?>

<br><br><br>



<div class="container">

  <div style="overflow:hidden;">
      <div class="form-group">


            <div class="row" align="center">
                <div class="col-xs-12" align="center">
                    <div id="datetimepicker12"></div>
                </div>
            </div>

          </div>
      </div>
  </div>
  <div class="row">
    <div class="col-sm-12" align="center">

      <h4>Docencia disponible</h4>
        <form class="" action="serv/hacer-cita.php" method="post">


        <select class="selectpicker" name="doce" id="selectpicker">
          <?php

          $sql = "SELECT * FROM users WHERE rol = 2";

          $resultado=$con->query($sql) or trigger_error($mysqli->error);

          //$row = mysqli_query($con, $sql);

          $cont = 1;
          while ($row = $resultado->fetch_array(MYSQL_ASSOC)) {
            # code...


           ?>
           <option value="<?php echo $row['id'];?>">
             <?php echo $row['name']; ?>
           </option>

          <?php
          $cont++;
        }
           ?>
          </select>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12" align="center">
      <p>
          <label for="">Fecha</label><?php echo "<br> "; ?>
        <input class="btn btn-default" name="date"  type="text" id="datepicker" value="tap here">
        <input type="text" class="hidden" name="id" value="<?php echo $id; ?>">
      </p>

      </p>
      <input type="submit"  class="btn" name="" value="Confirmar" onclick="getDate()">
    </div>
  </div>
    </form>
</div>



 <script type="text/javascript">
     $(function () {
         $('#datetimepicker12').datetimepicker({
             inline: true,
             sideBySide: true
         });
     });

 </script>
 <?php
 include("include/footer.php");
  ?>
