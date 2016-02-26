<body>
<div class="header_bg1">
	<div class="container">
		<div class="row header">
			<div class="logo navbar-left">
				<h1><a href="index.html">CFA - Tortosa </a></h1>
			</div>
			<div class="h_search navbar-right">
				<form>
					<input type="text" class="text" value="Buscar" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Buscar';}">
					<input type="submit" value="buscar">
				</form>
			</div>
			<div class="clearfix"></div>
		</div>

		<div class="row h_menu">
			<nav class="navbar navbar-default navbar-left" role="navigation">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			    </div>

			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			      <ul class="nav navbar-nav">
			        <li class="active"><a href="<?php echo base_url(); ?>">Inici</a>
		              <li class="dropdown">

		              	<a class="dropdown-toggle" data-toggle="dropdown" href="<?php echo base_url(''); ?>">Escola  <b class="caret"></b></a>

		              	<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
		              		<li> 
		              			<a target="_blank" href="<?php echo base_url('assets/files/NOF_CFA_Tortosa.pdf'); ?>">NOF </a>
			                </li>

			                <li>
			                	<a target="_blank" href="<?php echo base_url('assets/files/PAT_CFA_TORTOSA.pdf'); ?>">PAT </a>
			                </li>

			                <li>
			                	<a target="_blank" href="<?php echo base_url('assets/files/Projecte_Educatiu_Centre_CFA_Tortosa.pdf'); ?>">Projecte Educatiu Centre</a>
			                </li>
			                	
			                <li class="dropdown-submenu">
			            </ul>
			          </li>

			        <li class="dropdown">
				        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Ensenyament  <b class="caret"></b></a>

			            <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
	                    	<li><a href="#">Llengües extrangeres</a></li>
	                    	<li class="menu-item dropdown dropdown-submenu">

			 					<a href="#" class="dropdown-toggle" data-toggle="dropdown-menu" href="#">Proves d'Accés</a>
								<ul class="dropdown-menu">
									<li><a target="_blank" href="http://ensenyament.gencat.cat/ca/inici/">Normativa de les proves de Grau mitjà</a></li>
									<li><a target="_blank" href="http://ensenyament.gencat.cat/ca/inici/">Normativa de les proves de Grau Superior</a></li>
									<li><a target="_blank" href="http://www.gencat.cat/diue/ambits/ur/universitats/acces/vies/25a/index.html">Normativa de les proves de PAU + 25 i PAU + 45</a></li>
									<div class="divider"></div>
									<li><a target="_blank" href="http://www.ceice.gva.es/eva/val/fp/pruacc.htm">Inscripció de les prova d'accés a Grau Mitjà a la Comunitat Valenciana</a></li>
									<li><a target="_blank" href="http://www.ceice.gva.es/eva/val/fp/pruacc.htm">Inscripció de les prova d'accés a Grau Superior a la Comunitat Valenciana</a></li>
								</ul>
	                    	<li><a href="#">Català</a> </li>
							<li><a href="#">Informàtica</a></li>
	                    	<li><a href="#">GES</a></li>
							</li>
	                	</ul>
	                </li>
			        <li><a href="#">Secretaria</a></li>
			        <li><a href="<?php echo base_url('teacher'); ?>">Professorat</a></li>

			        <li class="dropdown">
			        	<a class="dropdown-toggle" data-toggle="dropdown" href="#">Horaris <b class="caret"></b></a>
			        	<ul class="dropdown-menu">
			        		<li><a target="_blank" href="files/HORARIS ENSENYAMENTS INICIALS 15-16.pdf">Informàtica, català i àngles</a></li>
			        		<li><a target="_blank" href="files/PACCES_15-16.pdf">Proves d'accés</a></li>
			        		<li><a target="_blank" href="files/GES_horaris_anual_15-16.pdf">GES</a></li>
			        	</ul>
			        </li>

			        <li><a href="<?php echo base_url('#contact'); ?>">Contacte</a></li>
			      </ul>
			    </div><!-- /.navbar-collapse -->
			    <!-- start soc_icons -->
			</nav>

			<div class="soc_icons navbar-right">
				<ul class="list-unstyled text-center">
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="https://www.facebook.com/cfa.tortosa"><i class="fa fa-facebook"></i></a></li>
					<li><a href="https://mail.google.com/"><i class="fa fa-google-plus"></i></a></li>
				</ul>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>