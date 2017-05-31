<?php include("../include/head_unsession.php");
require ("conexion.php");

?>
<br><br><br>
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
            <form class="" action="editar-done.php" method="post">
              <label for="">Name:</label><?php echo ' ' ?><?php echo $row['name']; ?><br>
              <input type="text" name="name"  placeholder="confirmar nombre" required><br><br>
              <label for="">Pass:</label><?php echo ' ' ?><?php echo $row['pass']; ?><br>
              <input type="text" name="pass"  placeholder="nuevo password" required><br><br>

              <label for="">Email:</label><?php echo ' ' ?><?php echo $row['email']; ?><br>
              <input type="" name="email" class="" value=" <?php echo $row['email']; ?> "><br><br>
              <label for="">Definir Rol:</label><br>


              <select class="selectpicker" id="selectpicker" name="selectpicker">
                  <option value="1" >Alumno </option>
                  <option value="2" >Docente</option>
                  <option value="3" >Admin</option>
                </select>
                <input type="text" name="id" class="hidden" value=" <?php echo $id ?> ">


                <br><br><br>

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
