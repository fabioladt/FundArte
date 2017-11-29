<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Usuarios</title>

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

<div class="container">
  </br>
  </br>
   <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <?php if(isset($_SESSION['success'])) {?>
            <div class="alert alert-success"><?php echo $_SESSION['success'];?></div>
          <?php } ?>

          Bienvenido, <?php echo $_SESSION['usuario']; ?>

        </br></br>

          <div>
            <a href="/login/index.php/auth/register" class="btn btn-lg btn-success" role="button"><i class="fa fa-plus "></i> Crear Usuario</a>
          </div>
            <br>
            <div class="table-responsive">
                <table class="table table-striped table-hover table-bordered" id="tabla_usuarios">
                    <thead class="thead-dark">
                        <tr>
                            <th>Nombre de Usuario</th>
                            <th>Contraseña</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                          foreach ($cargar->result() as $fila) {
                        ?>

                        <tr value="<?= $fila->id ?>">
                            <td><?= $fila->usuario ?></td>
                            <td><?= $fila->contraseña ?></td>
                            <td>
                              <a href=""><button type="button" class="btn btn-xs btn-primary"><i class="glyphicon  glyphicon-edit"></i>Editar</button></a>
                              <a href=""><button class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-thumbs-down"></i>Eliminar</button></a>
                            </td>
                        </tr>

                        <?php
                            }
                        ?>

                    </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>
    </div>
</body>
</html>
