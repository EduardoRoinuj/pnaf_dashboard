<?php




include 'conexao.php';


$recebe_email =$_POST['email'];

$consulta = $conexao->query("SELECT nome,senha,email FROM usuarios WHERE email='$recebe_email'");

if($consulta->rowCount()==0){
	
	
	
	header('location:erro2.php');
}else{
	
	$exibe=$consulta->fetch(PDO::FETCH_ASSOC);
		
		$recebe_nome=$exibe['nome'];
		$recebe_senha=$exibe['senha'];
		
		include 'class.phpmailer.php';
		include 'class.smtp.php';
		include 'PHPMailerAutoload.php';
		
	
		
		$mail = new PHPMailer;
		
		$mail->isSMTP();
		$mail->CharSet = 'UTF-8';
		$mail->SMTPDebug = 2;
		$mail->Host = 'smtp.gmail.com';
		$mail->Port = 587;
		$mail->SMTPSecure = 'tls';
		$mail->SMTPAuth = true;
		$mail->Username = "eguambejunior@gmail.com";
		$mail->Password = "@dump2#user";
		$mail->setFrom('eguambejunior@gmail.com', 'INCM');
		$mail->addReplyTo('eguambejunior@gmail.com', 'INCM');
		$mail->addAddress($recebe_email, $recebe_nome);
		$mail->Subject = 'Recuperação de Senha || INCM';
		$mail->msgHTML('Sua Senha no Sistema de base de dados é:'.$recebe_senha);
		
		
		$mail->SMTPOptions = array(
		'ssl' => array(
        	'verify_peer' => false,
        	'verify_peer_name' => false,
        	'allow_self_signed' => true
    		)
		);
		
		
		if (!$mail->send()) {
			echo "ERRO::::: " . $mail->ErrorInfo;
		} else {
			echo"<html><script>location.href='ok2.php'</script></html>";
		}
}





?>