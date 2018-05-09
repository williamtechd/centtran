<?php 
	$title = "Centtran - O melhor centro de formação de condutores da zona leste.";  
	$page  = "cursos";
	require_once 'template/header.php';  
	// DADOS
	$json  = file_get_contents('config/cursos/cursos.json');
	$data  = json_decode($json);
	$data  = $data->cursos->$name;
?>
 	
 	<section class="top-page">
 		<div class="container">
 			<h1><?php echo $data->titulo; ?></h1>
 			<div class="breadcrumbs">
 				<ul>
 					<li><a href="home">Home</a></li>
 					<li><?php echo $data->titulo; ?></li>
 				</ul>
 			</div>
 		</div>
 	</section>

	<section class="content">
		
		<section class="curso">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="image"><img src="<?php echo url('assets/images/'.$name.'-page.jpg') ?>"></div>
							<div class="content">
								<h2>O que é o <?php echo $data->titulo; ?></h2>
								<p><?php echo $data->objetivo; ?></p>
								<hr>
								<h3 class="text-center">Consulte a disponibilidade das novas turmas</h3>
								<p class="text-center">Qual é o melhor dia e horário para você fazer o <?php echo $data->titulo; ?></p>
									<a href="<?php echo url('consultar.php?curso='.$name) ?>"><button class="btn btn-default">Consultar</button></a>
							</div>
						</div>
					</div>
					<div class="col-md-6">
							<h4>Qual o objetivo do <?php echo $data->titulo; ?>?</h4>
							<p><?php echo $data->objetivo; ?></p>

							<h4>Qual a duração  do <?php echo $data->titulo; ?>?</h4>
							<p><?php echo $data->duracao; ?></p>

							<h4>O <?php echo $data->titulo; ?> tem certificação?</h4>
							<p><?php echo $data->certificacao; ?></p>
					</div>
				</div>
			</div>
		</section>
		
		<section class="info-curso">
			<div class="container">
				
				<h2>Quais os documentos necessários para fazer o <?php echo $data->titulo; ?>?</h2>

				<?php

					foreach ($data->documentos as $key => $value) {
						echo '<p>'.$value.'</p>';
					}

				?>
  
			</div>
		</section>
	</section>

<?php 
	require_once 'template/disponibilidades.php';  
	require_once 'template/infobar.php';
	require_once 'template/cursos.php'; 
	require_once 'template/blog.php'; 
 	require_once 'template/footer.php';  
?>