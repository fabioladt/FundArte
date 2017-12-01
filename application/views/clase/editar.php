<body>
</hr>
</hr>
<h3>Edición de Clases</h3>
<div >
    <div class="col-lg-5 col-lg-offset-2">
      <h1 align="center">Editar Clase</h1>
      <?php if(isset($_SESSION['success'])) {?>
        <div class="alert alert-success"><?php echo $_SESSION['success'];?></div>
      <?php } ?>
      <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
      <form action="<?=base_url()?>clase/update" method="POST">
      <div class="form-group">
        <input type="hidden" name="id" value="<?php echo $cla->id; ?>"
      </div>

      <div class="form-group">
        <label for="usuario" >Nombre de la Clase: </label>
        <input class="form-control" name="nombre" id="nombre" type="text" value="<?php echo $cla->nombre; ?>">
      </div>

      <div class="form-group">
        <label for="usuario" >Fecha de Inicio: </label>
        <input class="form-control" name="fecha_i" id="fecha_i" type="date" value="<?php echo $cla->fecha_inicio; ?>">
      </div>

      <div class="form-group">
        <label for="contraseña" >Fecha de Fin: </label>
        <input class="form-control" name="fecha_f" id="fecha_f" type="date" value="<?php echo $cla->fecha_fin; ?>">
      </div>

      <div class="form-group">
        <label for="usuario" >Detalle: </label>
        <input class="form-control" name="imagen" id="imagen" type="file" value="<?php echo $cla->imagen; ?>">
      </div>

      <div class="form-group">
        <label for="contraseña" >Tipo: </label>
        <select name="tipo" id="tipo" value="<?php echo $cla->tipo; ?>"><option value='1'>Danza</option><option value='2'>Musica</option><option value='3'>Teatro</option><option value='4'>Yoga</option></select>
    </select>

      <div >
        <button class="btn btn-primary" name="update">Actualizar</button>
      </div>
    </form>
    </div>
</div>
  </body>
</html>
