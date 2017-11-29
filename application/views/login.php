<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Pagina Inicio</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>public/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/css/bootstrap-theme.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
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


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>public/js/bootstrap.min.js"></script>
  </body>
</html>
