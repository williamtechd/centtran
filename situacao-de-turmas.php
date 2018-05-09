<?php 
	$title = "Centtran - O melhor centro de formação de condutores da zona leste.";  
	$page  = "situacao";
	require_once 'template/header.php';  
?>
 	
 	<section class="top-page">
 		<div class="container">
 			<h1>Situação de turmas</h1>
 			<div class="breadcrumbs">
 				<ul>
 					<li><a href="#">Home</a></li>
 					<li>Situação de turmas</li>
 				</ul>
 			</div>
 		</div>
 	</section>

	<section class="content">
		<section class="curso">
			<div class="container">
				 	
				 <table class="table">
				  <thead class="thead-light">
				    <tr>
				      <th scope="col">ID</th>
				      <th scope="col">Curso</th>
				      <th scope="col">Situação</th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				      <th scope="row">00023</th>
				      <td>Transporte Escolar</td>
				      <td><span class="badge badge-pill badge-success">Liberada</span></td>
				    </tr>
				    <tr>
				      <th scope="row">00024</th>
				      <td>Transporte Coletivo</td>
				      <td><span class="badge badge-pill badge-warning">Aguardando Liberação</span></td>
				    </tr>
				  </tbody>
				</table>
 
			</div>
		</section>
	</section>


<?php 
	require_once 'template/disponibilidades.php';  
 	require_once 'template/cursos.php'; 
	require_once 'template/blog.php'; 
 	require_once 'template/footer.php';  
?>