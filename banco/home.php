<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link href="../../style/planoalunos.css" rel="stylesheet">
  <link href="../../style/global.css" rel="stylesheet">
  <title>Gym Fit | Ínicio</title>
</head>

<body>
  <?php
  include __DIR__ .  "../../templates/nav.php";
  ?>
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
  </div>
  <div class="container-fluid pt-4" style="background-color: rgb(6, 6, 167)">
    <div class="container py-5" id="projects">
      <div class="row">
        <div class="col">
          <h2 class='text-white'>Conheça nossos planos</h2>
          <hr class="bg-light border">
        </div>
      </div>
      <div class="row d-flex justify-content-center align-items-center">
        <div class=" col-6 col-md-4 my-3">
          <div class="card shadow-lg ">
            <img src="../../images/1.png" class="card-img-top" alt="">
          </div>
        </div>
        <div class="col-6 col-md-4 my-3">
          <div class="card shadow-lg ">
            <img src="../../images/2.png" class="card-img-top" alt="">
          </div>
        </div>
        <div class="col-6 col-md-4 my-3">
          <div class="card shadow-lg ">
            <img src="../../images/3.png" class="card-img-top" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>