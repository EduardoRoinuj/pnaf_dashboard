<?php

include 'conexao.php';


	

$recebe_id = $_POST['id'];

$recebe_Finferior = $_POST['Finferior'];

$recebe_Fsuperior = $_POST['Fsuperior'];

$recebe_servico1 = $_POST['servico-primario1'];

$recebe_foot1 = $_POST['footenote1'];

$recebe_servico2 = $_POST['servico-primario2'];

$recebe_foot2 = $_POST['footenote2'];

$recebe_servico3 = $_POST['servico-primario3'];

$recebe_foot3 = $_POST['footenote3'];

$recebe_servico4 = $_POST['servico-primario4'];

$recebe_foot4 = $_POST['footenote4'];

$recebe_servico5 = $_POST['servico-primario5'];

$recebe_foot5 = $_POST['footenote5'];

$recebe_servico6 = $_POST['servico-primario6'];

$recebe_foot6 = $_POST['footenote6'];

$recebe_servicos1 = $_POST['servico-secundario-1'];

$recebe_foots1 = $_POST['footenotes1'];

$recebe_servicos2 = $_POST['servico-secundario-2'];

$recebe_foots2 = $_POST['footenotes2'];

$recebe_servicos3 = $_POST['servico-secundario-3'];

$recebe_foots3 = $_POST['footenotes3'];

$recebe_servicos4 = $_POST['servico-secundario-4'];

$recebe_foots4 = $_POST['footenotes4'];

$recebe_foot = $_POST['footenote'];




$consulta = $conexao->query("SELECT * FROM incmdb WHERE id='$recebe_id'");

$exibe=$consulta->fetch(PDO::FETCH_ASSOC);


	try{
		
	$alterar=$conexao->query("
	
	UPDATE incmdb SET 
	
	`Finferior`='$recebe_Finferior',
	`Fsuperior`='$recebe_Fsuperior',
	`servico-primario-1`='$recebe_servico1',
	`footenote1`='$recebe_foot1',
	`servico-primario-2`='$recebe_servico2',
	`footenote2`='$recebe_foot2',
	`servico-primario-3`='$recebe_servico3',
	`footenote3`='$recebe_foot3',
	`servico-primario-4`='$recebe_servico4',
	`footenote4`='$recebe_foot',
	`servico-primario-5`='$recebe_servico5',
	`footenote5`='$recebe_foot5',
	`servico-primario-6`='$recebe_servico6',
	`footenote6`='$recebe_foot6',
	`servico-secundario-1`='$recebe_servicos1',
	`footenotes1`='$recebe_foots1',
	`servico-secundario-2`='$recebe_servicos2',
	`footenotes2`='$recebe_foots2',
	`servico-secundario-3`='$recebe_servicos3',
	`footenotes3`='$recebe_foots3',
	`servico-secundario-4`='$recebe_servicos4',
	`footenotes4`='$recebe_foots4',
	`footenote`='$recebe_foot'
	
	WHERE `id`='$recebe_id';
	
	");
	
	header('location:sucesso.php');
	
	}catch(PDOException $e){
		
		echo $e->getMessage();
	}
	


?>