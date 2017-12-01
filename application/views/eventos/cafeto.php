<div id="evento">
    <div class="container">
       <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h1>Exposiciones en el Cafeto</h1>
                <br>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover" id="tabla_cafeto">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Fecha Inicio</th>
                                <th>Fecha Fin</th>
                                <th>Detalle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($cafeto->result() as $fila) {?>
                            <tr>
                                <td><?= $fila->nombre ?></td>
                                <td><?= $fila->fecha_inicio ?></td>
                                <td><?= $fila->fecha_fin ?></td>
                                <td><a href="<?=base_url()?>$fila->imagen?>"><button type="button" class="btn btn-xs btn-primary">VER</button></a></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>