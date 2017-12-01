<div class="container">
  </br>
  </br>
   <div class="row">
        </br></br>

          <div>
            <a href="<?=base_url()?>evento/registro" class="btn btn-lg btn-success" role="button"><i class="fa fa-plus "></i> Crear Evento</a>
          </div>
            <br>
            <div class="table-responsive">
                <table class="table table-striped table-hover table-bordered" id="tabla_usuarios">
                    <thead class="thead-dark">
                        <tr>
                          <th>Nombre</th>
                          <th>Fecha Inicio</th>
                          <th>Fecha Fin</th>
                          <th>Detalle</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                          foreach ($cargar->result() as $fila) {
                        ?>

                        <tr value="<?= $fila->id ?>">
                            <td><?= $fila->nombre ?></td>
                            <td><?= $fila->fecha_inicio ?></td>
                            <td><?= $fila->fecha_inicio ?></td>
                            <td><a href="<?=base_url()?>$fila->imagen?>"><button type="button" class="btn btn-xs btn-primary">VER</button></a></td>
                            <td>
                              <a href="<?= base_url('evento/editar/').$fila->id?>"><button type="button" class="btn btn-xs btn-primary"><i class="glyphicon  glyphicon-edit" ></i>Editar</button></a>
                              <a href="<?= base_url('evento/eliminar/').$fila->id?>"><button class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-thumbs-down"></i>Eliminar</button></a>
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
