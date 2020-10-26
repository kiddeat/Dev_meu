<?php


	$nome  = $_POST["nome"]  ?? NULL;
	$email = $_POST["email"] ?? NULL;	
	$telefone = $_POST["telefone"] ?? NULL;
	$idade = $_POST["idade"] ?? NULL;		



	if(empty ($nome)){
		echo "<script>alert('Digite um nome');history.back();</script>";	
		exit;
	}
	else if(!filter_var ($email,FILTER_VALIDATE_EMAIL)){
		echo "<script>alert('Digite um E-mail válido');history.back();</script>";		
		exit;
	}
	
	echo "<p>Nome: {$nome} <br>E-mail: {$email} <br>Telefone: {$telefone} <br>Idade: {$idade}";

