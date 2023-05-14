<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Gráfico do PNAF</title>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	
	
	
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

	
	
	
	
	
	

<body>
	
	<?php 
	session_start();
	include 'conexao.php';
	include 'nav3.php';
	?>
	
	<div class="container-fluid">
		<div class="row">
			<nav class="col-md-2 d-none d-md-block bg-light sidebar">
				<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
					<h4 style="margin-bottom: 3px; padding-top: 40px">Legenda</h4>
					<div class="btn-toolbar mb-2 mb-md-0">
						
						
						
						
						
						
					</div>
				</div>
				<div class="container-fluid" style="t">
				
				
					<div class="row" style="overflow: auto">
						<div class="col-lg-6">
							<ul class="list-group">
								<li class="list-group-item" style="background-color: #DDEBF7; width: 20px"></li><p style="font-size: 9px">AUXILARES DE METERIOLOGIA</p>
								<li class="list-group-item" style="background-color: #C9A4E4; width: 20px"></li><p style="font-size: 9px">EXPLORAÇÃO DA TERRA POR SATÉLITE (ACTIVO)</p>
								<li class="list-group-item"  style="background-color: #9C96EE; width: 20px"></li><p style="font-size: 9px">EXPLORAÇÃO DA TERRA POR SATÉLITE (ESPAÇO-TERRA)</p>
								<li class="list-group-item" style="background-color: #C8A2C8; width: 20px"></li><p style="font-size: 9px">EXPLORAÇÃO DA TERRA POR SATÉLITE (TERRA-ESPAÇO)</p>
								<li class="list-group-item" style="background-color: #85276A; width: 20px"></li><p style="font-size: 9px">MÓVEL MARÍTIMO</p>
								<li class="list-group-item" style="background-color: #FFD966; width: 20px"></li><p style="font-size: 9px">MÓVEL TERRESTRE</p>
								<li class="list-group-item" style="background-color: #FFCC00; width: 20px"></li><p style="font-size: 9px">MÓVEL TERRESTRE POR SATÉLITE  (TERRA-ESPAÇO)</p>
								<li class="list-group-item" style="background-color: #FFCC00; width: 20px"></li><p style="font-size: 9px">MÓVEL POR SATÉLITE (ESPAÇO-TERRA)</p>
								<li class="list-group-item" style="background-color: white; width: 20px"></li><p style="font-size: 9px">NÃO ATRIBUIDAS</p>
								<li class="list-group-item" style="background-color: #FB5F8F; width: 20px"></li><p style="font-size: 9px">OPERAÇÃO ESPACIAL (ESPAÇO-TERRA) </p>
								<li class="list-group-item" style="background-color: #E44B8D; width: 20px"></li><p style="font-size: 9px">OPERAÇÃO ESPACIAL (TERRA-ESPAÇO) (ESPAÇO-ESPAÇO)</p>
								<li class="list-group-item" style="background-color: #FFB7C0; width: 20px"></li><p style="font-size: 9px">OPERAÇÕES ESPACIAIS (IDENTIFICAÇÃO POR SATÉLITE)</p>
								<li class="list-group-item" style="background-color: #C65911; width: 20px"></li><p style="font-size: 9px">RADIOASTRONOMIA</p>
								<li class="list-group-item" style="background-color: #7030A0; width: 20px"></li><p style="font-size: 9px">RADIOAMADOR</p>
								<li class="list-group-item" style="background-color: #CC00CC; width: 20px"></li><p style="font-size: 9px">RADIOAMADOR POR SATÉLITE</p>
								<li class="list-group-item" style="background-color: #993300; width: 20px"></li><p style="font-size: 9px">RADIODETERMINAÇÃO POR SATÉLITE (ESPAÇO-TERRA)</p>
								<li class="list-group-item" style="background-color: #C00000; width: 20px"></li><p style="font-size: 9px">RADIODIFUSÃO</p>
								<li class="list-group-item" style="background-color: red; width: 20px"></li><p style="font-size: 9px">RADIODIFUSÃO POR SATÉLITE</p>
								<li class="list-group-item" style="background-color: #607796; width: 20px"></li><p style="font-size: 9px">RADIOLOCALIZAÇÃO</p>
								<li class="list-group-item" style="background-color: #CACEE8; width: 20px"></li><p style="font-size: 9px">RADIONAVEGAÇÃO</p>
								<li class="list-group-item" style="background-color: #D7E9F0; width: 20px"></li><p style="font-size: 9px">RADIONAVEGAÇÃO AERONÁUTICA</p>
								<li class="list-group-item" style="background-color: #D9D9D9; width: 20px"></li><p style="font-size: 9px">RADIONAVEGAÇÃO MARÍTIMA (RADIOBALIZA)</p>
								<li class="list-group-item" style="background-color: #BFBFBF; width: 20px"></li><p style="font-size: 9px">RADIONAVEGAÇÃO POR SATÉLITE</p>
							</ul>
						</div>

						<div class="col-lg-6">
							<ul class="list-group">
								<li class="list-group-item" style="background-color: #0D3B02; width: 20px"></li><p style="font-size: 9px">MÓVEL AERONÁUTICO (R)</p>
								<li class="list-group-item" style="background-color: #57FF29; width: 20px"></li><p style="font-size: 9px">MÓVEL EXCEPTO MÓVEL AERONÁUTICO</p>
								<li class="list-group-item" style="background-color: #E2EFDA; width: 20px"></li><p style="font-size: 9px">MÓVEL EXCEPTO MÓVEL AERONÁUTICO (R)</p>
								<li class="list-group-item" style="background-color: #57FF29; width: 20px"></li><p style="font-size: 9px">MÓVEL EXCEPTO MÓVEL AERONÁUTICO (OR)</p>
								<li class="list-group-item" style="background-color: #538235; width: 20px"></li><p style="font-size: 9px">FIXO</p>
								<li class="list-group-item" style="background-color: #27A98D; width: 20px"></li><p style="font-size: 9px">FIXO POR SATÉLITE</p>
								<li class="list-group-item" style="background-color: #FB5F8F; width: 20px"></li><p style="font-size: 9px">FIXO POR SATÉLITE (ESPAÇO-TERRA)</p>
								<li class="list-group-item" style="background-color: #FB5F8F; width: 20px"></li><p style="font-size: 9px">FIXO POR SATÉLITE (ESPAÇO-TERRA) (TERRA-ESPAÇO)</p>
								<li class="list-group-item" style="background-color: #ffcc00; width: 20px"></li><p style="font-size: 9px">FIXO POR SATÉLITE (TERRA-ESPAÇO)</p>
								<li class="list-group-item" style="background-color: #006666; width: 20px"></li><p style="font-size: 9px">FREQUÊNCIA PADRÃO E SINAL HORÁRIO</p>
								<li class="list-group-item" style="background-color: #77545E; width: 20px"></li><p style="font-size: 9px">INTER-SATÉLITE</p>
								<li class="list-group-item" style="background-color: #607796; width: 20px"></li><p style="font-size: 9px">INVESTIGAÇÃO ESPACIAL</p>
								<li class="list-group-item" style="background-color: #607796; width: 20px"></li><p style="font-size: 9px">INVESTIGAÇÃO ESPACIAL (ACTIVO)</p>
								<li class="list-group-item" style="background-color: #607796; width: 20px"></li><p style="font-size: 9px">INVESTIGAÇÃO ESPACIAL (ESPAÇO LONGÍQUO)</p>
								<li class="list-group-item" style="background-color: #607796; width: 20px"></li><p style="font-size: 9px">INVESTIGAÇÃO ESPACIAL (ESPAÇO-TERRA)</p>
								<li class="list-group-item" style="background-color: #607796; width: 20px"></li><p style="font-size: 9px">INVESTIGAÇÃO ESPACIAL (ESPAÇO LONGÍQUO) (TERRA-ESPAÇO)</p>
								<li class="list-group-item" style="background-color: #607796; width: 20px"></li><p style="font-size: 9px">INVESTIGAÇÃO ESPACIAL (TERRA-ESPAÇO)</p>
								<li class="list-group-item" style="background-color: #607796; width: 20px"></li><p style="font-size: 9px">INVESTIGAÇÃO ESPACIAL (PASSIVO)</p>
								<li class="list-group-item" style="background-color: #0C4CC0; width: 20px"></li><p style="font-size: 9px">METEOROLOGIA POR SATÉLITE (ESPAÇO-TERRA)</p>
								<li class="list-group-item" style="background-color: #4E40FE; width: 20px"></li><p style="font-size: 9px">METEOROLOGIA POR SATÉLITE (TERRA-ESPAÇO)</p>
								<li class="list-group-item" style="background-color: #385723; width: 20px"></li><p style="font-size: 9px">MÓVEL</p>
								<li class="list-group-item" style="background-color: #538235; width: 20px"></li><p style="font-size: 9px">MÓVEL AERONÁUTICO</p>
								<li class="list-group-item" style="background-color: #a8A400; width: 20px"></li><p style="font-size: 9px">MÓVEL AERONÁUTICO (OR)</p>
							</ul>
						</div>
					</div>
							
					
					
					
					
					
				
				</div>
			</nav>

			<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
				<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
					<h1 class="h2">Gráfico do Plano Nacional de Atribuição de Frequência (PNAF)</h1>
					<div class="btn-toolbar mb-2 mb-md-0">
						<div class="btn-group mr-2">
							<a href="listaServicos.php"><button class="btn btn-sm btn-outline-secondary">Lista de serviços</button></a>
							
							<a href="sources/Chart.pdf" download>
								<button class="btn btn-sm btn-outline-secondary">
									<span class="glyphicon glyphicon-save">
										Baixar
									</span>
								</button>
							</a>
							
						</div>				
					</div>
				</div>

				<div class="container-fluid">
					<div class="media" style="text-align: center">
						<button type="button" class="btn btn-primary mr-2" onclick="zoomIn()"><span class="glyphicon glyphicon-zoom-in"></span> Zoom In</button>
						<button type="button" class="btn btn-primary mr-2" onclick="zoomOut()"><span class="glyphicon glyphicon-zoom-out"></span> Zoom Out</button>
						<button type="button" class="btn btn-primary" onclick="resetZoom()"><span class="glyphicon glyphicon-resize-small"></span>Reset</button>

						<div style="overflow: auto;">
						  <div id="imagem-container" style="position: relative; width: 100%; height: 920px;">
							<img id="imagem" src="img/11.jpg" style="position: absolute; top: 0; left: 0; width: 100%;">
						  </div>
						</div>
					</div>
				</div>
			</main>
		</div>
	</div>
	

	<script>
		 var imagemContainer = document.getElementById("imagem-container");
  var imagem = document.getElementById("imagem");
  var originalWidth = imagem.clientWidth;

  function zoomIn() {
    var novaLargura = imagem.clientWidth * 1.1;
    imagem.style.width = novaLargura + "px";
  }

  function zoomOut() {
    var novaLargura = imagem.clientWidth * 0.9;
    imagem.style.width = novaLargura + "px";
  }

  function resetZoom() {
    imagem.style.width = originalWidth + "px";
  }

  function moveLeft() {
    var offset = imagemContainer.scrollLeft - 10;
    imagemContainer.scrollTo(offset, 0);
  }

  function moveRight() {
    var offset = imagemContainer.scrollLeft + 10;
    imagemContainer.scrollTo(offset, 0);
  }

  function moveUp() {
    var offset = imagemContainer.scrollTop - 10;
    imagemContainer.scrollTo(0, offset);
  }

  function moveDown() {
    var offset = imagemContainer.scrollTop + 10;
    imagemContainer.scrollTo(0, offset);
  }
	</script>
</body>
</html>
