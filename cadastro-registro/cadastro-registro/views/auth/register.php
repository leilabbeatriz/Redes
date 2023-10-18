<!doctype html>
<html lang="en">

<head>
    <title>Register</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <?php
        include_once __DIR__.'/../pieces/welcome/header.php';
    ?>

    <div class="text-center">
        <span class="display-3 border-bottom">Registrar</span>
    </div>

    <main>
        <div class="container">
            <div class="row">
                <div class="col">
                    <form action="/registrar" method="POST">
                        <div class="mb-3">
                            <label for="" class="form-label">Email</label>
                            <input type="email" class="form-control" required name="email" id="" aria-describedby="helpId" placeholder="">
                            <small id="helpId" class="form-text text-muted">Entre com o email</small>
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Nome</label>
                            <input type="text" class="form-control" required name="firstname" id="" aria-describedby="helpId" placeholder="">
                            <small id="helpId" class="form-text text-muted">Entre com o nome</small>
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Sobrenome</label>
                            <input type="text" class="form-control" required name="lastname" id="" aria-describedby="helpId" placeholder="">
                            <small id="helpId" class="form-text text-muted">Entre com o sobrenome</small>
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Senha</label>
                            <input type="password" class="form-control" name="password" required id="" aria-describedby="helpId" placeholder="">
                            <small id="helpId" class="form-text text-muted">Entre com a senha</small>
                        </div>

                        <div class="text-center">
                        </div>
                        
                        <button class="btn btn-outline-primary">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>

    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>