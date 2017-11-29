<div id="evento">
	<div class="container" id="login">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	            <br>
	            <div class="table-responsive">
	                <table class="table table-bordered table-hover" id="tabla_eventos">
						<thead>
				            <tr>
				                <th>Nombre</th>
				                <th>Fecha Inicio</th>
				                <th>Fecha Fin</th>
				                <th>Detalle</th>
				                <th>Lugar</th>
				            </tr>
				        </thead>
				        <tbody>
						
						<?php
						foreach ($eventos->result() as $solar)	{
							?>
						<tr>
							<td><?= $solar->nombre ?></td>
							<td><?= $solar->fecha_inicio ?></td>
							<td><?= $solar->fecha_fin ?></td>
							<td><a href="<?=base_url()?>$fila->imagen?>"><button type="button" class="btn btn-xs btn-primary">VER</button></a></td>
							<td>Solar</td>
						</tr>
						<?php		
						}
						?>

						<?php		
						foreach ($exposiciones->result() as $cafeto)	{
							?>
						<tr>
							<td><?= $cafeto->nombre ?></td>
							<td><?= $cafeto->fecha_inicio ?></td>
							<td><?= $cafeto->fecha_fin ?></td>
							<td><a href="<?=base_url()?>$fila->imagen?>"><button type="button" class="btn btn-xs btn-primary">VER</button></a></td>
							<td>Cafeto</td>
						</tr>
							<?php } ?>

						</tbody>
					</table>
				</div>	
			</div>
		</div>
	</div>
</div>