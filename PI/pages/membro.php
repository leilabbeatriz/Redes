<?php 
    $planos = new Planos(connection());
    $planos->insert();

    $listarPlanos = $planos->getAllRows();
    $totalPlanos = count($listarPlanos);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="/storeMembros" method="post">
    <label for="name" class="texto">Nome</label>
        <input type="text" name="name">
    <label for="user" class="texto">Idade</label>
        <input type="number" name="idade">
    <label for="email" class="texto">Email</label>
        <input type="text" name="email">
    <label for="peso" class="texto">Peso</label>
        <input type="text" name="peso">
    <label for="altura" class="texto">Altura</label>
        <input type="text" name="altura">
    <label for="plan" class="texto">Plano</label> 
        <select name="plan">
            <!-- Tivemos dificuldade para entender como pegar um valor de outra tabela que seria chave strangeira em outra, 
            porém conseguimos desenvolver um pouco a lógica.
            Não conseguimos fazer para aparecer os planos para o usuário selecionar, o error diz que não tem nada na tabela de planos, 
            but we tried, o que vale é a intenção romes<3, depois ajude a gente a entender como fazer isso :).
            por conta disso que tá aparecendo o erro na pag inicial, pq a variável que é chave estrangeira em membro n ta definida-->
            <?php for($i=0; $i < $totalPlanos ; $i++):  ?>
                <option value="<?= $listarPlanos['id'] ?>"><?= $listarPlanos[$i]->nomePlano ?></option>
            <?php endfor ?>

        </select>
        <button>Enviar</button>
    </form>
</body>
</html>