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
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-form navbar-left">
			<li><a href="<?=base_url()?>" ><img src="<?=base_url()?>public/images/logo2.jpg" ></a></li>
			<li><a href="<?=base_url()?>" class="smoothScroll"><span class="glyphicon glyphicon-th-list"></span></a>
					<ul class="dropdown">
						<li><a href="<?=base_url()?>" class="smoothScroll">De la fundación</li></a>
						<li><a href="<?=base_url()?>" class="smoothScroll">Ejes de acción <span class="glyphicon glyphicon-chevron-right"></span></a>
							<ul class="dropdown">
								<li><a href="<?=base_url()?>" class="smoothScroll">Difusión Artística</li></a>
								<li><a href="<?=base_url()?>" class="smoothScroll">Formación Artística</li></a>
								<li><a href="<?=base_url()?>" class="smoothScroll">Profesionalización</li></a>
							</ul>
						</li>
						<li><a href="<?=base_url()?>Galeria" class="smoothScroll">Eventos</li></a>
						<li><a href="<?=base_url()?>Donacion" class="smoothScroll">Donaciones</li></a>
						<li><a href="<?=base_url()?>" class="smoothScroll">¡Contactenos!</li></a>
					</ul>
				</li>
                <li><a href="<?=base_url()?>Solar" class="smoothScroll"><b>Solar <span class=" glyphicon glyphicon-chevron-down"></span></b></a>
                	<ul class="dropdown">
						<li><a href="<?=base_url()?>Historia_Solar" class="smoothScroll">Historia</li></a>
					</ul>
                </li>
                <li><a href="<?=base_url()?>Cafeto" class="smoothScroll"><b>Cafeto <span class=" glyphicon glyphicon-chevron-down"></span></b></a>
                	<ul class="dropdown">
						<li><a href="<?=base_url()?>Historia_Cafeto" class="smoothScroll">Historia</li></a>
					</ul>
                </li>
                <li><a href="<?=base_url()?>Galeria" class="smoothScroll"><b>Eventos</b></a></li>
                <li><a href="<?=base_url()?>Aprendizaje" class="smoothScroll"><b>Aprendizajes</b></a></li>
                <li><a href="<?=base_url()?>Voluntarios" class="smoothScroll"><b>Voluntariado</b></a></li>
                <li><a href="<?=base_url()?>Donacion" class="smoothScroll"><b>Donaciones</b></a></li>
                <li><a href="<?=base_url()?>auth/Login" class="smoothScroll"><span class="glyphicon glyphicon-user"></span></a></li>
			</ul>
		</div>
	</div>
</div>