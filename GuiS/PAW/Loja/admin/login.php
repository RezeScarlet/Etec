<?php 
  include_once 'conexao.php';

  if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $result = $conexao-> prepare("SELECT * FROM administradores WHERE email = :email and senha = :senha");
    $result->bindValue(':email', $email);
    $result->bindValue(':senha', md5($senha));
    $result->execute();

    if ($result->rowCount() == 1) {
      $msg = "Deu bom";
      $linha = $result->fetch(PDO::FETCH_ASSOC);

      session_start();
      $_SESSION['nome'] = $linha['nome'];

      header('location: index.php');
    } else {
      $msg = "Usuário invalido";
    }

  } else {

    $msg = '';

  }

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
  <title>Lojaaaaaaa</title>
</head>

<body>
  <?php
  include "navbar.php";
  require_once "conexao.php"
  ?>
  <div class="container bg-light text-dark p-5 my-3">
    <h1 class="text-center">Login</h1>
    <div class="col-sm-5 mx-auto mt-5">
      <form action="#" method="post">

        <h1>Login do Administrador</h1>

        <div class="my-3">
          Digite o email/login:
          <input type="text" name="email" class="form-control">
        </div>

        <div class="my-3">
          Digite a senha
          <input type="password" name="senha" class="form-control">
        </div>

        <div class="mt-3">
          <input type="submit" value="login" name="login" class="btn btn-success">
        </div>

        <div class="my-3">
          <?= $msg; ?>
        </div>

      </form>
    </div>
  </div>
  </body