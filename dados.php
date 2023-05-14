<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
	<meta name="viewport" content="width=device-width, intial-scale=1">
	
	<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
 	<link rel="stylesheet" href="css/jquery.dataTables.min.css">
	<link rel="slylesheet" href="css/all.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
		
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/buttons.dataTables.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	
	<script src="js/all.js"></script>
	<script src="js/bootsrap.min.js"></script>
		  
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="js/jquery-3.5.1.js"></script>
	
	<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	
	
	<script src="js/buttons.print.min.js"></script>
	<script src="js/dataTables.buttons.min.js"></script>
	<script src="js/jszip.min.js"></script>
	<script src="js/pdfmake.min.js"></script>
	<script src="js/vfs_fonts.js"></script>
	<script src="js/buttons.html5.min.js"></script>
	<script src="js/buttons.print.min.js"></script>
	
	

	
<script>
$(document).ready(function () {
    $('#example').DataTable({
		dom: 'lBfrtip', 
        buttons: [
        {
            extend: 'pdf',
            text: 'Save current page',
            exportOptions: {
                modifier: {
                    page: 'current'
                }
            }
        }
    ],
        scrollY: 500,
        scrollX: true,
    });
});
</script>
	
	
	
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
	include 'nav.php';
	
	include 'cabecalho.html';
	
	
	
	
	$consulta = $conexao->query('SELECT * FROM incmdb');
	
	?>
	<div class="table-responsive container-fluid">
	<div class="col-lg col-lg-offset-0.5">	
	
	<table id="example" class="display nowrap table-bordered" >
		 <caption><h2>DataBase</h2></caption>
        <thead>
            <tr class="bg-primary">
                <th></th>
				<th>Frequência inferior</th>
				<th>Frequência superior</th>
				<th>Alocação</th>
				<th>Comentários</th>
			</tr>
        </thead>
        <tbody>
            <?php
		while ($exibir=$consulta->fetch(PDO::FETCH_ASSOC)){
			
	?>
        <tr>
            <th scope="row"><?php echo $exibir['id'];?></th>
            <td><?php echo $exibir['Finferior'];?></td>
            <td><?php echo $exibir['Fsuperior'];?></td>
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