<!doctype html>
<html lang="pt">
<html>
<head>
<meta charset="utf-8">
<title>Lista de serviços do PNAF</title>
	
	<meta name="viewport" content="width=device-width, intial-scale=1">
	
	
	
	
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
		<script src="js/jquery-3.5.1.slim.js"></script>
		
	
	<script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/datatables.min.js"></script>
    <script src="js/pdfmake.min.js"></script>
    <script src="js/vfs_fonts.js"></script>
	
	

	
	
	
	<link rel="slylesheet" href="css/all.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="css/jquery.dataTables.min.css">
	
	<script>
		$(document).ready(function () {
    $('#example').DataTable({dom: 'Bfrtip',
        buttons: [
            'csv', 'excel', 'pdf', 'print'
        ],
			lengthMenu: [
            [15, 25, 50, -1],
            [15, 25, 50, 'All'],
        ],				});
			
		});
	</script>
	
	<style>
	
		.navbar{
			margin-bottom: 0;
}
		
	</style>
	
	
</head>

<body style="font-size: 14px;">
	
	<?php 
	
	session_start();
	
	include 'conexao.php';
	include 'nav3.php';
	
	include 'cabecalho.html';
	
	
	
	
	$consulta = $conexao->query('SELECT * FROM servicos');
	
	?>
	
	
<div class="container-fluid">
	
	<div class="container">
	
		<div class="col-sm-12 col-sm-offset-0">	
			   <caption><h2>Serviços</h2></caption>
		</div>
		<table class="table table-hover" id="example">
 
    <thead>
        <tr>
            <th></th>
            <th>Serviço primário</th>
            <th>Serviço Secundário</th>
			
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