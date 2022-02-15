<html>
  <head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS\Quest\from.css">
    <title>PHP Test</title>
  </head>
  <body>

      <?php

        $nome = $_REQUEST["nome"];
        $endereco = $_REQUEST["endereco"];
        $celular = $_REQUEST["cell"];
        $pizza = $_REQUEST["pizza"];
        $quan = $_REQUEST["quan"];

        echo "$nome <br> $endereco <br> $pizza $quan <br>";
        
      ?>

    <ul>
      <li><a href="pizzaDolly.html">Voltar</a></li>
    <ul>

  </body>
</html>