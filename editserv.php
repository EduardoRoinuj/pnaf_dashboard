<?php

include 'conexao.php';




$recebe_id = $_POST['id'];

$recebe_primario = $_POST['servico-primario'];

$recebe_secundario = $_POST['servico-secundario'];





$consulta = $conexao->query("SELECT * FROM servicos WHERE id='$recebe_id'");

$exibe=$consulta->fetch(PDO::FETCH_ASSOC);


	
	try{
		
	$alterar=$conexao->query("
	
	UPDATE `servicos` SET 
	
	`servico-primario`='$recebe_primario',
	
	`servico-secundario`='$recebe_secundario'
	
	WHERE `id`='$recebe_id';
	
	");
	
	header('location:sucesso2.php');
	
	}catch(PDOException $e){
		
		echo $e->getMessage();
	}
	


?>