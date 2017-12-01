<div class="container">
  </br>
  </br>
   <div class="row">
        </br></br>

          <div>
            <a href="<?=base_url()?>auth/register" class="btn btn-lg btn-success" role="button"><i class="fa fa-plus "></i> Crear Usuario</a>
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
                              <a href="<?= base_url('usuario/editar/').$fila->id?>"><button type="button" class="btn btn-xs btn-primary"><i class="glyphicon  glyphicon-edit" ></i>Editar</button></a>
                              <a href="<?= base_url('usuario/eliminar/').$fila->id?>"><button class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-thumbs-down"></i>Eliminar</button></a>
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
