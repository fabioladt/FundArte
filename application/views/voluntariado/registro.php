<body>
</hr>
</hr>
<h3>Registrar Voluntariado</h3>
<div >
    <div class="col-lg-5 col-lg-offset-2">
      <h1 align="center">Registrar Nuevo Voluntariado</h1>
      <?php if(isset($_SESSION['success'])) {?>
        <div class="alert alert-success"><?php echo $_SESSION['success'];?></div>
      <?php } ?>
      <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
      <form action="" method="POST">

      <div class="form-group">
        <label for="usuario" >Nombre del Voluntariado: </label>
        <input class="form-control" name="nombre" id="nombre" type="text">
      </div>
      <div class="form-group">
        <label for="usuario" >Fecha de Inicio: </label>
        <input name="fecha_i" id="fecha_i" type="date" >
      </div>
      <div class="form-group">
        <label for="usuario" >Fecha de Fin: </label>
        <input name="fecha_f" id="fecha_f" type="date">
      </div>

      <div class="form-group">
        <label for="usuario" >Descripcion: </label>
        <input class="form-control" name="descripcion" id="descripcion" type="text">
      </div>
      <div class="form-group">
        <label for="contraseña" >Detalle: </label>
        <input name="imagen" id="imagen" type="file">
      </div>
      <div class="form-group">
        <label for="usuario" >Estado: </label>
        <input name="estado" id="estado" type="integer">
      </div>
      <div class="form-group">
        <label for="usuario" >Correo: </label>
        <input name="correo" id="correo" type="email">
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