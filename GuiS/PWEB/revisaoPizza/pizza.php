<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Pizza</title>
</head>
<body>
    <?php
    $nome = $_REQUEST["nome"];
    $endereco = $_REQUEST["endereco"];
    $celular = $_REQUEST["celular"];
    $pizza = $_REQUEST["pizza"];
    $quantidade = $_REQUEST["quantidade"];
    echo "Nome: $nome <br>
          Endereço: $endereco <br>
          Celular: $celular <br>
          Pizza: $pizza <br>
          Quantidade: $quantidade";
    ?>
</body>
</html>