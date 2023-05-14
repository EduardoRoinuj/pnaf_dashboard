<!doctype html>
<html lang="pt">
<html>
<head>
<meta charset="utf-8">
<title>Página de edição da lista de serviços do PNAF</title>
	<meta name="viewport" content="width=device-width, intial-scale=1">
	
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	
	
	<!-- rrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr -->	
	
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
	
	<!-- rrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr -->	
	
	
	
	
	<link rel="slylesheet" href="css/all.min.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
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
	
	session_start();
	
	include 'conexao.php';
	include 'nav3.php';
	
	include 'cabecalho.html';
	
	
	
	
	$consulta = $conexao->query('SELECT * FROM servicos');
	
	?>
	
	
<div class="container-fluid">
	<div class="container">
		<h2>Serviços</h2>
	
		<div class="col-sm-12 col-sm-offset-0">
			<a href="servicos.php">
				<button  style="margin-top: 20px" type="button" class="btn btn-block btn-primary">

						Registrar Serviço

				</button>
			</a>	
			
		</div>
		<table class="table table-hover">
    
    <thead>
        <tr>
            <th></th>
            <th>Serviço primário</th>
            <th>Serviço Secundário</th>
			<th style="text-align: center">Acção</th>
        </tr>
    </thead>
    <tbody>
		<?php
		while ($exibir=$consulta->fetch(PDO::FETCH_ASSOC)){
			
	?>
        <tr>
            <th scope="row"><?php echo $exibir['id'];?></th>
            <td style="text-transform: uppercase"><?php echo $exibir['servico-primario'];?></td>
            <td> <?php echo $exibir['servico-secundario'];?></td>
			<td style="text-align: center">
				
				<a href="editarServico.php?id=<?php echo $exibir['id'];?>"><button type="button" style="margin-left: 10px" href="#" class="btn btn-light glyphicon glyphicon-pencil"> Editar </button></a>
				
			</td>	
		
			</td>
						
			
			
        </tr>
		<?php 
		
		}
		
		?>
       
    </tbody>
</table>
		
		
		
	</div>
	
</div>
	<div>
	<?php
	
	
	include 'rodape.html';
	
	?>
	</div>
</body>
</html>