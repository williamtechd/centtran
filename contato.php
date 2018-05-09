<?php 
	$title = "Centtran - O melhor centro de formação de condutores da zona leste.";  
	$page  = "contato";
	require_once 'template/header.php';  
?>
 	
 	<section class="top-page">
 		<div class="container">
 			<h1>Contato</h1>
 			<div class="breadcrumbs">
 				<ul>
 					<li><a href="home">Home</a></li>
 					<li>Contato</li>
 				</ul>
 			</div>
 		</div>
 	</section>

	<section class="content">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h2>Contate-nos</h2>
					<p class="subtitle">Preencha o formulário abaixo para enviar um <br> email para nosso setor de atendimento.</p>

					<form method="post" action="send.php">

						<div class="form-group">
							<label>*Nome</label>
							<input required="" type="text" name="nome" class="form-control" placeholder="Digite seu nome">
						</div>	

						<div class="form-group">
							<label>*Email</label>
							<input required="" type="email" name="email" class="form-control" placeholder="Digite seu email">
						</div>

						<div class="form-group">
							<label>*Telefone (Whatsapp)</label>
							<input required="" type="tel" name="telefone" class="form-control" placeholder="Digite seu telefone(whatsapp)">
						</div>	

						<div class="form-group">
							<label>*Mensagem</label>
							<textarea rows="5" class="form-control" name="mensagem" placeholder="Digite sua mensagem" required=""></textarea>
						</div>

						<div class="form-group">
							<button class="btn float-right">Enviar</button>
						</div>

					</form>

				</div>
				<div class="col-md-6">
					<div class="atendimento">
						<h3>Central de <br> Atendimento</h3>
						<p>Ligue para nós, vamos adorar <br> atender sua ligação.</p>

						<br><br>
						<p>Telefone <br><b>11 2919-8956 / 11 2011-6587</b></p>

						<br>
						<p>Email <br><b>contato@centtran.com.br</b></p>

						<br>
						<p>Nossa localização, venha fazer uma visita e conhecer <br> o melhor Centro de Formação da Zona Leste.</p>
						<div class="map"></div>
						<p><small>Rua Ándre de Almeida nº 2102, São Mateus - São Paulo - CEP - 03950-000</small></p>
					</div>
				</div>
			</div>
		</div>
	</section>


<?php 
	require_once 'template/infobar.php';
	require_once 'template/cursos.php'; 
	require_once 'template/blog.php'; 
 	require_once 'template/footer.php';  
?>