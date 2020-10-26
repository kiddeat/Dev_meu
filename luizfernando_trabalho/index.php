<?php
    //incluindo o arquivo de conexão
    require "conexao.php";

?>
<html>
<head>
	<title>Trabalho</title>
	<meta charset="utf-8">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css" >
    <link rel="stylesheet" href="./fontawesome/css/brands.css" >
    <link rel="stylesheet" href="./fontawesome/css/fontawesome.css" >
    <link rel="stylesheet" href="./fontawesome/css/solid.css" >
    <link rel="stylesheet" href="css/stilo.css">
    
    

    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@1,500&display=swap" rel="stylesheet">


</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark " style="background-color:#00695c">
        <a class="navbar-brand" href="https://www.linkedin.com/in/luiz-fernando-silva-galv%C3%A3o-93a355148/">
            <div class="circle">
                <img src="imagens/Luiz.jpg" alt="Luiz fernando" id="luizfernando">
            </div>         

        </a>
        <div class="container">
            <h2>Trabalho de Des. Sites Dinâmicos - Prof.: Anderson Burnes</h2>
        </div>
    </nav>
        
    <main >
        <div class="container" id="principal">            
                
                    <?php
                        //selecionando o a tabela e ordenando
                        $sql = "select * from cliente order by nome";

                        $result = mysqli_query($con,$sql);

                        //imprimindo os resultados da consulta
                        while($dados = mysqli_fetch_array($result)){

                            $nome = $dados["nome"];
                            $email = $dados["email"];
                            $idade = $dados["idade"];  
                            //verificando a idade dos cadastros    
                            if($idade<18){
                                echo "<p>{$nome} - {$email} - {$idade} (Menor de idade)</p>";
                            }else{
                                echo"<p>{$nome} - {$email} - {$idade} (Maior de idade)</p>";
                            }
                            
                        }

                    ?>     
                      

        </div>
    </main>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="./jquery/jquery-3.5.1.slim.min.js" ></script>
    <script src="./popper/popper.min.js" ></script>
    <script src="./bootstrap/js/bootstrap.min.js" ></script>
    

</body>
<footer>
    <div class="container">
        <div class="fixed-bottom ">
            <h2>Desenvolvido por: Luiz Fernando Silva Galvão R.A: 11607
                <div class="contatos">    
                    <a href="https://www.instagram.com/luiz0207/">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://www.facebook.com/luizfernando.silvagalvao/">
                        <i class="fab fa-facebook-square"></i>

                    </a>
                    <a href="https://github.com/kiddeat">
                         <i class="fab fa-github-square"></i>
                    </a>
                </div>    
            </h2>

        </div>
    </div>
</footer>

    
</html>