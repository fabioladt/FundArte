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

			<a href="<?=base_url()?>usuario" ><img src="<?=base_url()?>public/images/logo.jpg" ></a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
                <li><a href="<?=base_url()?>evento/inicio" class="smoothScroll"><b>Solar</b></a></li>
                <li><a href="<?=base_url()?>exposicion/inicio" class="smoothScroll"><b>Cafeto</b></a></li>
                <li><a href="<?=base_url()?>clase/inicio" class="smoothScroll"><b>Aprendizajes</b></a></li>
                <li><a href="<?=base_url()?>voluntariado/inicio" class="smoothScroll"><b>Voluntariado</b></a></li>
                <li><a href="<?=base_url()?>usuario/inicio" class="smoothScroll"><b>Usuarios</b></a></li>
                <li><a href="<?=base_url()?>" class="smoothScroll"><span class="glyphicon glyphicon-off"></span></a></li>
			</ul>
		</div>
	</div>
</div>
