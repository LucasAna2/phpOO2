<?php
    require_once('Triangulo.php');

    $base = $_GET['base'];
    $altura = $_GET['altura'];

    $triangulo1 = new Triangulo($altura, $base);

    $area = $triangulo1->area();
    $triangulo1->imprime();
    echo $area;
?>