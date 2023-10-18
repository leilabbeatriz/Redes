
<!doctype html>
<html lang="en">

<head>
  <title>Usuário</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>

    <?php
    Import::importComponent('/content/navbar');
    ?>
    <div class="container">

        <div class="row">
          <span class="display-5 border-bottom mb-4">Perfil</span>
        </div>

        <div class="row">
          
          <div class="col">
              <form action="" method="post">

                  <div class="mb-3">
                    <label for="" class="form-label">Firstname</label>
                    <input type="text"
                      class="form-control" readonly name="firstname" id="" value=" <?php $name= Auth::userName(); echo $name['0']; ?>" aria-describedby="helpId" placeholder="">
                    <small id="helpId" class="form-text text-muted">Nome</small>
                  </div>

                  <div class="mb-3">
                    <label for="" class="form-label">Lastname</label>
                    <input type="text"
                      class="form-control" readonly name="lastname" id="" aria-describedby="helpId" placeholder="" value="<?php $name= Auth::userName(); echo $name['1']; ?>">
                    <small id="helpId" class="form-text text-muted">Sobrenome</small>
                  </div>

                  <div class="mb-3">
                    <label for="" class="form-label">Email</label>
                    <input type="text"
                      class="form-control" readonly name="email" id="" value=" <?php echo Auth::userEmail(); ?> " aria-describedby="helpId" placeholder="">
                    <small id="helpId" class="form-text text-muted">Email cadastrado</small>
                  </div>

              </form>
          </div>

      </div>
    </div>


  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>
