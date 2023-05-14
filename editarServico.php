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
	
	

<body>
	
<?php
	
	include 'conexao.php';	
	include 'nav3.php';
	include 'cabecalho.html';
	
	?>
	
	
	<?php
			
			
		$id = $_GET['id'];
			  
		$pesquisa=$conexao->query("SELECT * FROM servicos WHERE id='$id'");
		
		
			
			$mostrar=$pesquisa->fetch(PDO::FETCH_ASSOC);
			?>
	
	
	
	<div class="container-fluid">
	
		<div class="row">
		
			<div class="col-sm-4 col-sm-offset-4">
				
				<h2>Editar serviço <?php echo $mostrar['id'];?></h2>
				
			<form method="POST" action="editserv.php" name="servicos">
				
					<div class="form-group">
				
						<label for="servico-primario">Serviço primário</label>
						<input name="servico-primario" style="text-transform: uppercase" type="text" class="form-control" required id="servico-primario" value="<?php echo $mostrar['servico-primario'];?>">
					</div>
				
				<div class="form-group">
				
						<label for="servico-secundario">Serviço Secundário</label>
						<input name="servico-secundario"  type="text" class="form-control" required id="servico-secundario" value="<?php echo $mostrar['servico-secundario'];?>">
				</div>
				
					<input type="hidden" name="id" value="<?php echo $mostrar['id']; ?>">
					
							
				<button type="submit" name="servicos" class="btn btn-block btn-secondary">
					
					<span class="glyphicon glyphicon-pencil"> Cadastrar</span>
					
				</button>
				
							
				</form>
				
				<div class="col-sm-4 col-sm-offset-4" style="padding-top: 8px;">
					<a href="listaServicos1.php"><button class="btn btn-block btn-primary">
					
					<span class="glyphicon glyphicon-menu-left"> Voltar </span>
					
				</button>
				</a>
				
				
				</div>
				
							
			</div>
			
			
		</div>
	</div>
	
	<?php include 'rodape.html' ?>
	
	
	
	
</body>
</html>