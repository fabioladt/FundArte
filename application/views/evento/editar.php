<body>
</hr>
</hr>
<h3>Edición de Eventos</h3>
<div >
    <div class="col-lg-5 col-lg-offset-2">
      <h1 align="center">Editar Evento</h1>
      <?php if(isset($_SESSION['success'])) {?>
        <div class="alert alert-success"><?php echo $_SESSION['success'];?></div>
      <?php } ?>
      <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
      <form action="<?=base_url()?>evento/update" method="POST">
      <div class="form-group">
        <input type="hidden" name="id" value="<?php echo $eve->id; ?>"
      </div>

      <div class="form-group">
        <label for="usuario" >Nombre del Evento: </label>
        <input class="form-control" name="nombre" id="nombre" type="text" value="<?php echo $eve->nombre; ?>">
      </div>

      <div class="form-group">
        <label for="usuario" >Fecha de Inicio: </label>
        <input class="form-control" name="fecha_i" id="fecha_i" type="date" value="<?php echo $eve->fecha_inicio; ?>">
      </div>

      <div class="form-group">
        <label for="contraseña" >Fecha de Fin: </label>
        <input class="form-control" name="fecha_f" id="fecha_f" type="date" value="<?php echo $eve->fecha_fin ?>">
      </div>

      <div class="form-group">
        <label for="usuario" >Datalle: </label>
        <input name="imagen" id="imagen" type="file" value="<?php echo $eve->imagen; ?>">
      </div>

      <div >
        <button class="btn btn-primary" name="update">Actualizar</button>
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
