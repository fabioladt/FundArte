<div id="login">
    <h1 align="center">Login</h1>

     <div class="container" style="margin-top-100px;">
       <div class="col-md-4"></div>
       <div class="col-md-4">
         <div class="panel panel-default">
           <div class="panel-body">

             <?php if(isset($_SESSION['success'])) {?>
               <div class="alert alert-success"><?php echo $_SESSION['success'];?></div>
             <?php } ?>
             <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>

             <form action="" method="POST">
               <div class="form-group">
                 <label for="usuario" >Nombre de Usuario:</label>
                 <input class="form-control" name="usuario" id="usuario" type="text">
               </div>

               <div class="form-group">
                 <label for="contraseña" >Contraseña:</label>
                 <input class="form-control" name="contraseña" id="contraseña" type="password">
               </div>

               <div >
                 <button class="btn btn-primary" name="login">Ingresar</button>
               </div>
               <div class="text-center">
                   <a href="<?php echo base_url(); ?>index.php/auth/register">Registrarse</a>
               </div>
            </form>
           </div>
         </div>
       </div>
     </div>
</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>public/js/bootstrap.min.js"></script>
  </body>
</html>
