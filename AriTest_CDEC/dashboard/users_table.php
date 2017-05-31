<?php
include("include/head.php");
require ("../serv/conexion.php");
 ?>
 <div class="container">
   <div class="row">
     <div class="col-sm-12">
       <h3>Edición de usuarios</h3>
     </div>
 <div class="row">
     <div class="col-sm-12">
       <table class="table  table-striped">


         <thead>
           <tr>
             <th>ID</th>
               <th>NOMRE</th>
                 <th>MAIL</th>
                   <th>EDITAR</th>
                     <th>ELIMINAR</th>
           </tr>
         </thead>
           <?php

           $sql = "SELECT * FROM users WHERE status = 1";

           $resultado=$con->query($sql) or trigger_error($mysqli->error);

           //$row = mysqli_query($con, $sql);

           $cont = 1;
           while ($row = $resultado->fetch_array(MYSQL_ASSOC)) {
             # code...


            ?>

           <tbody>
          
               <tr>
                 <td class="" id="id_<?php echo $i; ?>"><?php echo $row['id']; ?></td>
                 <td id="name_<?php echo $i; ?>"><?php echo $row['name']; ?></td>
                 <td id="email_<?php echo $i; ?>"> <?php echo $row['email']; ?></td>

                 <td>
                   <a  class="btn btn-sm btn-default" data-toggle="modal" href="#myModalEdit<?php echo $cont ?>">
                     <font size=""> <span class=" icon-cog"></span></font>
                     </a>
                 </td>
                 <td >
                   <a class="btn btn-sm btn-default" class="btn btn-default" data-toggle="modal" href="#myModal<?php echo $cont ?>">
                     <font size=""> <span class=" icon-cancel-circle"></span></font>
                   </a>
                 </td>
               </tr>



           </tbody>

           <!-- Modal Eliminar-->
         <div class="modal fade" id="myModal<?php echo $cont ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

           <div class="modal-dialog" role="document">
             <div class="modal-content">
               <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Eliminar Usuario</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
                 </button>
               </div>
               <div class="modal-body">
     <form class="" action="../serv/eliminar.php" method="post">
                   <!--Error here D: ¿?-->
                   <label for="">Nombre:</label><?php echo " ".$row['name']; ?><br>
                   <label for="">Email:</label><?php echo " ".$row['email']; ?><br>
                   <label for="">Rol : </label><?php echo " ".$row['rol']; ?><br>
                   <input type="text" class="hidden" name="id" value="<?php echo " ".$row['id']; ?>">

                   <p>CONTINUAR CON PRECAUCION</p>
                   <p>Usted ha solicitado eliminar a este usuario</p>

               </div>
               <div class="modal-footer">

                 <button type="submit" class="btn btn-danger">Eliminar</button>
         </form>
               </div>
             </div>
           </div>
         </div>

              <!-- Modal Editar -->

              <div class="modal fade" id="myModalEdit<?php echo $cont ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Modificar Datos De Usuario</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
          <form class="" action="../serv/editar.php" method="post">
                        <!--Error here D: ¿?-->
                        <label for="">Nombre:</label><?php echo " ".$row['name']; ?><br>
                        <label for="">Email:</label><?php echo " ".$row['email']; ?><br>
                        <label for="">Rol : </label><?php echo " ".$row['rol']; ?><br>
                        <input type="text" class="hidden" name="id" value="<?php echo " ".$row['id']; ?>">

                        <p>CONTINUAR CON PRECAUCION</p>
                        <p>El usuario ha solicitdado algún cambio de <b>contraseña</b> o  <b>datos personales</b> ???</p>

                    </div>
                    <div class="modal-footer">

                      <button type="submit" class="btn btn-danger">Proceder</button>
              </form>
                    </div>
                  </div>
                </div>
              </div>
           <?php
           $cont++;
         }
            ?>




       </table>

     </div>
   </div>
 </div>

   </div>

</script>
 <?php

 include("include/footer.php");

  ?>
