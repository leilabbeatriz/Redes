

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
                  <a class="nav-link text-white" href="/login">Login</a>
                </li>
                <li class="nav-item pe-2">
                  <a class="nav-link text-white" href="/cadastro" >Cadastre-se</a>
                </li>
                <li class="nav-item pe-2">
                  <a class="nav-link text-white" href="/planos" >Planos</a>
                </li>
                <li class="nav-item pe-2">
                  <a class="nav-link text-white" href="/membro" >Seja Membro</a>
                </li>
                <li class="nav-item pe-2">
                  <a class="nav-link text-white" href="/logout" >Sair</a>
                </li>
                <li class="nav-item pe-2">
                 <!-- //para resolver o erro de quando sai do usuario, a logica é que se tiver usuario aparece,
                // se não, não aparece -->
                <?php
                if(isset($_SESSION['user']) ){
                     echo $_SESSION['user'];
                }else{
                   echo ''; 
                } 
                ?>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <div id="apresentation">
            <div class="container">
                <div class="row align-items-center ">
                    <div class="col-md-6">
                        <h1>Smart Fit - Sua melhor opção</h1>
                        <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, optio!</h5>
                    </div>
                    <div class="col-md-6">
                        <img src="images/exercice.webp" alt="" class="w-100">
                    </div>
                </div>
            </div>
        </div>
        <div>
        <?php 
        $m = new Membro(connection());

        var_dump($m->save('leila', 'leila.b', '12.5', '1.2'));
        ?>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>