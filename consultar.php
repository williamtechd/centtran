<?php 
	$title = "Centtran - O melhor centro de formação de condutores da zona leste.";  
	$page  = "consultar";
	require_once 'template/header-clean.php';  
?>


<section class="steps">
	<div class="container">
		<?php if(!$_POST): ?>
			<div class="row step-1">
				<div class="col-md-6">
					<div class="icon">
						<img src="<?php echo url('assets/images/icon-calendar.png') ?>">
					</div>
					<h2 class="text-center">Olá, para consultar horários e <br> datas é bem simples , basta <br>  preencher o formulário ao lado!</h2>
					<p class="text-center">Campos com (*) são obrigatórios </p>
				</div>
				<div class="col-md-6">
					<form method="post" action="consultar.php">
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
							<input type="hidden" value="<?php echo $_GET['curso'] ?>" name="curso">
							<button class="btn float-right">Avançar</button>
						</div>
					</form>
				</div>
				<div class="col-md-12">
					<div class="dots">
						<div class="dot active">
							<span></span>
						</div>
						<div class="dot">
							<span></span>
						</div>
					</div>
				</div>
			</div>

			<?php else: ?>
				<div class="row step-2">
					<form method="post" action="send-consulta.php">

						<input type="hidden" name="nome" value="<?php echo $_POST['nome'] ?>">
						<input type="hidden" name="email" value="<?php echo $_POST['email'] ?>">
						<input type="hidden" name="telefone" value="<?php echo $_POST['telefone'] ?>">

						<div class="col-md-12">
							<div class="row">
								<div class="col-md-4">
									<h2>Verifique se o <br> curso escolhido <br> está correto.</h2>
								</div>
								<div class="col-md-8">
									<ul>
										<li>
											<div class="item radio curso-de-motorista-de-ambulancia">
												<input type="radio" name="curso" value="Curso de Motorista de Ambulância">
												Curso de Motorista de <br> Ambulância
											</div>
										</li>
										<li>
											<div class="item radio curso-mopp">
												<input type="radio" name="curso" value="Curso de MOPP" >
												Curso de <br> MOPP
											</div>
										</li>
										<li>
											<div class="item radio curso-de-transporte-escolar">
												<input type="radio" name="curso" value="Curso de Transporte Escolar">
												Curso de Transporte <br> Escolar
											</div>
										</li>
										<li>
											<div class="item radio curso-de-transporte-coletivo">
												<input type="radio" name="curso" value="Curso de Transporte Coletivo">
												Curso de Transporte <br> Coletivo
											</div>
										</li>
										<li>
											<div class="item radio curso-de-taxisita">
												<input type="radio" name="curso" value="Curso de Taxisista">
												Curso de <br> Taxisista
											</div>
										</li>
										<li>
											<div class="item radio curso-de-mobilidade-reduzida">
												<input type="radio" name="curso" value="Curso de Mobilidade Reduzida">
												Curso de Mobilidade <br> Reduzida
											</div>
										</li>
										<li>
											<div class="item radio curso-para-renovacao-de-cnh">
												<input type="radio" name="curso" value="Curso de Renovação">
												Curso de <br> Renovação
											</div>
										</li>
										<li>
											<div class="item radio curso-de-reciclagem-de-cnh">
												<input type="radio" name="curso" value="Curso de Reciclagem">
												Curso de <br> Reciclagem
											</div>
										</li>
									</ul>
								</div>						
							</div>
						</div>

						<div class="col-md-12">
							<div class="row">
								<div class="col-md-5">
									<div class="form-group">
										<label>*Quais dias  lhe interessam</label>
										<select name="dias_semana" class="form-control" required="" placeholder="Selecione os dias de interesse">
											<option value="">Selecione os dias de interesse</option>
											<option value="Semana">Semana</option>
											<option value="Sábado">Sábado</option>
										</select>
									</div>	
								</div>
								<div class="col-md-5">
									<div class="form-group">
										<label>*Quais períodos lhe interessam</label>
										<select name="horarios_semana" class="form-control" required="" placeholder="Selecione o melhor período">
											<option value="">Selecione o melhor horário</option>
											<option value="Manhã">Manhã</option>
											<option value="Tarde">Tarde</option>
											<option value="Noite">Noite</option>
										</select>
									</div>
								</div>
								<div class="col-md-2">
									<button class="btn float-right">Finalizar</button>
								</div>
							</div>
						</div>

					</form>

					<div class="col-md-12">
						<div class="dots">
							<div class="dot">
								<span></span>
							</div>
							<div class="dot active">
								<span></span>
							</div>
						</div>
					</div>
				</div>

				<script>
					var input = '<?php echo $_POST['curso'] ?>'	;
					$('ul li .item.'+input).addClass('active').find('input').prop('checked', true);; 
				</script>
			
			<?php endif; ?>

		</div>
	</div>
</section>

<?php 
	require_once 'template/footer-clean.php';  
?>