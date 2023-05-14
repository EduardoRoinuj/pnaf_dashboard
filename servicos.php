<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cadastro de usuário</title>
	
<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
		<!-- Offline -->
		<!-- bootstrap - link cdn -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

		<!-- jquery -->
		<script src="jquery-3.5.1.slim.js"></script>
		
	
	<script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/datatables.min.js"></script>
    <script src="js/pdfmake.min.js"></script>
    <script src="js/vfs_fonts.js"></script>
	
	

	
	
	
	<link rel="slylesheet" href="css/all.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="css/jquery.dataTables.min.css">
	
<style>

.navbar{
	margin-bottom: 0;
}
	
	
	
</style>
	

	
</head>
	
	

<body style="font-size: 14px;">
	
<?php
	
	include 'conexao.php';	
	include 'nav3.php';
	include 'cabecalho.html';
	
	?>
	
	
	<div class="container-fluid">
	
		<div class="row">
		
			<div class="col-sm-4 col-sm-offset-4">
				
				<h2 style="text-align: center">Cadastro de novo serviço</h2>
				
			<form method="post" action="enviaServico.php" name="servicos">
				
					<div class="form-group">
				
						<label for="servico-primario">Serviço Primário</label>
						<input style="text-transform: uppercase" name="servico-primario" type="text" class="form-control" required id="servico-primario">
					</div>
				
				<div class="form-group">
				
						<label for="servico-secundario">Serviço Secundário</label>
						<input name="servico-secundario" type="text" class="form-control" required id="servico-secundario">
				</div>
					
							
				<button type="submit" class="btn btn-secondary btn-block btn-md">
					
					<span class="glyphicon glyphicon-pencil"> Cadastrar</span>
					
				</button>
				
				</form>
							
			</div>
		</div>
	</div>
	<footer>
	
	<?php include 'rodape.html' ?>
		
	</footer>
	
	
	
</body>
</html>