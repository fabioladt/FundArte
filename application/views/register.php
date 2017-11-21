<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Registrar Usuario</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>public/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#home">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#profile">Profile</a>
    </li>
    <li class="nav-item">
      <a class="nav-link disabled" href="<?php echo base_url(); ?>index.php/auth/logout">Cerrar Sesion</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <a class="dropdown-item" href="#">Something else here</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Separated link</a>
      </div>
    </li>
  </ul>
  <body>


    <div class="col-lg-5 col-lg-offset-2">
      <h1 align="center">Registrar Nuevo Usuario</h1>
      <?php if(isset($_SESSION['success'])) {?>
        <div class="alert alert-success"><?php echo $_SESSION['success'];?></div>
      <?php } ?>
      <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
      <form action="" method="POST">

      <div class="form-group">
        <label for="usuario" >Nombre de Usuario: </label>
        <input class="form-control" name="usuario" id="usuario" type="text">
      </div>

      <div class="form-group">
        <label for="contraseña" >Contraseña: </label>
        <input class="form-control" name="contraseña" id="contraseña" type="password">
      </div>

      <div >
        <button class="btn btn-primary" name="register">Registrar</button>
      </div>
    </form>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>public/js/bootstrap.min.js"></script>
  </body>
</html>
