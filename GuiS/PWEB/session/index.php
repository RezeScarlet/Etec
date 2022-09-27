<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Session</title>
</head>
<body>
  <form action="index.php" method="post">
    Nome: <br>
    <input type="text" name="nome"><br>
    <input type="submit" value="Enviar">
  </form>
  <?php
    require_once "conexao.php";
    session_start();
    if (isset($_POST['nome'])) {

      $nome = $_POST['nome'];

      $insert = $conexao->prepare("INSERT INTO clientes (nome) VALUES ( :nome)");
      $insert -> bindValue(':nome', $nome);
      $insert -> execute();
      
      if (isset($insert)) {
        $_SESSION['mensagem'] = "<p style='color: blue;'> Usuario $nome cadastrado com sucesso!</p>";
      } else {
        $_SESSION['mensagem'] = '<p style="color: blue;"> Usuario não foi cadastrado!</p>';
      }

    }

    if (isset($_SESSION['mensagem'])) {
      echo $_SESSION['mensagem'];
    }
  ?>
  <a href="2.php">pagina 2</a>
</body>
</html>