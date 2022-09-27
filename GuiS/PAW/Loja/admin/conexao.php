<?php
  $servidor = "localhost:3000";
  $usuario = "root";
  $senha = "usbw";
  $bancodados = "loja";

  $datasource = "mysql:host=$servidor;dbname=$bancodados;charset=UTF8";

  $conexao = new PDO($datasource, $usuario, $senha);
  $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>