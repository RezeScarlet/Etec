<html>
  <head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS\Quest\from.css">
    <title>Exemplo 1 resultado</title>
  </head>
  <body>

      <?php

        $nome = $_POST["nome"];
        $idade = $_POST["idade"];


        if ($idade >=16) 
        {
          $situacao = "Você já pode votar na próxima eleição!";
        }
        else
        {
          $situacao = "Você ainda NÃO pode votar na próxima eleição!";
        }
        
      ?>

      <h1>Resultado exemplo 1</h1>

      <p><b>Nome:</b> <?php echo $nome;?></p>
      <p><b>Idade:</b> <?php echo $idade;?></p>
      <p><b>Resultado:</b> <?php echo $situacao;?></p>

    <ul>
      <li><a href="exemplo1.html">Voltar</a></li>
    <ul>

  </body>
</html>