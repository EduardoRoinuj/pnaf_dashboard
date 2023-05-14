<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
	<meta name="viewport" content="width=device-width, intial-scale=1">
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<link rel="slylesheet" href="css/all.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/all.js"></script>
	<script src="js/bootsrap.min.js"></script>

	<style>
	
		.navbar{
			margin-bottom: 0;
}
		
	</style>
</head>

<body>
	
	
	<?php 
	
	session_start();
	
	include 'conexao.php';
	include 'nav.php';
	
	include 'cabecalho.html';
	
	
	
	
	//$consulta = $conexao->query('SELECT * FROM servicos');
	
	?>
	
	<div class="container-fluid">
	<div class="container">
	
		<div class="col-sm-12 col-sm-offset-0">
			
			<?php
			
			
		$dado=$_GET['id'];
			  
		$pesquisa=$conexao->query("SELECT * FROM incmbase WHERE id='$dado'");
		
		//$exibir=$consulta->fetch(PDO::FETCH_ASSOC);
			
			$exibir=$pesquisa->fetch(PDO::FETCH_ASSOC);
			?>
	
			  		<h1>Serviços</h1>
					<ul class="list-group list-group-flush">
					  <p>ID: <?php echo $exibir['id'];?></li>
					  <p>Frequência inferior: <?php echo $exibir['Finferior'];?></p>
					  <p>Frequência superior: <?php echo $exibir['Fsuperior'];?></p>
					  <p>Serviço Primário 1: <?php echo $exibir['servico-primario-1'];?></p>
					  <p>Footnote Primário 1: <?php echo $exibir['footenote1'];?></p>
					  <p>Serviço Primário 2: <?php echo $exibir['servico-primario-2'];?></p>
					  <p>Footnote Primário 2: <?php echo $exibir['footenote2'];?></p>
					  <p>Serviço Primário 3: <?php echo $exibir['servico-primario-3'];?></p>
					  <p>Footnote Primário 3: <?php echo $exibir['footenote3'];?></p>
					  <p>Serviço Primário 4: <?php echo $exibir['servico-primario-4'];?></p>
					  <p>Footnote Primário 4: <?php echo $exibir['footenote4'];?></p>
					  <p>Serviço Primário 5: <?php echo $exibir['servico-primario-5'];?></p>
					  <p>Footnote Primário 5: <?php echo $exibir['footenote5'];?></p>
					  <p>Serviço Primário 6: <?php echo $exibir['servico-primario-6'];?></p>
					  <p>Footnote Primário 6: <?php echo $exibir['footenote6'];?></p>
					  <p>Serviço Secundário 1: <?php echo $exibir['servico-secundario-1'];?></p>
					  <p>Footnote Secundário 1: <?php echo $exibir['footenotes1'];?></p>
					  <p>Serviço Secundário 2: <?php echo $exibir['servico-secundario-2'];?></p>
					  <p>Footnote Secundário 2: <?php echo $exibir['footenotes2'];?></p>
					  <p>Serviço Secundário 3: <?php echo $exibir['servico-secundario-3'];?></p>
					  <p>Footnote Secundário 3:<?php echo $exibir['footenotes3'];?></p>
					  <p>Serviço Secundário 4: <?php echo $exibir['servico-secundario-4'];?></p>
					  <p>Footnote Secundário 4: <?php echo $exibir['footenotes4'];?></p>
					  <p>Footnote: <?php echo $exibir['footenote'];?></p>		
					</ul>
			
		</div>
		
		<div>
			<a class="btn btn-primary col-sm-12 col-sm-offset-0" href="dados.php" role="button">Voltar</a>
		</div>
	</div>
	</div>
	
</body>
</html>