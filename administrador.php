<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PNAF-Página do ADM</title>
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
	
	<!<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
		<script src="js/jquery-3.5.1.js"></script>
		<script src="js/jquery.dataTables.min.js"></script>
		<script src="js/dataTables.bootstrap4.min.js"></script>
		<script src="js/all.js"></script>
		<script src="js/bootsrap.min.js"></script>
	
	
	
	
	
		<link rel="stylesheet" href="css/buttons.dataTables.min.css">
		<script src="js/pdfmake.min.js"></script>
		<script src="js/vfs_fonts.js"></script>
	
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-3.3.1/jszip-2.5.0/dt-1.10.22/b-1.6.4/b-html5-1.6.4/b-print-1.6.4/sc-2.0.1/datatables.min.css"/>
 
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/jq-3.3.1/jszip-2.5.0/dt-1.10.22/b-1.6.4/b-html5-1.6.4/b-print-1.6.4/sc-2.0.1/datatables.min.js"></script>
		
	 <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/datatables.min.js"></script>
    <script src="assets/js/pdfmake.min.js"></script>
    <script src="assets/js/vfs_fonts.js"></script>

	
	<script>
		$(document).ready(function() {
  var table = $('#example').DataTable({
    "language": {
      "search": "Pesquisar global:"
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
	
	//include 'cabecalho.html';
	
	
	
	
	$consulta = $conexao->query('SELECT * FROM incmdb');
	$ver = $conexao->query('SELECT * FROM incmdb');
	
	?>
	
	
	
	
	<div class="row table-bordered" style="margin-left: 50px; margin-top: 55px; margin-right: 40px; padding: 10px">
    	<div class="col-lg-4">
		
		<caption>Pesquisar o espectro:</caption>
		<select class="form-control form-control-sm" id="countrySelect" style="width: 40%">
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
				<h6 style="margin-bottom: 0">.</h6>
				<a href="grafico2.php">
					<button type="button" class="btn btn-sm btn-secondary">
						<span class="glyphicon glyphicon-eye-open"></span> 
						Ver o gráfico do PNAF
					</button>
				</a>
			</div>
		</div>
	</div>
	
	
	
	
	<div class="table-responsive "  style="margin: 25px 25px 25px 25px;">
		<div class="col-sm-12 col-sm-offset-0.5">
		
		<table id="example" class="display table table-bordered">


		<caption>Optional table caption.</caption>
		<thead>
			<tr class="bg-secondary">
				<th></th>
				<th>Frequência</th>
				<th>Alocação</th>
				<th>Comentários</th>
				<th style="width: 8%;text-align: center">Acção</th>
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
				<td>
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
				</td>
				
				<td>
			
				<div class="text-nowrap" style="text-align: center">
					<a  href="editarDados.php?id=<?php echo $exibir['id'];?>"><button type="button" href="#" class="btn btn-light glyphicon glyphicon-pencil"></button></a>
					
					<a><button type="button" style="margin-left: 10px" href="#" class="btn btn-danger glyphicon glyphicon-trash"></button></a>
					
					<a  href="verServico.php?id=<?php echo $exibir['id'];?>"><button type="submit" style="margin-left: 10px"  class="btn btn-light glyphicon glyphicon-eye-open"></button></a>
				</div>
				</td>	
		
			</tr>


			<?php 

			}

			?>

		</tbody>
	</table>
	</div>		
</div>
	
	
	
	
</body>
</html>





