<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaliação</title>
    <style>
      form {
        display: flex;
        flex-direction: column;
        gap: 1rem;
        padding: 1rem;
      }
    </style>
</head>
<body>
    <form action="avaliacaoA.php" method="POST">
               
        <div class="form-group">
            <label for="nome">Nome: </label>
            <input type="text" id="nome" name="nome" requeste>
        </div>


        <div class="form-group">
            <label for="salario">Total de vendas: </label>
            <input type="number" id="vendas" name="vendas" required>
        </div>

      <div class="form-group">
            <label for="salario">Salário Fixo: </label>
            <input type="number" id="salario" name="salario" required>
        </div>

        <div class="form-group">
            <input type="submit" value="Calcular">
        </div>

    </form>

</body>
</html>