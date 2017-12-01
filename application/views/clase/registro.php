<body>
</hr>
</hr>
<h3>Registrar Clase</h3>
<div >
    <div class="col-lg-5 col-lg-offset-2">
      <h1 align="center">Registrar Nueva Clase</h1>
      <?php if(isset($_SESSION['success'])) {?>
        <div class="alert alert-success"><?php echo $_SESSION['success'];?></div>
      <?php } ?>
      <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
      <form action="" method="POST">

      <div class="form-group">
        <label for="usuario" >Nombre de la Clase: </label>
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
        <label for="contraseña" >Detalle: </label>
        <input name="imagen" id="imagen" type="file">
      </div>

      <div class="form-group">
        <label for="contraseña" >Tipo: </label>
        <select name="tipo" id="tipo"><option value='1'>Danza</option><option value='2'>Musica</option><option value='3'>Teatro</option><option value='4'>Yoga</option>
    </select>
      </div>

      <div >
        <button class="btn btn-primary" name="register">Registrar</button>
      </div>
    </form>
    </div>
</div>
  </body>
</html>
