<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Update3</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>

<body class="bg-dark">
  <?php require_once("navbar.html");
  require_once("conexao.php") ?>
  <div class="container bg-light my-3 p-5 rounded">
    <?php
    $codigo = $_POST['codigo'];
    $nome = $_POST['nome'];
    $data_nasc = $_POST['data_nasc'];
    $celular = $_POST['celular'];
    $email = $_POST['email'];
    $rua = $_POST['rua'];
    $numero = $_POST['numero'];
    $bairro = $_POST['bairro'];
    $cep = $_POST['cep'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];

    $sql = "update tb_clientes set nome='$nome', data_nasc='$data_nasc', celular='$celular', email='$email', rua='$rua', numero='$numero', bairro='$bairro', cep='$cep', cidade='$cidade', estado='$estado' where codcliente=$codigo;";

    $result = mysqli_query($conexao, $sql);

    if ($result) {
      echo '<h1>Cadastro Alterado com Sucesso !!!</h1>';
    } else {
      echo '<h1 class="text-danger">Ocorreu um erro' . $result . "</h1>";
    }
    ?>


    <a role="button"href="update1.php" aria-pressed="true" class="btn btn-primary btn-lg active">Voltar</a>

  </div>

</body>

</html>