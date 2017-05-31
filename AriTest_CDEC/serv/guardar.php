
<?php include("../include/head.php") ?>
<br><br><br>
<div class="container">
  <div class="row">
    <div class="col-sm-12" align="center">


<?php

  require ("conexion.php");
  $nombre = $_POST['name'];
  $email = $_POST['email'];
  $pass = $_POST['pass'];
  $selectpi = $_POST['selectpicker'];
  $status = 0;

  //cambiar users por aspirantes?
  $sql = "INSERT INTO users (name,email,pass,rol,status) VALUES
          ('$nombre','$email','$pass','$selectpi','$status')";


  $resultado =  mysql_query($sql);



  if (mysqli_query($con, $sql)) {
      echo "<h3>Registro exitoso</h3>";
      echo "<h4>Su administrador se pondra en contacto con usted tras habilitar su usuario.</h4>";
      echo " <h5>tomara lapso de unos días</h5>  ";
      echo "<p>Se ha registra al usuario <b>".$nombre."</b> con el mail <b>".$email."</b> </p>";
      echo "<a href='../Log_principal.php'>log in</a>";
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($con);
  }

  mysqli_close($con);
  ?>

</div>
</div>
</div>

  <?php include("../include/footer.php") ?>
