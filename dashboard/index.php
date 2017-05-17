<?php

include("include/head.php");
require ("../serv/conexion.php");

$sql = "SELECT * FROM users WHERE status = 0";

$resultado=$con->query($sql) or trigger_error($mysqli->error)


 ?>

<div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h2>Panel Admin</h2>

            <p>Tabla de aspitantes:</p>



        </div>
                <div class="col-sm-12" >


                        <table class="table  table-striped ">
                          <thead>
                            <?php
                            //$row = mysqli_query($con, $sql);
                            $i = 0;
                            $cont = 1;
                            while ($row = $resultado->fetch_array(MYSQL_ASSOC)) {
                              # code...


                             ?>

                            <tr>
                              <td class="hidden" id="id_<?php echo $i; ?>"><?php echo $row['id']; ?></td>
                              <td id="name_<?php echo $i; ?>"><?php echo $row['name']; ?></td>
                              <td id="email_<?php echo $i; ?>"> <?php echo $row['email']; ?></td>
                              <td >
                                <a class="btn btn-sm btn-success" data-toggle="modal" href="#myModal<?php echo $cont ?>">
                                  Aceptar
                                </a>
                              </td>
                              <td >
                                <a class="btn btn-sm btn-danger" data-toggle="modal" href="#myModalDeny<?php echo $cont ?>">
                                  Declinar
                                </a>
                              </td>
                            </tr>
                            <!-- Modal -->
                          <div class="modal fade" id="myModal<?php echo $cont ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Habilitar Usuario</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                      <form class="" action="../serv/user_able.php" method="post">
                                    <!--Error here D: ¿?-->
                                    <label for="">Nombre:</label><?php echo " ".$row['name']; ?><br>
                                    <label for="">Email:</label><?php echo " ".$row['email']; ?><br>
                                    <label for="">Rol solicitado: </label><?php echo " ".$row['rol']; ?><br>
                                    <input type="text" name="id" class="hidden" value="<?php echo " ".$row['id']; ?>">


                                </div>
                                <div class="modal-footer">

                                  <button type="submit" class="btn btn-success">Aceptar</button>
                          </form>
                                </div>
                              </div>
                            </div>
                          </div>


                          <!-- Modal -->
                        <div class="modal fade" id="myModalDeny<?php echo $cont ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Rechazar</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                    <form class="" action="../serv/eliminar.php" method="post">
                                  <!--Error here D: ¿?-->
                                  <label for="">Nombre:</label><?php echo " ".$row['name']; ?><br>
                                  <label for="">Email:</label><?php echo " ".$row['email']; ?><br>
                                  <label for="">Rol solicitado: </label><?php echo " ".$row['rol']; ?><br>
                                  <input type="text" name="id" class="hidden" value="<?php echo " ".$row['id']; ?>">


                              </div>
                              <div class="modal-footer">
                                 <button type="submit" class="btn btn-danger">Rechazar</button>

                        </form>
                              </div>
                            </div>
                          </div>
                        </div>
                                <?php
                                $cont++;
                              }
                                 ?>


                          </thead>
                        </table>
                </div>
        </div>
</div>


<script type="text/javascript">

</script>



<script type="text/javascript">
$('#myModal').on('shown.bs.modal', function () {
$('#myInput').focus();
});
/*function loadModal($id){
  $('#p_name_').val($('#nombre_'+id).val());
</script>
 <?php

 include("include/footer.php");

  ?>
