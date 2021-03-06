<div id="evento">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<h1>Talleres, Clases y Cursos!</h1>
	            <br>
	            <div class="table-responsive">
	                <table class="table table-bordered table-hover" id="tabla_clases">
						<thead>
				            <tr>
				                <th>Nombre</th>
				                <th>Fecha Inicio</th>
				                <th>Fecha Fin</th>
				                <th>Detalle</th>
				                <th>Tipo</th>
				            </tr>
				        </thead>
				        <tbody>
						
						<?php
						foreach ($clases->result() as $clase)	{
							?>
						<tr>
							<td><?= $clase->nombre ?></td>
							<td><?= $clase->fecha_inicio ?></td>
							<td><?= $clase->fecha_fin ?></td>
							<td><a href="<?=base_url()?>$fila->imagen?>"><button type="button" class="btn btn-xs btn-primary">VER</button></a></td>
							<td><?= $clase->tipon?></td>
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