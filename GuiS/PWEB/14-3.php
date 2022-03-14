<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PWEB 14-3</title>
</head>
<body>
    <h1>PWEB 14-3</h1>
    <form action="index.php" method="post">
        <label for="nome">Digite seu nome: </label> <br>
        <input type="text" required id="nome" name="nome"> <br> <br>
        
        <label for="salario">Digite suas vendas:</label> <br>
        <input type="text" id="vendas" name="vendas"> <br> <br>

        <label for="salario">Digite seu salario:</label> <br>
        <input type="text" id="vendas" name="salario"> <br> <br>

        <input type="submit" value="Enviar">
        <input type="reset" value="Limpar">
    </form>
    <hr>
    <?php
    if ($_POST) {
        $nome = $_POST["nome"];
        $vendas = $_POST["vendas"];
        $salario = $_POST["salario"];

            if ($vendas <= 1000) {
                $comissao = $vendas*0.03;
            } else {
                $comissao = $vendas*0.05;
            }

        $salarioMes = $comissao+$salario; 
    }
    ?>
    <p>
        Nome do vendedor: <?php echo $nome ?> <br>
        Salário Fixo: <?php echo $salario ?> <br>
        Salário do Mês: <?php echo $salarioMes ?>
    </p>
</body>
</html>
