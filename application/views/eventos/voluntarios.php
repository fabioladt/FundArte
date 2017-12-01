<div id="evento">
	<div class="container" id="login">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	            <br>
	           	<p><b>Se necesita personal en los siguientes voluntariados:</b></p>
						<hr>
						<?php
						foreach ($Voluntarios->result() as $fila)	{
							?>
						<p>Voluntariado: <?= $fila->nombre ?><br>
						Para: <?= $fila->descripcion ?><br>
						La fecha: <?= $fila->fecha_inicio ?></p>
						<a href="<?=base_url()?>$fila->imagen?>"><button type="button" class="btn btn-xs btn-primary">VER</button></a>
						<?= $fila->estado ?>
						<p>Para mayor informacion: <?= $fila->correo ?></p>
						<hr>
						<?php		
						}
						?>
				</div>
		</div>
	</div>
</div>