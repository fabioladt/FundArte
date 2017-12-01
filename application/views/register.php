<body>
</hr>
</hr>
<h3>Registrar Usuario</h3>
<div >
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
</div>
  </body>
</html>
