<?php

include 'conexao.php';

$recebe_nome = $_POST['nome'];
$recebe_sobrenome = $_POST['sobrenome'];
$recebe_email = $_POST['email'];
$recebe_senha = $_POST['senha'];

$consulta = $conexao->query("SELECT email FROM usuarios WHERE  email='$recebe_email'");

//$exibe=$consulta->fetch(PDO::FETCH_ASSOC);

if($consulta->rowCount()==1){
	
	header('location:erro1.php');
	
}else{
	
	try{
		
	$incluir=$conexao->query("
	
	INSERT INTO usuarios (nome,sobrenome,email,senha,adm)VALUES(
	'$recebe_nome',
	'$recebe_sobrenome',
	'$recebe_email',
	'$recebe_senha',
	'0'
	)");
	
	header('location:ok.php');
	
	}catch(PDOException $e){
		
		echo $e->getMessage();
	}
	
}

?>