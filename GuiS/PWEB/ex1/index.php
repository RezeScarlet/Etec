<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1</title>
</head>
<body>
    <h1>Exercicio 1</h1>
    <!--salario <= 1300 + 30%-->
    <form action="index.php" method="post">
        <label for="nome">Digite seu nome: </label> <br>
        <input type="text" required id="nome" name="nome"> <br> <br>
        
        <label for="salario">Digite seu salario:</label> <br>
        <input type="text" id="salario" name="salario"> <br> <br>

        <input type="submit" value="Enviar">
        <input type="reset" value="Limpar">
    </form>
    <hr>
    <?php
    if ($_POST) {
        $nome = $_POST["nome"];
        $salario = $_POST["salario"];

            if ($salario <= 1300) {
                $salarioNovo = $salario*1.3;
                $aumento = "pode";
            } else {
                $salarioNovo = $salario;
                $aumento = "não pode";
            }
        echo "Você $nome, $aumento receber um aumento, ou seja seu salario será de $salarioNovo"; 
    }
    ?>
</body>
</html>
