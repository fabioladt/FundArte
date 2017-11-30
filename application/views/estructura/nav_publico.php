<body data-spy="scroll" data-target=".navbar-collapse">
<!-- navigation -->
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
			</button>

			<a href="<?=base_url()?>" ><img src="<?=base_url()?>public/images/logo.jpg" ></a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="<?=base_url()?>" class="smoothScroll"><b>Menú</b></a>
					<ul class="dropdown">
						<li><a href="<?=base_url()?>" class="smoothScroll">De la fundación</li></a>
						<li><a href="<?=base_url()?>" class="smoothScroll">Ejes de acción</a>
							<ul class="dropdown">
								<li><a href="<?=base_url()?>" class="smoothScroll">Difusión Artística</li></a>
								<li><a href="<?=base_url()?>" class="smoothScroll">Formación Artística</li></a>
								<li><a href="<?=base_url()?>" class="smoothScroll">Profesionalización</li></a>
							</ul>
						</li>
						<li><a href="<?=base_url()?>" class="smoothScroll">Eventos</li></a>
						<li><a href="<?=base_url()?>" class="smoothScroll">Donaciones</li></a>
						<li><a href="<?=base_url()?>" class="smoothScroll">¡Contactenos!</li></a>
					</ul>
				</li>
                <li><a href="<?=base_url()?>Solar" class="smoothScroll"><b>Solar</b></a></li>
                <li><a href="<?=base_url()?>Cafeto" class="smoothScroll"><b>Cafeto</b></a></li>
                <li><a href="<?=base_url()?>Galeria" class="smoothScroll"><b>Eventos</b></a></li>
                <li><a href="<?=base_url()?>Aprendizaje" class="smoothScroll"><b>Aprendizajes</b></a></li>
                <li><a href="#empresa" class="smoothScroll"><b>Voluntariado</b></a></li>
                <li><a href="#aspirante" class="smoothScroll"><b>Donaciones</b></a></li>
                <li><a href="<?=base_url()?>auth/Login" class="smoothScroll"><b>Login</b></a></li>
			</ul>
		</div>
	</div>
</div>