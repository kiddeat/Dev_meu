<?php
//servidor do banco de dados 

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "banco";

//$con - conexão
$con = mysqli_connect($servidor, $usuario, $senha,$banco) or die("Erro ao conectar ao banco 
de dados. Erro: ".mysqli_connect_erro());
mysqli_set_charset($con,"utf8");