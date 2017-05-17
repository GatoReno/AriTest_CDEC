<?php include("../include/head.php");
require ("conexion.php");

$id = $_POST['id'];

$nombre = $_POST['name'];
 $pass = $_POST['pass'];


 ?>

 <div class="container">
   <div class="row">
     <div class="col-sm-12" align="center">



 <?php
 $sql = "UPDATE users SET name = '$nombre' , pass = '$pass' where id ='$id' ";
 $resultado =  mysql_query($sql);


   if (mysqli_query($con, $sql)) {
       echo "<h3>Cambios Realizadors exitoso</h3>";

       echo "<a href='../user_index.php'>Regresar A Panel Admin</a>";
   } else {
       echo "Error: " . $sql . "<br>" . mysqli_error($con);
   }

   mysqli_close($con);


?>

</div>
</div>
</div>
