<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      form {
        display: flex;
        flex-direction: column;
        gap: 1rem;
        padding: 1rem;
      }

      .output {
        margin-top: 1rem;
        border-top: solid black 1px;
        padding: 1rem;
      }
    </style>
</head>
<body>
    <form action="exercicio2.php" method="POST">
               
        <div class="form-group">
            <label for="nome">Nome: </label>
            <input type="text" id="nome" name="nome" requeste>
        </div>


        <div class="form-group">
            <label for="salario">Salário: </label>
            <input type="number" id="salario" name="salario" required>
        </div>

        <div class="form-group">
            <input type="submit" value="Calcular">
        </div>

    </form>

    <div class="output">

      <?php
        $nome = $_POST["nome"];
        $salario = $_POST["salario"];

        if ($_POST) {

            if ($salario <= 1300) {
                $novoSalario = $salario * 1.3;
                $podeOuNaoPode = "pode";
            } else {
                $novoSalario = $salario;
                $podeOuNaoPode = "não pode";
            }

            $resultado = "$nome, você pode receber um aumento. Salário: R$$novoSalario"; 
            echo $resultado;
            
        }
      ?>
    </div>

    



</body>
</html>