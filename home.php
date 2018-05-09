<?php 
	$title = "Centtran - O melhor centro de formação de condutores da zona leste.";  
	$page  = "home";
	require_once 'template/header.php';  
?>

<section class="banner">
	<div class="container">
		<h1>O melhor centro de <br> formação de condutores <br> da zona leste</h1>
		<hr>
		<h2>Com um time de instrutores altamente qualificados e credenciados pelo <br> DETRAN, o Centtran oferece os melhores cursos em CFC.</h2>
	</div>

	<?php require_once 'template/infobar.php'; ?>
</section>

<section class="cursos-home">
	<div class="container">
		<h2 class="text-center">Cursos para formação e atualização de condutores</h2>
		<p class="text-center subtitle">Faça sua formação ou atualização no melhor centro de formação de condutores da zona leste.</p>

		<div class="row">
			<div class="col-md-3 col-6">
				<div class="item">
					<div class="image"><img src="<?php echo url('assets/images/curso-de-motorista-de-ambulancia.jpg'); ?>"></div>
					<div class="content">
						<h3>Curso de Motorista de Ambulância</h3>
						<p>O curso tem como objetivo preparar o condutor para conduzir ambulâncias e veículos de emergência com segurança. </p>
						<a href="<?php echo url('curso-de-motorista-de-ambulancia') ?>"><button class="btn btn-default">Saiba Mais</button></a>
					</div>
				</div>
			</div>

			<div class="col-md-3 col-6">
				<div class="item">
					<div class="image"><img src="<?php echo url('assets/images/curso-mopp.jpg') ?>"></div>
					<div class="content">
						<h3>Curso <br> MOPP</h3>
						<p>O curso tem como objetivo preparar o condutor para conduzir ambulâncias e veículos de emergência com segurança. </p>
						<a href="<?php echo url('curso-mopp') ?>"><button class="btn btn-default">Saiba Mais</button></a>
					</div>
				</div>
			</div>

			<div class="col-md-3 col-6">
				<div class="item">
					<div class="image"><div class="image"><img src="<?php echo url('assets/images/curso-de-transporte-escolar.jpg') ?>"></div></div>
					<div class="content">
						<h3>Curso de Transporte <br> Escolar</h3>
						<p>O curso tem como objetivo preparar o condutor para conduzir crianças e jovens com maior segurança e atenção.</p>
						<a href="<?php echo url('curso-de-transporte-escolar') ?>"><button class="btn btn-default">Saiba Mais</button></a>
					</div>
				</div>
			</div>

			<div class="col-md-3 col-6">
				<div class="item">
					<div class="image"><div class="image"><img src="<?php echo url('assets/images/curso-de-transporte-coletivo.jpg') ?>"></div></div>
					<div class="content">
						<h3>Curso de Transporte <br> Coletivo</h3>
						<p>O curso tem como objetivo preparar o condutor para conduzir ambulâncias e veículos de emergência com segurança. </p>
						<a href="<?php echo url('curso-de-transporte-coletivo') ?>"><button class="btn btn-default">Saiba Mais</button></a>
					</div>
				</div>
			</div>

			<div class="col-md-3 col-6">
				<div class="item">
					<div class="image"><div class="image"><img src="<?php echo url('assets/images/curso-de-taxisita.jpg') ?>"></div></div>
					<div class="content">
						<h3>Curso de <br>Taxista</h3>
						<p>Todo taxista precisa ter o CONDUTAX, cadastro pessoal e intransferível que habilita o cidadão (pessoa física) a exercer esta atividade.</p>
						<a href="<?php echo url('curso-de-taxisita') ?>"><button class="btn btn-default">Saiba Mais</button></a>
					</div>
				</div>
			</div>

			<div class="col-md-3 col-6">
				<div class="item">
					<div class="image"><div class="image"><img src="<?php echo url('assets/images/curso-de-mobilidade-reduzida.jpg') ?>"></div></div>
					<div class="content">
						<h3>Curso de Mobilidade <br> Reduzida</h3>
						<p>Obrigatório aos condutores e auxiliares de veículo escolar participarem de curso específico para o transporte de crianças especiais.</p>
						<a href="<?php echo url('curso-de-mobilidade-reduzida') ?>"><button class="btn btn-default">Saiba Mais</button></a>
					</div>
				</div>
			</div>

			<div class="col-md-3 col-6">
				<div class="item">
					<div class="image"><div class="image"><img src="<?php echo url('assets/images/curso-para-renovacao-de-cnh.jpg') ?>"></div></div>
					<div class="content">
						<h3>Curso para Renovação <br> da CNH </h3>
						<p>Nova via Carteira Nacional de Habilitação (CNH) para motorista com documento vencido ou prestes a vencer que pretende continuar a dirigir.
						<br> <b> (11) 2919-8956</b></p>
						<a href="<?php echo url('curso-para-renovacao-de-cnh') ?>"><button class="btn btn-default">Saiba Mais</button></a>
					</div>
				</div>
			</div>

			<div class="col-md-3 col-6">
				<div class="item">
					<div class="image"><div class="image"><img src="<?php echo url('assets/images/curso-de-reciclagem-de-cnh.jpg') ?>"></div></div>
					<div class="content">
						<h3>Curso de <br> Reciclagem CNH</h3>
						<p>O curso tem o objetivo de reeducar o condutor que tenha sofrido a penalidade de suspensão do direito de dirigir. <br> <b>(11) 2919-8956</b> </p>
						<!<a href="<?php echo url('curso-de-reciclagem-de-cnh') ?>"><button class="btn btn-default">Saiba Mais</button></a>
					</div>
				</div>
			</div>
  
 
		</div>
	</div>
</section>


<section class="auto-escola">
	<div class="container">
		<div class="row">
			<div class="col-md-5"></div>
			<div class="col-lg-7 col-md-12">
				<h2>Agora o centtran <br> também é autoescola</h2>
				<p class="subtitle">O mais completo centro de <br> formação da zona leste.</p>
				<div class="row">
					<div class="col-md-4">
						<h3>Curso teórico</h3>
						<p>Aqui você faz tudo em um só lugar. O curso teórico está incluso no pacote de CNH.</p>
						<div class="plus"><span>+</span></div>
					</div>
					<div class="col-md-4">
						<h3>Simulador</h3>
						<p>Faça as aulas de simulador aqui também, não precisa se deslocar para outro lugar.</p>
						<div class="plus"><span>+</span></div>
					</div>
					<div class="col-md-4">
						<h3>Aulas Praticas</h3>
						<p>Carros Novos (HB20), Direção Hidraúlica, Ar condicionado e instrutores 100% atenciosos.</p>
					</div>
				</div>

				<a href="https://www.autoescola.centtran.com.br/" target="_blank"><button class="btn btn-default">Confira</button></a>
			</div>
		</div>
	</div>
</section>

<?php 
	require_once 'template/blog.php';
	require_once 'template/footer.php';  
?>