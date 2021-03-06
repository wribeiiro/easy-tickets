	<!-- Navigation-->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
		<a class="navbar-brand" href="<?php echo site_url('Principal') ?>"><i class="fa fa-ticket fa-2x"></i> Easy Tickets</a>
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
				<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
					<a class="nav-link" href="<?php echo site_url('Principal') ?>">
						<i class="fa fa-fw fa-dashboard"></i>
						<span class="nav-link-text">Dashboard</span>
					</a>
				</li>

				<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
					<a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
						<i class="fa fa-fw fa-ticket"></i>
						<span class="nav-link-text">Tickets</span>
					</a>
					<ul class="sidenav-second-level collapse" id="collapseComponents">
						<li>
							<a href="<?php echo site_url('Tickets/adicionar') ?>"><i class="fa fa-fw fa-plus"></i> Abrir</a>
						</li>
						<li>
							<a href="<?php echo site_url('Tickets/listar') ?>"><i class="fa fa-fw fa-list"></i> Listar</a>
						</li>
					</ul>
				</li>

				<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
					<a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents2" data-parent="#exampleAccordion">
						<i class="fa fa-fw fa-question"></i>
						<span class="nav-link-text">Base de Conhecimento</span>
					</a>
					<ul class="sidenav-second-level collapse" id="collapseComponents2">
						<li>
							<a href="<?php echo site_url('BC/adicionar') ?>"><i class="fa fa-fw fa-plus"></i> Adicionar</a>
						</li>
						<li>
							<a href="<?php echo site_url('BC/listar') ?>"><i class="fa fa-fw fa-list"></i> Listar</a>
						</li>
					</ul>
				</li>

				<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
					<a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents3" data-parent="#exampleAccordion">
						<i class="fa fa-fw fa-users"></i>
						<span class="nav-link-text">Clientes</span>
					</a>
					<ul class="sidenav-second-level collapse" id="collapseComponents3">
						<li>
							<a href="<?php echo site_url('Clientes/adicionar') ?>"><i class="fa fa-fw fa-plus"></i> Adicionar</a>
						</li>
						<li>
							<a href="<?php echo site_url('Clientes/listar') ?>"><i class="fa fa-fw fa-list"></i> Listar</a>
						</li>
					</ul>
				</li>

				<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
					<a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents4" data-parent="#exampleAccordion">
						<i class="fa fa-fw fa-user"></i>
						<span class="nav-link-text">Usuários</span>
					</a>
					<ul class="sidenav-second-level collapse" id="collapseComponents4">
						<li>
							<a href="<?php echo site_url('Usuarios/adicionar') ?>"><i class="fa fa-fw fa-plus"></i> Abrir</a>
						</li>
						<li>
							<a href="<?php echo site_url('Usuarios') ?>"><i class="fa fa-fw fa-list"></i> Listar</a>
						</li>
					</ul>
				</li>

				<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
					<a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents5" data-parent="#exampleAccordion">
						<i class="fa fa-fw fa-file-pdf-o"></i>
						<span class="nav-link-text">Relatórios</span>
					</a>
					<ul class="sidenav-second-level collapse" id="collapseComponents5">
						<li>
							<a href="<?php echo site_url('Relatorios/clientes') ?>"><i class="fa fa-fw fa-file-pdf-o"></i> Clientes</a>
						</li>
						<li>
							<a href="<?php echo site_url('Relatorios/tickets') ?>"><i class="fa fa-fw fa-file-pdf-o"></i> Tickets</a>
						</li>
					</ul>
				</li>


				<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
					<a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents6" data-parent="#exampleAccordion">
						<i class="fa fa-fw fa-cog"></i>
						<span class="nav-link-text">Utilitários</span>
					</a>
					<ul class="sidenav-second-level collapse" id="collapseComponents6">
						<li>
							<a href="<?php echo site_url('Utilitarios/executarsql') ?>"><i class="fa fa-fw fa-cogs"></i> Executar SQL</a>
						</li>
						<li>
							<a href="<?php echo site_url('Utilitarios/importarclientes') ?>"><i class="fa fa-fw fa-cogs"></i> Importar Clientes</a>
						</li>
						<li>
							<a href="<?php echo site_url('Utilitarios/backups') ?>"><i class="fa fa-fw fa-cogs"></i> Backups</a>
						</li>
						<li>
							<a href="http://www.i2f.com.br/util/genus/" target="_blank"><i class="fa fa-fw fa-link"></i> Licenças Genus</a>
						</li>
					</ul>
				</li>

			</ul>
			<ul class="navbar-nav sidenav-toggler">
				<li class="nav-item">
					<a class="nav-link text-center" id="sidenavToggler">
						<i class="fa fa-fw fa-angle-left"></i>
					</a>
				</li>
			</ul>
			<ul class="navbar-nav ml-auto">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true	" aria-expanded="false">
						<i class="fa fa-fw fa-envelope"></i>
						<span class="d-lg-none">Mensagens
							<span class="badge badge-pill badge-primary">12 New</span>
						</span>
						<span class="indicator text-primary d-none d-lg-block">
							<i class="fa fa-fw fa-circle"></i>
						</span>
					</a>
					<div class="dropdown-menu" aria-labelledby="messagesDropdown">
						<h6 class="dropdown-header">Novas Mensagens:</h6>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">
							<strong>David Miller</strong>
							<span class="small float-right text-muted">11:21 AM</span>
							<div class="dropdown-message small">Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of the box so they don't overflow over to the sides!</div>
						</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item small" href="#">Ver Todas</a>
					</div>
				</li>
				<li class="nav-item">
					<form class="form-inline my-2 my-lg-0 mr-lg-2">
						<div class="input-group">
							<input class="form-control" type="text" placeholder="Buscar...">
							<span class="input-group-append">
								<button class="btn btn-primary" type="button">
									<i class="fa fa-search"></i>
								</button>
							</span>
						</div>
					</form>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">
						<i class="fa fa"></i>           
							<?php foreach ($sessao as $ses): echo $ses->nome;endforeach;?>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo site_url('Login/logoff') ?>">
						<i class="fa fa-fw fa-sign-out"></i> Sair
					</a>
				</li>
			</ul>
		</div>
	</nav>