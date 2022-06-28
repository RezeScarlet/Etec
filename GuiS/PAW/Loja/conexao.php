<?php
  $servidor = "localhost:3306";
  $usuario = "root";
  $senha = "";
  $bancodados = "loja";

  $datasource = "mysql:host=$servidor;dbname=$bancodados;charset=UTF8";

  $conexao = new PDO($datasource, $usuario, $senha);
  $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>