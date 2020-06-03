<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap 4-->

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    
        <!--end Bootstrap 4-->

        <!--Arquivos-->
        <link rel="stylesheet" href="style.css" type="style.css">
        <!--End Arquivos-->

    <title>Contato</title>
</head>
<style>
    /*fazer colunas*/
    .linhap{
        display: flex;
    }
    
    /*alinhar os textos*/
    .textcent{
        text-align: center;
    }
    body {
        background: black;
    }
    

</style>
<body>
    <!--MENU-->
    <nav class="navbar-expand-sm bg-dark navbar-dark sticky-top">
        <!--botão menu-->
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" aria-expanded="false">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!--end botão menu-->
        <!--navbar menu-->
        <div class="navbar-collapse justify-content-center collapse" id="collapsibleNavbar">
            <ul class="nav">
                <li class="nav-item"><a class="nav-link navbar-brand" href="index.html">Experiências</a></li>
                <li class="nav-item"><a class="nav-link navbar-brand" href="index.html">Home</a></li>
                <li class="nav-item"><a class="nav-link navbar-brand" href="contact.html">Contato</a></li>
            </ul>
        </div>
        <!--end navbar menu-->
    </nav>
    <!--END MENU-->
    <main role="main">

    <div class="linhap" > <!--criar as colunas vinculadas a class-->
            <div class="col">
                <img style="margin: 5%;" src="img/personagem2.jpg" class="mx-auto d-block img-fluid"
                 alt="personagem"> <!--class: esta deixando a img no centro e responsivel-->
            </div>
            <div class="col text-body" style="background-color: lightgrey; color: blue;">
                <h1>Estamos enviando!</h1>
                <p >
                  <?php
                    // Esta recebendo a variavel
                    $nome = $_GET ["nome"];
                    $email = $_GET ["email"];

                    echo "Agradecemos o seu contato $nome, entre no email: $email e confirme!";
                    
                    ?>
                    </p>
            </div>
        </div> 
        <!--end primeiro conteudo--> 
    </main>
 <!--RODAPE-->
 <footer>
    <div class="linhap" style="background-color:black">
        <div style="color: blanchedalmond;" class="col">
            <p>Contato</p>
            <li>Telefone 1</li>
            <li>Telefone 2</li>
        </div>
        <div class="col" style="color: blanchedalmond;">
            <p>Estrutura do site</p>
            <a href="index.html" style="color: azure;"><li>Home</li></a>
            <a href="contact.html"  style="color: azure;"><li>Contato</li></a>
        </div>

    </div>
</footer>
<!--END RODAPE-->
</body>

<script>

// Redirecionar a pagina home
setTimeout(function() {
    window.location.href = "index.html";
}, 5000);

</script>


</html>


