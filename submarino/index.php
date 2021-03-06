<?php
	//incluir o arquivo de conexao com o banco
	require "config/conexao.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>SubSubMarinho</title>
	<meta charset="utf-8">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/all.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/lightbox.min.css">
	<link rel="stylesheet" type="text/css" href="css/sweetalert.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="index.php">
  	<img src="images/logo.png" alt="SubMarino">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="menu">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">
        	Home
    	</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
        	Sobre a Empresa
    	</a>
      </li>
      <?php
      	//sql para selecionar as categorias
      	$sql = "select * from categoria order by categoria";
      	//executar este sql
      	$result = mysqli_query($con, $sql);
      	//recuperar os dados por linha
      	while ( $dados = mysqli_fetch_array( $result ) ){

      		//separr os resultados
      		$id = $dados["id"];
      		$categoria = $dados["categoria"];
      		//echo "<p>{$id} {$categoria}</p>";
      		echo "<li class=\"nav-item\">
		        <a class=\"nav-link\" href=\"#\">
		        	{$categoria}
		    	</a>
		      </li>";

      	}
      ?>
    </ul>
    <form class="form-inline my-2 my-lg-0" name="formBusca" action="index.php">
      <input class="form-control mr-sm-2" type="search" placeholder="Palavra-chave" aria-label="Search" name="busca">
      <button class="btn btn-warning my-2 my-sm-0" type="submit">
      	<i class="fas fa-search"></i>
      </button>
    </form>
  </div>
</nav>
</body>
</html>