<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo PHP</title>
    <style>
        body {
            height: 100vh;
        }

        .container, form {
          display: flex;
          flex-direction: column;
        }

        form {
            gap: 1.5rem;
        }
    </style>
</head>
<body>
    <div class="container">
      <div>
        <h1>Trabalhando com formulários</h1>
      </div>

      <div class="formulario">
        <form action="exemploA.php" method="post">
            <div class="campo">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome">
            </div>
    
            <div class="campo">
                <label for="idade">Idade:</label>
                <input type="number" name="idade" id="idade">
            </div>
    
            <div class="campo">
                <input type="submit" value="Enviar">
                <input type="reset" value="Limpar">
            </div>
        </form>
    </div>
    </div>
</body>
</html>