<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Exercicio 03</title>
	<meta charset="utf-8">
</head>
<body>
	<h1>Exercicio 03</h1>

	<?php
		$i =0;

		while ($i <= 20) {	
			if ($i % 2) {
				echo "<p style=color:red;>$i</p>";				
				$i++;
			}else{				
				echo "<p style=color:blue;>$i</p>";
				$i++;
			}	
			

		}

	?>

</body>
</html>
	 
	


