<?php

$nome = $_POST["nome"];
$total = $_POST["total"];
$salario = $_POST["salario"];

    if ($total <=1000) {
        $comissao = $total*0.3;
    }
    else {
        $comissao = $total*0.5;
    }

    $salariomes = $comissao+$salario;

    echo "Nome do vendedor: $nome <br><br>
        Salario Fixo: $salario <br><br>
        Salario Mes: $salariomes";


?>