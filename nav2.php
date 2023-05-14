<div class="collapse" id="navbarToggleExternalContent">
  <div class="bg-secondary p-4">
    <h5 class="text-white h4">Opções</h5>
    <span class="text-muted">INCM</span>
	  <?php
		  
		  if (empty($_SESSION['id'])){
		  
		  ?>
		  
		  <li style="margin-bottom: 5px"><a href="admin.php"><button class="btn btn-sm btn-danger">Menu Administrativo</button></a></li>
		  
		  <?php 
		  
		  } else{
			  
			  if($_SESSION['adm']==0){
			  
		  	$consulta_user=$conexao->query("SELECT nome FROM usuarios WHERE id_user='$_SESSION[id]'");
			$exibe_user=$consulta_user->fetch(PDO::FETCH_ASSOC);
			  
		  ?>
		  
		  <li><a href="#"><span class="glyphicon glyphicon-user"></span><?php echo $exibe_user['nome']; ?></a></li>
		  <li><a href="sair.php"><span class="glyphicon glyphicon-off"></span> Sair</a></li>
		  
		  <?php } else { ?>
	  			 <li style="margin-bottom: 5px"><a href="administrador.php"> <button class="btn btn-sm btn-success">Menu Administrador</button></a></li>
		 	 <li style="margin-bottom: 5px"><a href="sair.php"><button class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-off"></span> Sair</button></a></li>
		  			
		  
		  <?php  } 
		  
		  }?>
	  <li style="margin-bottom: 5px"><a href="pagina.php"><button class="btn btn-sm btn-info">Home</button></a></li>
  </div>
</div>
<nav class="navbar navbar-dark bg-secondary">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon "></span>
    </button>
  </div>
</nav>