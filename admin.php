<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Logon do usuário</title>
	
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

<body >

<?php
	
	include 'conexao.php';	
	include 'nav3.php';
	//include 'cabecalho.html';
	
	?>
	
	
	<div class="container-fluid">
	
		<div class="row" style="padding-top: 15%">
		
			<div class="col-sm-4 col-sm-offset-4">
				
				<h2>Logon de Usuário</h2>
				
				<form method="post" action="validaUsuario.php" name="logon">
				
					<div class="form-group">
				
						<label for="email">Email</label>
						<input name="email" type="email" class="form-control" required id="email">
					</div>
				
				<div class="form-group">
				
						<label for="senha">Senha</label>
						<input name="senha" type="password" class="form-control" required id="senha">
				</div>
				
							
				<button type="submit" class="btn btn-lg btn-block btn-light">
					
					<span class="glyphicon glyphicon-ok"> Entrar</span>
					
				</button>
				
				</form>
				
				<a href="formUsuario.php">
				<button style="margin-top: 20px" type="button" class="btn btn-primary">
					
					Ainda não sou cadastrado
					
				</button>
				</a>	
				
				<a href="esqueciSenha.php">
				<button style="margin-top: 20px" type="button" class="btn btn-secondary">
					
					Esqueci a minha senha
					
				</button>
				</a>	
							
			</div>
		</div>
	</div>
	
	
	
	
	
	<?php include 'rodape.html' ?>
		
</body>
</html>