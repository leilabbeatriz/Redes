<?php
if (!hasUser()) {

    header ('Location: /');

} else {


    $p = new Planos(connection());
    $plans = $p->save();
    $plans = $p->allPlans();
    //incluir página
    include __DIR__ . '/../../pages/planos/index.php';        

} 
?>