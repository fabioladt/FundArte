<body>
</hr>
</hr>
<h3>Edición de Exposiciones</h3>
<div >
    <div class="col-lg-5 col-lg-offset-2">
      <h1 align="center">Editar Exposicion</h1>
      <?php if(isset($_SESSION['success'])) {?>
        <div class="alert alert-success"><?php echo $_SESSION['success'];?></div>
      <?php } ?>
      <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
      <form action="<?=base_url()?>exposicion/update" method="POST">
      <div class="form-group">
        <input type="hidden" name="id" value="<?php echo $exp->id; ?>"
      </div>

      <div class="form-group">
        <label for="usuario" >Nombre de la Exposicion: </label>
        <input class="form-control" name="nombre" id="nombre" type="text" value="<?php echo $exp->nombre; ?>">
      </div>

      <div class="form-group">
        <label for="usuario" >Fecha de Inicio: </label>
        <input class="form-control" name="fecha_i" id="fecha_i" type="date" value="<?php echo $exp->fecha_inicio; ?>">
      </div>

      <div class="form-group">
        <label for="contraseña" >Fecha de Fin: </label>
        <input class="form-control" name="fecha_f" id="fecha_f" type="date" value="<?php echo $exp->fecha_fin; ?>">
      </div>

      <div class="form-group">
        <label for="usuario" >Detalle: </label>
        <input name="imagen" id="imagen" type="file" value="<?php echo $exp->imagen; ?>">
      </div>

      <div >
        <button class="btn btn-primary" name="update">Actualizar</button>
      </div>
    </form>
    </div>
</div>
  </body>
</html>
