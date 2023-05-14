<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
	<meta name="viewport" content="width=device-width, intial-scale=1">
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/zoomooz/2.3.2/zoomooz.min.css">
	
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
    .zoom {
      overflow: scroll;
      cursor: move;
    }

    .zoom img {
      transition: transform .5s ease;
      cursor: move;
      position: absolute;
    }
  </style>

	
		
  <style>
    .zoom {
      overflow: scroll;
      cursor: move;
    }

    .zoom img {
      transition: transform .5s ease;
      cursor: move;
      position: absolute;
    }
  </style>
	
			
<body>
	
	<?php 
	
	session_start();
	
	include 'conexao.php';
	
	include 'nav3.php';
	
	//include 'cabecalho.html';
	
	

	
	?>
	
<div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <img src="img/aaa.jpg" style="width: 105%" dropzone="copy">
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Gráfico</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-secondary">Share</button>
                <button class="btn btn-sm btn-outline-secondary">Export</button>
              </div>
              <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                This week
              </button>
            </div>
          </div>

			
			
  <div class="zoom">
	<div class="container-fluid">
    	<img src="img/11.jpg" id="imagem" style="width: 1700px">
	</div>	
  </div>

  <div class="btn-group">
    <button type="button" class="btn btn-primary" id="zoom-in">Ampliar</button>
	<button type="button" class="btn btn-primary" id="zoom-reset">Zoom padrão</button>
    <button type="button" class="btn btn-primary" id="zoom-out">Reduzir</button>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script>
    $(document).ready(function() {
      var imagem = $('#imagem');
      var zoomInBtn = $('#zoom-in');
      var zoomOutBtn = $('#zoom-out');
	 var zoomResetBtn = $('#zoom-reset');
      var scale = 1;
      var mouseDown = false;
      var mouseX = 0;
      var mouseY = 0;

      zoomInBtn.click(function() {
        scale += 0.1;
        imagem.css('transform', 'scale(' + scale + ')');
      });

      zoomOutBtn.click(function() {
        if (scale > 0.2) {
          scale -= 0.1;
          imagem.css('transform', 'scale(' + scale + ')');
        }
      });
		
		
		
		 zoomResetBtn.click(function() {
        scale = 0.7;
        imagem.css('transform', 'scale(' + scale + ')');
        imagem.css('left', '0');
        imagem.css('top', '0');
      });
		

      imagem.mousedown(function(event) {
        mouseDown = true;
        mouseX = event.pageX - this.offsetLeft;
        mouseY = event.pageY - this.offsetTop;
        imagem.css('cursor', 'grabbing');
      });

      imagem.mousemove(function(event) {
        if (mouseDown) {
          var newMouseX = event.pageX - this.offsetLeft;
          var newMouseY = event.pageY - this.offsetTop;
          var distanceX = newMouseX - mouseX;
          var distanceY = newMouseY - mouseY;
          var left = parseInt(imagem.css('left')) + distanceX;
          var top = parseInt(imagem.css('top')) + distanceY;
          imagem.css('left', left + 'px');
          imagem.css('top', top + 'px');
          mouseX = newMouseX;
          mouseY = newMouseY;
        }
      });

      imagem.mouseup(function(event) {
        mouseDown = false;
        imagem.css('cursor', 'move');
      });

      imagem.mouseout(function(event) {
        mouseDown = false;
        imagem.css('cursor', 'move');
      });
    });
  </script>
			
          
        </main>
      </div>
    </div>

	
	
	
</body>
	
	

	
	
</html>