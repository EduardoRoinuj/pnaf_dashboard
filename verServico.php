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
	include 'nav3.php';
	
	include 'cabecalho.html';
	
	
	
	
	//$consulta = $conexao->query('SELECT * FROM servicos');
	
	?>
	
	<div class="container-fluid">
	<h1 class="text-center">Detalhes do serviço</h1>
		<div class="container">
	
		<div class="col-sm-12 col-sm-offset-0">
			
			<?php
			
			
		$servico=$_GET['id'];
			  
		$pesquisa=$conexao->query("SELECT * FROM incmdb WHERE id='$servico'");
		
		//$exibir=$consulta->fetch(PDO::FETCH_ASSOC);
			
			$mostrar=$pesquisa->fetch(PDO::FETCH_ASSOC);
			?>
	
			  					
			  <div class="row" style="margin-bottom: 25px">
			   <div class="col-lg-1">
				   
				   
				   
				    <label>Grafico</label>
					<a href="grafico2.php"><button type="button" class="btn btn-secondary" >Ver o gráfico do PNAF</button></a>
				   
				   
			   </div>
			</div>

				<table class="table">
					
				<thead>
				<tr>
					<ul class="list-group list-group-flush">
						<h3>Range:</h3>
					  <p> <?php echo $mostrar['Finferior'];?> - <?php echo $mostrar['Fsuperior'];?></p>
					 </ul>
				</tr>
			  </thead>
					
				  <thead>
					<tr>
					  <th scope="col"></th>
					  <th scope="col">Serviço</th>
					  <th scope="col">Comentário</th>
					</tr>
				  </thead>
				  <tbody>
					<tr>
					  <th scope="row"><?php echo $mostrar['id'];?></th>
					  <td>
						<p ><?php echo $mostrar['servico-primario-1']?></p>
						<p ><?php echo $mostrar['servico-primario-2']?></p>
						<p ><?php echo $mostrar['servico-primario-3']?></p>
						<p ><?php echo $mostrar['servico-primario-4']?></p>
						<p ><?php echo $mostrar['servico-primario-5']?></p>
						<p ><?php echo $mostrar['servico-primario-6']?></p>
						<p ><?php echo $mostrar['servico-secundario-1']?></p>
						<p ><?php echo $mostrar['servico-secundario-2']?></p>
						<p ><?php echo $mostrar['servico-secundario-3']?></p>
						<p ><?php echo $mostrar['servico-secundario-4']?></p>	
					  </td>
					  <td class="text-justify ">
						<p><?php echo $mostrar['footenote1'];?></p>
						<p><?php echo $mostrar['footenote2'];?></p>
						<p><?php echo $mostrar['footenote3'];?></p>
						<p><?php echo $mostrar['footenote4'];?></p>
						<p><?php echo $mostrar['footenote5'];?></p>
						<p><?php echo $mostrar['footenote6'];?></p>
						<p><?php echo $mostrar['footenotes1'];?></p>
						<p><?php echo $mostrar['footenotes2'];?></p>
						<p><?php echo $mostrar['footenotes3'];?></p>
						<p><?php echo $mostrar['footenotes4'];?></p>
						<p><?php echo $mostrar['footenote'];?></p>
						  
					  </td>
					  
					</tr>
					
				  </tbody>
				</table>
		</div>
		
		<div style="text-align: center">
			<a class="col-sm-12 col-sm-offset-0" href="administrador.php" role="button">
				<button class="btn btn-secondary btn-sm btn-block"> 
				<span class="glyphicon glyphicon-menu-left">
					Voltar
				</span>
				</button>
			</a>
		</div>
	</div>
	</div>
	
</body>
</html>