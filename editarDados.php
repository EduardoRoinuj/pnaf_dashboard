<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Formulário de Alteração de Serviço</title>
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
		
		
		.principal{
			padding: 40px 15px;
			text-align: center;
		}
		
		
	</style>
</head>

<body>
	
	
	<?php 
	
	session_start();
	
	include 'conexao.php';
	include 'nav3.php';

	
		
	//$consulta = $conexao->query('SELECT * FROM servicos');
	
	?>
	
	
	<?php
			
			
		$id = $_GET['id'];
			  
		$pesquisa=$conexao->query("SELECT * FROM incmdb WHERE id='$id'");
		
		
			
			$mostrar=$pesquisa->fetch(PDO::FETCH_ASSOC);
			?>
	
	
	<div class="container-fluid" >
		<div class="principal" >
			
			
			<h1>Formulário de Alteração de Serviço</h1>
			<h3>Serviço número: <?php echo $mostrar['id'];?></h3>
			<form method="POST" action="enviarEdicao.php"  name="edicao">
				<table class="table ">
					<tr  class="alert-danger" role="alert">
						<td>Range:</td>
						<td>Frequência Superior: <input class="form-control" type="text" name="Finferior" value="<?php echo $mostrar['Finferior'];?>"></td>
						<td>Frequência Superior: <input class="form-control" type="text" name="Fsuperior" value="<?php echo $mostrar['Fsuperior'];?>"></td>
					</tr>
					<tr>
						<td>Seriviço</td>
						<td>
							Seriviço Primário 1: <input class="form-control"  type="text" name="servico-primario1" value="<?php echo $mostrar['servico-primario-1']?>">
						</td>
						<td>
							Footnote Primário 1:							
          					<textarea class="form-control" name="footenote1" rows="4"><?php echo $mostrar['footenote1'];?></textarea>
						</td>
					</tr>
					<tr >
						<td>Seriviço</td>
						<td>
							Seriviço Primário 2: <input class="form-control" type="text" name="servico-primario2" value="<?php echo $mostrar['servico-primario-2']?>">
						</td>
						<td>
							
							Footnote Primário 2:							
          					<textarea class="form-control" name="footenote2" rows="4"><?php echo $mostrar['footenote2'];?></textarea>
						</td>
					</tr>
					<tr>
						<td>Seriviço</td>
						<td>
							Seriviço Primário 3: <input class="form-control"  type="text" name="servico-primario3" value="<?php echo $mostrar['servico-primario-3']?>">
						</td>
						<td>
							
							Footnote Primário 3:							
          					<textarea class="form-control" name="footenote3" rows="4"><?php echo $mostrar['footenote3'];?></textarea>
						</td>
					</tr>
					<tr>
						<td>Seriviço</td>
						<td>
							Seriviço Primário 4: <input class="form-control" type="text" name="servico-primario4" value="<?php echo $mostrar['servico-primario-4']?>">
						</td>
						<td>
							Footnote Primário 4:							
          					<textarea class="form-control" name="footenote4" rows="5"><?php echo $mostrar['footenote4'];?></textarea>
						</td>
						
					</tr>
					<tr>
						<td>Seriviço</td>
						<td>
							Seriviço Primário 5: <input class="form-control" type="text" name="servico-primario5" value="<?php echo $mostrar['servico-primario-5']?>">
						</td>
						<td>
							
							Footnote Primário 5:							
          					<textarea class="form-control" name="footenote5" rows="4"><?php echo $mostrar['footenote5'];?></textarea>
						</td>
					</tr>
					<tr>
						<td>Seriviço</td>
						<td>
							Seriviço Primário 6: <input class="form-control" type="text" name="servico-primario6" value="<?php echo $mostrar['servico-primario-6']?>">
						</td>
						<td>
							Footnote Primário 6:							
          					<textarea class="form-control" name="footenote6" rows="5"><?php echo $mostrar['footenote6'];?></textarea>
						</td>
					</tr>
					<tr>
						<td>Seriviço</td>
						<td>
							Seriviço Secundário 1: <input class="form-control" type="text" name="servico-secundario-1" value="<?php echo $mostrar['servico-secundario-1']?>">
						</td>
						<td>
							Footnote Secundário 1:							
          					<textarea class="form-control" name="footenotes1" rows="4"><?php echo $mostrar['footenotes1'];?></textarea>
						</td>
					</tr>
					<tr>
						<td>Seriviço</td>
						<td>
							Seriviço Secundário 2: <input class="form-control" type="text" name="servico-secundario-2" value="<?php echo $mostrar['servico-secundario-2']?>">
						</td>
						<td>
							
							Footnote Secundário 2:							
          					<textarea class="form-control" name="footenotes2" rows="4"><?php echo $mostrar['footenotes2'];?></textarea>
						</td>
					</tr>
					<tr>
						<td>Seriviço</td>
						<td>
							Seriviço Secundário 3: <input class="form-control" type="text" name="servico-secundario-3" value="<?php echo $mostrar['servico-secundario-3']?>">
						</td>
						<td>
							
							Footnote Secundário 3:							
          					<textarea class="form-control" name="footenotes3" rows="4"><?php echo $mostrar['footenotes3'];?></textarea>
						</td>
					</tr>
					<tr>
						<td>Seriviço</td>
						<td>
							Seriviço Secundário 4: <input class="form-control" type="text" name="servico-secundario-4" value="<?php echo $mostrar['servico-secundario-4']?>">
						</td>
						<td>
							
							Footnote Secundário 4:							
          					<textarea class="form-control" name="footenotes4" rows="4"><?php echo $mostrar['footenotes4'];?></textarea>
						</td>
					</tr>
					</table>
					<div class="table">
						<tr>
							<td>Footnote Geral:</td>
							<td>
								<textarea rows="6" class="form-control" type="text" name="footenote" rows="6"><?php echo $mostrar['footenote'];?></textarea>
							</td>
						</tr>
					</div>
					<input type="hidden" name="id" value="<?php echo $mostrar['id']; ?>">
					<div>
							<button class="btn btn-primary col-sm-12 col-sm-offset-0" type="submit" name="edicao">Alterar</button>
					</div>
				
					<div style="padding-top: 45px; padding-bottom: 50px">
						<a href="administrador.php">
							<button class="btn btn-secondary col-sm-12 col-sm-offset-0">
								<span class="glyphicon glyphicon-menu-left">
									Voltar
								</span>
							</button>
						</a>
					</div>
				
						
					
					

			
			
			
			
			
			
		
			</form>
		</div>
	</div>
	
	
</body>
</html>