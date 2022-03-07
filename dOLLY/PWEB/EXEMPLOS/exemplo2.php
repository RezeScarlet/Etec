<html>
  <head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS\Quest\from.css">
    <title>Exemplo 2 resultado</title>
  </head>
  <body>

      <?php

        $nome = $_POST["nome"];
        $sal = $_POST["sal"];


        if ($sal <=1300) 
        {
          $salFinal = $sal*0.3 + $sal;
          echo "Apto ao aumento $salFinal";
        }
        else
        {
          echo "Não está apto a receber aumento";
        }
        
      ?>

    <ul>
      <li><a href="exemplo2.html">Voltar</a></li>
    <ul>

  </body>
</html>