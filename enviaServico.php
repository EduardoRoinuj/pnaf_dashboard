<?php

	session_start();

include 'conexao.php';

$recebe_primario = $_POST['servico-primario'];
$recebe_secundario = $_POST['servico-secundario'];


$consulta = $conexao->query("SELECT * FROM servicos WHERE `servico-primario` = '$recebe_primario'");
//$exibe=$consulta->fetch(PDO::FETCH_ASSOC);


if($consulta->rowCount()==1){
	
	header('location:erro2.php');
	
}else{
	
	try{
		
	$enviar=$conexao->query("
	
	INSERT INTO `servicos` (`servico-primario`, `servico-secundario`) VALUES ('$recebe_primario', '$recebe_secundario')");
	
	header('location:sucesso3.php');
	
	}catch(PDOException $e){
		
		echo $e->getMessage();
	}
	
}

?>