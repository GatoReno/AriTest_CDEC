<?php
require ("serv/conexion.php");

session_start();

if(!$_SESSION ){
  header("location:login.php");
}

?>

<?php
include("include/head.php");
 ?>

 <br><br><br>

 <div class="container">
   <div class="row">
     <div class="col-sm-12" align="center">
       <label for=""><?php echo $_SESSION['nombre']; ?></label><br>
       <font size="8"> <span class="icon-user-tie"></span></font>

     </div>
   </div>
   <div class="row">
     <div class="col-sm-12" align="center">


      <form class="" action="serv/edit_user.php" method="post">
        <input type="text" class="hidden" name="id" value=" <?php echo $_SESSION['id_user']; ?>">
        <input type="submit" name="" value="Info" class="btn btn-default btn-md">
      </form>
      <br>
      <form class="" action="cita.php" method="post">
        <input type="text" class="hidden" name="id" value=" <?php echo $_SESSION['id_user']; ?>">
        <input type="submit" name="" value="Citas" class="btn btn-default btn-md">
      </form>
     </div>
   </div>
 </div>

 <?php include("include/footer.php"); ?>
