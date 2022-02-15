<?php
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];

    if ($idade <= 16) {
        $resposta = "Você não tem idade para votar";
    }
    else {
        $resposta = "Você";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExemploA PHP</title>
</head>
<body>
    <h1>Resultado exemplo PHP</h1>
    <p>Nome: <?php echo $nome ?></p>
    <p>Idade: <?php echo $idade ?></p>
    <p><?php echo $resposta ?></p>
</body>
</html>