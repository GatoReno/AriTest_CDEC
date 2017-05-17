<?php include("include/head_unsession.php"); ?>

<div class="container">

<form class="" action="serv/guardar.php" method="post">

  <div class="row">
    <div class="col-sm-12">
      <br>
      <img src="img/logo.png" class="img-responsive" alt="">
    </div>
    <div class="col-sm-12">
      <br>
      <form>
        <div class="form-group" >
          <h4>Elige tu tipo de registro</h4>
            <select class="selectpicker" id="selectpicker" name="selectpicker">
                <option value="1" >Alumno </option>
                <option value="2" >Docente</option>
                <option value="3" >Admin</option>
              </select>

        </div>
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="name" class="form-control" name="name" id="name" required>
        </div>
               <div class="form-group">
                 <label for="email">Email Address:</label>
                 <input type="email" class="form-control" name="email" id="email" required>
               </div>
               <div class="form-group">
                 <label for="pwd">Password:</label>
                 <input type="password" class="form-control" name="pass" id="pass" required>
               </div>
               <div class="form-group">
                 <label for="pwd">Reapear Password:</label>
                 <input type="password" class="form-control" name="pass_2" id="pass_2" required>
               </div>
               <div class="checkbox">
                 <label><input type="checkbox"> Remember me</label>
               </div>
               <button type="button" name="button"  onclick="getdata()">GetData</button>
               <button type="submit" class="btn btn-default">Submit</button>
      </form>
    </div>
  </div>



  </form>
</div>

<script type="text/javascript">
function getdata(){

  var hora = document.getElementById("name").value;
  var fecha = document.getElementById("email").value;
  var docente = document.getElementById("selectpicker").value;
  alert(fecha+hora+docente);

}
</script>

<?php include("include/footer.php"); ?>
