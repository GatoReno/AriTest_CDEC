<?php include("../include/head.php");
require ("conexion.php");

$id = $_POST['id'];
$email = $_POST['email'];
$nombre = $_POST['name'];
 $pass = $_POST['pass'];
 $selectpi = $_POST['selectpicker'];

 ?>

 <div class="container">
   <div class="row">
     <div class="col-sm-12" align="center">



 <?php
 $sql = "UPDATE users SET name = '$nombre' , email = '$email' , pass = '$pass', rol = '$selectpi' where id ='$id' ";
 $resultado =  mysql_query($sql);


   if (mysqli_query($con, $sql)) {
       echo "<h3>Cambios Realizadors exitoso</h3>";
       echo "<p>Se ha registra al usuario <b>".$nombre."</b> con el mail <b>".$email."</b> </p>";
       echo "<a href='../dashboard/index.php'>Regresar A Panel Admin</a>";
   } else {
       echo "Error: " . $sql . "<br>" . mysqli_error($con);
   }

   mysqli_close($con);


?>

</div>
</div>
</div>
