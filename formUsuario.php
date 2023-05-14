<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cadastro de usuário</title>
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
	
	include 'conexao.php';	
	include 'nav3.php';
	include 'cabecalho.html';
	
	?>
	
	
	<div class="container-fluid">
	
		<div class="row">
		
			<div class="col-sm-4 col-sm-offset-4">
				
				<h2>Cadastro de novo usuário</h2>
				
				<form method="post" action="inserirUsuario.php" name="logon">
				
					<div class="form-group">
				
						<label for="nome">Nome</label>
						<input name="nome" type="text" class="form-control" required id="nome">
					</div>
				
				<div class="form-group">
				
						<label for="sobrenome">Sobrenome</label>
						<input name="sobrenome" type="text" class="form-control" required id="sobrenome">
				</div>
					
					
				<div class="form-group">
				
						<label for="email">E-mail</label>
						<input name="email" type="email" class="form-control" required id="email">
				</div>
					
				
				<div class="form-group">
				
						<label for="senha">Senha</label>
						<input name="senha" type="password" class="form-control" required id="senha">
				</div>
				
							
				<button type="submit" class="btn btn-lg btn-default">
					
					<span class="glyphicon glyphicon-pencil"> Cadastrar</span>
					
				</button>
				
				</form>
							
			</div>
		</div>
	</div>
	
	<?php include 'rodape.html' ?>
	
	
	
	
</body>
</html>