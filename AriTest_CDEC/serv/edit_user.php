<?php
require ("conexion.php");
session_start();

if(!$_SESSION ){
  header("location:login.php");
}

?>
<?php include("../include/head.php");


?>
<br><br>
<div class="container">
  <div class="row">
    <div class="col-sm-12" align="center">

        <?php
        $id = $_POST['id'];

         $sql = "SELECT * FROM users WHERE id = $id";
         $resultado=$con->query($sql) or trigger_error($mysqli->error);

         //$row = mysqli_query($con, $sql);


         while ($row = $resultado->fetch_array(MYSQL_ASSOC))  {
           # code...
         ?>
            <form class="" action="editaruser-done.php" method="post">
              <h3>Edición de info <span class="icon-user-tie"></span></h3>

              <br>
              <label for="">Name:</label><?php echo ' ' ?><?php echo $row['name']; ?><br>
              <input type="text" name="name"  placeholder="confirmar nombre" required><br><br>
              <label for="">Pass:</label><?php echo ' ' ?><?php echo $row['pass']; ?><br>
              <input type="text" name="pass"  placeholder="nuevo password" required><br><br>




                <input type="text" name="id" class="hidden" value=" <?php echo $id ?> ">




                <input type="submit" name="" value="Generar Cambios" class="btn btn-success">
            </form>
         <?php
            }
         ?>
    </div>
  </div>
</div>



<?php include("../include/footer.php");
?>
