<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        .background{
            background-color: #112588;
        }
    </style>
    <title>Smart Fit | Ínicio</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg background fixed-top shadow-lg" style="display: block;">
        <div class="container">
          <a class="navbar-brand text-white" href="#">Smart Fit</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item pe-2">
                <a class="nav-link text-white" href="/users/login">Login</a>
              </li>
              <li class="nav-item pe-2">
                <a class="nav-link text-white" href="/users/create" >Cadastre-se</a>
              </li>
              <li class="nav-item pe-2">
                <a class="nav-link text-white" href="/planos/create" >Planos</a>
              </li>
              <li class="nav-item pe-2">
                <a class="nav-link text-white" href="/logout" >Sair</a>
              </li>
              <li class="nav-item pe-2">
              <a class="nav-link text-white" href="#" >
              <?php
              if(isset($_SESSION['user']) ){
                   echo $_SESSION['user'];
              }else{
                 echo ''; 
              } 
              ?>
              </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
</body>