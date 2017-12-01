<body>
</hr>
</hr>
<h3>Edición de Usuarios</h3>
<div >
    <div class="col-lg-5 col-lg-offset-2">
      <h1 align="center">Editar Usuario</h1>
      <?php if(isset($_SESSION['success'])) {?>
        <div class="alert alert-success"><?php echo $_SESSION['success'];?></div>
      <?php } ?>
      <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
      <form action="<?=base_url()?>usuario/update" method="POST">
      <div class="form-group">
        <input type="hidden" name="id" value="<?php echo $usu->id; ?>"
      </div>

      <div class="form-group">
        <label for="usuario" >Nombre de Usuario: </label>
        <input class="form-control" name="usuario" id="usuario" type="text" value="<?php echo $usu->usuario; ?>">
      </div>

      <div class="form-group">
        <label for="contraseña" >Contraseña: </label>
        <input class="form-control" name="contraseña" id="contraseña" type="password" value="<?php echo $usu->contraseña; ?>">
      </div>

      <div >
        <button class="btn btn-primary" name="update">Actualizar</button>
      </div>
    </form>
    </div>
</div>
    
  </body>
</html>
