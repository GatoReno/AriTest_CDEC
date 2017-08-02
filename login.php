<?php
include("include/head_unsession.php");
/*test*/
 ?>
<br><br><br>

<div class="container">
  <div class="row">
    <div class="col-sm-12" align="right">
      <a href="admin.php" class="btn btn-default btn-md " >
        Admin access
      </a>
    </div>
    <div class="col-sm-12">
      <form class="" action="serv/acces_log.php" method="post">

           <div class="form-group">
             <label for="email">Email address:</label>
             <input type="email" class="form-control" name="email">
           </div>
           <div class="form-group">
             <label for="pwd">Password:</label>
             <input type="password" class="form-control" name="pass">
           </div>
           <div class="checkbox">
             <label><input type="checkbox"> Remember me</label>
           </div>
           <button type="submit" class="btn btn-default">Submit</button>
          </form>
    </div>

  </div>
</div>


 <?php
 include("include/footer.php");
  ?>
