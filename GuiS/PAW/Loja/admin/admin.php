<?php
include "conexao.php";
// include "verifica.php";



if (isset($_POST['cadastrar'])) {
  $nome = $_POST["nome"];
  $email = $_POST["email"];
  $senha = $_POST["senha"];

  $sql = "insert into administradores values(null, :nome, :email, :senha)";

  $result = $conexao->prepare($sql);
  $result->bindValue(":nome", $nome);
  $result->bindValue(":email", $email);
  $result->bindValue(":senha", md5($senha));
  $result->execute();

  $msg = "<div class='alert alert-success'>O administrador $nome foi cadastrado com sucesso";
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
  <title>Loja de Informática</title>
</head>

<body class="bg-adm">

  <?php
  require_once "navbar.php";
  ?>

  <div class="bg-light container p-2 mt-3 border rounded">
    <h1 class="text-center p-3">Cadastro de Administradores</h1>

    <form action="#" method="post">

      <div class="p-3">

        <div class="my-2">
          <label class="form-label" for="nome">Nome:</label>
          <input class="form-control" type="text" id="nome" name="nome" required>
        </div>

        <div class="row">
          <div class="my-2 col">
            <label class="form-label" for="Email">Email:</label>
            <input class="form-control" type="text" id="email" name="email" required>
          </div>

          <div class="my-2 col">
            <label class="form-label" for="Senha">Senha:</label>
            <input class="form-control" type="password" id="senha" name="senha" required>
          </div>

          <div class="my-2">
            <input type="submit" value="Cadastrar" name="cadastrar" class="btn btn-dark">
            <input type="reset" value="Limpar" class="btn btn-outline-dark">
          </div>

        </div>
      </div>
      <?php echo $msg; ?>

    </form>
  </div>
</body>

</html>