<?php
	
	$frutas = array("banana","abacate","abacaxi","uva","jabuticaba","lichia","manga","pequi","melancia","pistache","pitomba","jamelão","graviola");


	echo "<h3>Item do Array</h3><br>$frutas[3]";

	echo "<hr>";

	echo "<h3>Organização do Arrey</h3>";

	sort($frutas);
	foreach ($frutas as $f) {
		echo "<p>Fruta: {$f}</p>";
	}

	echo "<hr>";
	echo "<h3>Total de itens do Arrey</h3>";

	$total = count($frutas);
	echo "Total: ". $total;
