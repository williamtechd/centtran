<?php require_once 'template/head.php'; ?>
	
<header class="header">
	<div class="top">
		<div class="container">
			<div class="row">
				<div class="col-6">
					<ul>
						<li><a href="#"><b>E-mail:</b>contato@centtran.com.br</a></li>
					</ul>
				</div>
				<div class="col-6">
					<ul class="float-right">
						<li><a href="http://www.centtran.com.br/blog/" target="_blank">Blog</a></li>
						<li><a href="http://www.detran.sp.gov.br" target="_blank">Links Úteis</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="bottom">
		<div class="container">
			<div class="row">
				<a href="<?php echo url(); ?>" class="logo"><p>Centtran</p></a>
				<nav>
					<ul>
						<li class="cursos"><a>Cursos CFC</a>
							<ul class="submenu">
								<div class="container">
									<div class="row">
										<div class="col-md-4">
											<h2>Cursos Cfc</h2>
											<p>Escolha um curso no menu ao lado, <br> e faça CFC no Centtran </p>
										</div>
										<div class="col-md-8">
											<ul>
												<li><a href="<?php echo url('curso-de-motorista-de-ambulancia') ?>">Motorista de <br> Ambulância</a></li>
												<li><a href="<?php echo url('curso-mopp') ?>">Curso de MOPP</a></li>
												<li><a href="<?php echo url('curso-de-transporte-escolar') ?>">Transporte Escolar</a></li>
												<li><a href="<?php echo url('curso-de-transporte-coletivo') ?>">Transporte Coletivo</a></li>
												<li><a href="<?php echo url('curso-de-taxisita') ?>">Taxista</a></li>
												<li><a href="<?php echo url('curso-de-mobilidade-reduzida') ?>">Mobilidade Reduzida</a></li>
												<li><a href="<?php echo url('curso-para-renovacao-de-cnh') ?>">Renovação</a></li>
												<li><a href="<?php echo url('curso-de-reciclagem-de-cnh') ?>">Reciclagem</a></li>
											</ul>
										</div>
									</div>
								</div>
							</ul>
						</li>
						<li><a class="sobre" href="<?php echo url('sobre'); ?>">Sobre o Centtran</a></li>
						<li><a class="situacao-de-turmas" href="<?php echo url('situacao-de-turmas'); ?>">Situações de Turmas</a></li>
						<li><a class="contato" href="<?php echo url('contato'); ?>">Contato</a></li>
						<li class="telephone">
							<span>Central de Atendimento</span>
							<span class="icon-whatsapp"> <b>94953-1169 | 11 2919-8956</b></span>
						</li>
					</ul>
					<button class="btn btn-close toggle-nav">X</button>
				</nav>	
				<div class="toggle-nav btn-menu"><span class="icon-menu"></span></div>
			</div> 
		</div>
	</div>
	<div class="overlay toggle-nav"></div>
</header>

