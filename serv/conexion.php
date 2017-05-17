<?php


  $server ='localhost';
  $username= 'root';
  $password = '';
  $db = 'cdec';
  $con = mysqli_connect($server,$username,$password)or die("no se pudo conectar u.u");
  $con_db = mysqli_select_db($con,$db)or die("no se puede conectar a la base de datos");

  

 ?>
