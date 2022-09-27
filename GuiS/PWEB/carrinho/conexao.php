<?php

    $servidor = "localhost:3306";
    $usuario = "root";
    $senha = "";
    $banco_de_dados = "loja";

    $datasource = "mysql:host=$servidor;
        dbname=$banco_de_dados;
        charset=UTF8";

    $conexao = new PDO($datasource, $usuario, $senha);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>