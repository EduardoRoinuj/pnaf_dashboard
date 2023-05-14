<nav class="navbar navbar-expand-lg navbar-light bg-light" style="font-size: 14px;">
  <a class="navbar-brand" href="https://www.incm.gov.mz/index.php"><img src="img/logo-incm.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Página inicial</a>
      </li>
		
      <li class="nav-item">
        <a class="nav-link" href="listaServicos.php">Ver serviços cadastrados</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Mais
        </a>
		  
                  <ul class="dropdown-menu">
            <li><a href="listaServicos.php">Ver serviços cadastrados</a></li>
            <li role="separator" class="divider"></li>
			  
			  <?php
		  
		  if (empty($_SESSION['id'])){
		  
		  ?>
		  
		  <li><a href="admin.php"><span class="glyphicon glyphicon-log-in"> </span>  Logon</a></li>
		  
		  <?php 
		  
		  } else{
			  
			  if($_SESSION['adm']==0){
			  
		  	$consulta_user=$conexao->query("SELECT nome FROM usuarios WHERE id_user='$_SESSION[id]'");
			$exibe_user=$consulta_user->fetch(PDO::FETCH_ASSOC);
			  
		  ?>
		  
		  <li><a href="#"><span class="glyphicon glyphicon-user"></span><?php echo $exibe_user['nome']; ?></a></li>
		  <li><a href="sair.php"><span class="glyphicon glyphicon-off"></span> Sair</a></li>
		  
		  <?php } else { ?>
				   	<li><a href="administrador.php">Usuário: <button class="btn btn-sm btn-danger">Administrador</button></a></li>
					<li><a href="listaServicos1.php">Catalogar serviços</a></li>					  
		 	 <li><a href="sair.php"><span class="glyphicon glyphicon-off"></span> Sair</a></li>
		  			
		  
		  <?php  } 
		  
		  }?>
			  
          </ul>
      </li>
      
    </ul>
    
  </div>
</nav>