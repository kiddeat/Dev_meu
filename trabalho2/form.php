<!DOCTYPE html>
<html>
<head>
	<title>Formulário</title>
	<meta charset="utf-8">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

	<style type="text/css">
		body{
			width: 500px;
			margin-top:80px;
			margin-left: 400px; 
			background: #fce3e3;
		}
		div{
			box-shadow: 1px 1px 3px 3px grey;
			text-align: center;

		}
	</style>

</head>
<body>

	<div class="container" id="Formulario">
		<h1>Formulário</h1>
		<form name="cadastro" method="post" action="ex1.php">
			<label for="nome">Digite o nome:</label>
			<input type="text" name="nome" required size="40" maxlength="50" placeholder="Nome completo" autocomplete="off" autofocus="">
			<br>
			<label for="email">E-mail</label>
			<input type="email" name="email" required size="40" placeholder="E-mail" autocomplete="off">
			<br>
			<label for="telefone">Telefone</label>
			<input type="tel" name="telefone" size="20" maxlength="20" placeholder="Telefone" inputmode="numeric" autocomplete="off">
			<br>
			<label for="idade">Idade</label>
			<input type="number" name="idade" maxlength="3" placeholder="Idade" inputmode="numeric" autocomplete="off">
			<button type="submit" class="btn btn-primary">Enviar</button>
			
		</form>
		
	</div>


	
</body>
</html>






