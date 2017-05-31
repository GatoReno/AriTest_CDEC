
<?php include("../include/head.php") ?>
<br><br><br>
<div class="container">
  <div class="row">
    <div class="col-sm-12" align="center">
<?php

require ("conexion.php");

$id_alumno = $_POST['id'];
$id_doce = $_POST['doce'];
$date = $_POST['date'];
$status = 0;


//cambiar users por aspirantes?
  $sql = "INSERT INTO citas (id_docente,id_alumno,cita_date,status)
  VALUES ('$id_alumno','$id_doce','$date','$status')";


$resultado =  mysql_query($sql);

 ?>

<div class="container">
  <div class="row">
    <div class="col-sm-12" aling="center">
      <?php

     if (mysqli_query($con, $sql)) {
         echo "<h3>Cita Agendada exitosamente exitoso</h3>";
         echo "<h4>Se notificará al docente que solicitas.</h4>";
         echo " <h5>Y a ti sé te notificará sobre tu solicitud</h5>  ";
         echo "<h5>Gracias por usar CDEC</h5>";
          echo "<h5>:D</h5>";
         echo "<a href='../user_index.php'>Regresar</a>";
     } else {
         echo "Error: " . $sql . "<br>" . mysqli_error($con);
     }

     mysqli_close($con);
      ?>
    </div>
  </div>
</div>






   <?php include("../include/footer.php") ?>
