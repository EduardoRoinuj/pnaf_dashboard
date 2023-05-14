<!doctype html>
<html><head>
<meta charset="utf-8">
<title>PNAF-Página inicial</title>
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
		$(document).ready(function() {
  var table = $('#example').DataTable({
    dom: 'Bfrtip',
    buttons: ['csv', 'excel', 'pdf', 'print'],
    lengthMenu: [[15, 25, 50, -1], [15, 25, 50, 'All']],
    language: {
      search: "Pesquisar global:"
    }
  });

  $('#countrySelect').on('change', function() {
    var country = $(this).val();
    if (country) {
      table.columns(1).search(country).draw();
    } else {
      table.search('').columns().search('').draw();
    }
  });
});

	</script>
	
	
	

	
	<style>
	
	.navbar{
		margin-bottom: 0;
	}
		
	table.inputs td {
    padding: 5px;
	}
		
	
	</style>
		  
</head>

<body style="font-size: 12px">
	
	
	
	<?php 
	
	session_start();
	
	include 'conexao.php';
	
	include 'nav3.php';
	
	include 'cabecalho.html';
	
	
	
	
	$consulta = $conexao->query('SELECT * FROM incmdb');
	$ver = $conexao->query('SELECT * FROM incmdb');
	
	?>
	
	
	
	<div class="row table-bordered" style="margin-left: 50px; margin-top: 55px; margin-bottom: 20px; margin-right: 40px; padding: 10px">
    	<div class="col-lg-4">
		
		<label>Pesquisar o espectro:</label>
		<select class="form-control form-control-sm" id="countrySelect" style="font-size: 12px; width: 55%">
		  <option value="">Selecione a frequência...</option>
				<?php
			while ($mostrar=$consulta->fetch(PDO::FETCH_ASSOC)){

		?>
		  <option value="<?php echo $mostrar['Finferior'];?> - <?php echo $mostrar['Fsuperior'];?>"><?php echo $mostrar['Finferior'];?> - <?php echo $mostrar['Fsuperior'];?>
			</option>
			
			<?php } ?>
		  
		</select>
		
		
		</div>
		
    	<div class="col-lg-4"></div>
    	
		<div class="col-lg-4" style="text-align: right; padding-right: 60px; ">
			<div class="btn-group-justified">
				<h6 style="margin-bottom: 0; padding-top: 15px">.</h6>
				<a href="grafico2.php">
					<button type="button" class="btn btn-md btn-secondary">
						<span class="glyphicon glyphicon-eye-open"></span> 
						Ver o gráfico do PNAF
					</button>
				</a>
			</div>
		</div>
	</div>
	
	
	<div class="table-responsive ">
		<div class="col-sm-12 col-sm-offset-0.5">
		
		<table id="example" class="display table table-bordered">


		<caption>Optional table caption.</caption>
		<thead>
			<tr  class="bg-secondary">
				<th></th>
				<th>Frequência</th>
				<th>Alocação</th>
				<th>Comentários</th>
			</tr>
		</thead>
		<tbody>
			<?php
			while ($exibir=$ver->fetch(PDO::FETCH_ASSOC)){

			?>
			<tr>
				<th scope="row"><?php echo $exibir['id'];?></th>
					
					<td style="text-align: center; width: 10%">
						<?php echo $exibir['Finferior'];?> - <?php echo $exibir['Fsuperior'];?>
					</td>
				<td>
					<p ><?php echo $exibir['servico-primario-1']?></p>
					<p ><?php echo $exibir['servico-primario-2']?></p>
					<p ><?php echo $exibir['servico-primario-3']?></p>
					<p ><?php echo $exibir['servico-primario-4']?></p>
					<p ><?php echo $exibir['servico-primario-5']?></p>
					<p ><?php echo $exibir['servico-primario-6']?></p>
					<p ><?php echo $exibir['servico-secundario-1']?></p>
					<p ><?php echo $exibir['servico-secundario-2']?></p>
					<p ><?php echo $exibir['servico-secundario-3']?></p>
					<p ><?php echo $exibir['servico-secundario-4']?></p>
				</td>
				<td class="text-justify">
					<p><?php echo $exibir['footenote1'];?></p>
					<p><?php echo $exibir['footenote2'];?></p>
					<p><?php echo $exibir['footenote3'];?></p>
					<p><?php echo $exibir['footenote4'];?></p>
					<p><?php echo $exibir['footenote5'];?></p>
					<p><?php echo $exibir['footenote6'];?></p>
					<p><?php echo $exibir['footenotes1'];?></p>
					<p><?php echo $exibir['footenotes2'];?></p>
					<p><?php echo $exibir['footenotes3'];?></p>
					<p><?php echo $exibir['footenotes4'];?></p>
					<p><?php echo $exibir['footenote'];?></p>
				</td>
			</tr>


			<?php 

			}

			?>

		</tbody>
	</table>
	</div>		
</div>
	<?php
	include 'rodape.html';
	
	?>
	
	
	
</body>
</html>





