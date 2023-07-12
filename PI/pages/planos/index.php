<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!--Pode ter um carrosel com os planos e tals além do forms p a pessoa escolher-->
    <!--Só pode acessar essa pag se tiver cadastrado?-->
    <form action="/planos/store" method="post">
        <label for="plan" class="texto">Plano</label>
        <select name="plan">
        <?php foreach($plans as $plan) { ?>
            <option value=<?= $plan['name'] ?>><?= $plan['name'] ?></option>
        <?php } ?>
        </select> 
        <button>Enviar</button>
    </form>
</body>
</html>