<body>
</hr>
</hr>
<h3>Registrar Evento</h3>
<div >
    <div class="col-lg-5 col-lg-offset-2">
      <h1 align="center">Registrar Nuevo Evento</h1>
      <?php if(isset($_SESSION['success'])) {?>
        <div class="alert alert-success"><?php echo $_SESSION['success'];?></div>
      <?php } ?>
      <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
      <form action="" method="POST">

      <div class="form-group">
        <label for="usuario" >Nombre del Evento: </label>
        <input class="form-control" name="nombre" id="nombre" type="text">
      </div>
      <div class="form-group">
        <label for="usuario" >Fecha de Inicio: </label>
        <input class="form-control" name="fecha_i" id="fecha_i" type="date">
      </div>
      <div class="form-group">
        <label for="usuario" >Fecha de Fin: </label>
        <input class="form-control" name="fecha_f" id="fecha_f" type="date">
      </div>

      <div class="form-group">
        <label for="contraseña" >Detalle: </label>
        <input class="form-control" name="contraseña" id="contraseña" type="file">
      </div>

      <div >
        <button class="btn btn-primary" name="register">Registrar</button>
      </div>
    </form>
    </div>
</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>public/js/bootstrap.min.js"></script>
  </body>
</html>
