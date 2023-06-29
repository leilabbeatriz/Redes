<?php

if(isset($_SESSION['user']) === false){
    header ("location: /cadastro");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
    <title>Smart Fit | Login</title>
</head>
<body>
<style>
        .background{
            background-color: #112588;
        }
    </style>
<nav class="navbar navbar-expand-lg background fixed-top shadow-lg" style="display: block;">
          <div class="container">
            <a class="navbar-brand text-white" href="#">Smart Fit</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item pe-2">
                  <a class="nav-link text-white" href="/login">Login</a>
                </li>
                <li class="nav-item pe-2">
                  <a class="nav-link text-white" href="/cadastro" >Cadastre-se</a>
                </li>
                <li class="nav-item pe-2">
                  <a class="nav-link text-white" href="/logout" >Sair</a>
                </li>
                <li class="nav-item pe-2">
                  <a class="nav-link text-white" href="#" >
                    <?php echo $_SESSION['user'];?>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
    <div class="form-box">
        <div class="left-text">
            <h1 class="left-word">
            "Vá além dos seus limites, crie um novo padrão."
            </h1>
        </div>
        <form action="/storeLogin" method="post">
            <h3>Usuário</h3>
            <input type="text" name="user">
            <h3>Senha</h3>
            <input type="password" name="password">
            <button class="mb-3" href="">Enviar</button>
            <h5>Não tem uma conta? <a href="/cadastro"><u>Cadastre-se</u></a></h5>
        </form>
    </div>
</body>
</html>