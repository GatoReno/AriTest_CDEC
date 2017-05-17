

<?php

  $email = $_POST['email'];
  $pass = $_POST['pass'];

  require ("conexion.php");


  if (isset($email)) {
    # code...
    //iniciar variables de sesión
      session_start();

      //query

      $sql = "SELECT * FROM users WHERE email = '$email' AND pass = '$pass' AND rol = '1' AND status = '1' "  ;
      $resultado=$con->query($sql) or trigger_error($mysqli->error);
      $fila  = $resultado->fetch_array(MYSQL_ASSOC);

      if(!$fila['id']){
       ?>
    <?php include("../include/head_unsession.php"); ?>
    <br><br><br>


    <div class="container">
      <div class="row">
        <div class="col-sm-12" align="center">


       <?php

        echo "<h3>no existe o no ha sido habilitado dicho usuario aún</h3>";

      }else{
        $_SESSION['id_user'] = $fila['id'];
          $_SESSION['nombre'] = $fila['name'];


          header("location: ../user_index.php");
      }
  }else{


    header("location:../login.php");
  }

 ?>


</div>
</div>
</div>
<br><br>
 <?php include("../include/footer.php"); ?>
