<?php
	ob_start();
	require_once 'template/head.php'; 
	require 'lib/phpmailer/class.phpmailer.php';
	require 'lib/phpmailer/class.smtp.php';
	$nome     	= $_POST['nome'];
	$email    	= $_POST['email'];
	$telefone	= $_POST['telefone'];
	$curso   	= $_POST['curso'];
	$dias_semana = $_POST['dias_semana'];
	$horarios_semana = $_POST['horarios_semana'];

	$assunto  	= 'Contato Centtran';
	$data_envio = date('d/m/Y');
	$hora_envio = date('H:i');
	$mail = new PHPMailer;
	$mail->isSMTP();                                    
	$mail->SMTPAuth = true;                       
	$mail->SMTPSecure = 'false';                           
	$mail->CharSet = 'UTF-8';
	$mail->SMTPOptions = array(
	       'ssl' => array(
	           'verify_peer' => false,
	           'verify_peer_name' => false,
	           'allow_self_signed' => true
	        )
	    );
	// CONFIGURA O SERVIDOR E O CLIENTE DE EMAIL
	$mail->Host = 'mail.techdsites.com.br';
	$mail->Username = 'dispara@techdsites.com.br';                          
	$mail->Password = 'Techd@2017'; 
	$mail->Port     = 587;  
	$mail->From = $email;
	$mail->FromName = $nome;
	$mail->addAddress('matriculas@centtran.com.br', 'Centtran'); 
	//$mail->addAddress('guilhermesantosavelar@gmail.com', 'Techd'); 
	//$mail->addAddress('patriciapratess@hotmail.com', 'Patricia');
	//$mail->addAddress('comercial@centtran.com.br', 'Comercial');
	$mail->addReplyTo($email, $nome);
	$mail->WordWrap = 50;                            

	$mail->isHTML(true);     
	$mail->Subject = $assunto;
	$mail->Body    = "<html xmlns='http://www.w3.org/1999/xhtml'>
	<body style='margin: 0; padding: 0; background: #F8F8F8;'>
	 <table cellpadding='0' cellspacing='0' width='100%' >
	 	<br>
	  <tr>
	   	<td>
		<table align='center' cellpadding='0' cellspacing='0' width='600' >
		 <tr>
		  <td bgcolor='#fff' style='padding: 10px 20px 0px 20px; border-radius:0 0 5px 5px;border:1px solid rgba(0,0,0,0.1); border-bottom:3px solid #c9c9c9; '>
			 <table cellpadding='0' cellspacing='0' width='100%'>
				 <tr>
				  <td style='color: #153643; font-family: Open Sans, sans-serif; font-size: 24px;'>
					<h3>Contato do site</h3>				
				 </tr>
				 <tr>
				  <td style='padding: 0px 0 30px 0; color: #153643; font-family: Open Sans, sans-serif; font-size: 16px; line-height: 20px;'>
				     <br>	
					 <b>Nome:</b> $nome		
					 <br><br>
					 <b>Email:</b> $email
					 <br><br>
					 <b>Telefone:</b> $telefone 
					 <br><br>
					 <b>Curso:</b> $curso
					 <br><br>
					 <b>Dias da semana:</b> $dias_semana
					 <br><br>
					 <b>Horarios da semana:</b> $horarios_semana 
					 <br><br>
					 <i color='#9b9b9b'> Enviado dia : <b>$data_envio</b> às  <b>$hora_envio</b></i>
					 
				  </td>
				 </tr>
		  <tr>
		  	<td><br/></td>
		 </tr>
		</table>
	   	</td>
	  </tr>
	 </table>
	 <br><br>
	</html>";
	
	if($mail->send()) {
		header('Location: '.url('sucesso'));
		exit; 
	}else{
		echo  $mail->ErrorInfo;
	}

	?>