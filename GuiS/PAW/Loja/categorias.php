<?php
include "conexao.php";

if (isset($_POST["nome"])) {
  $nome = $_POST["nome"];

  $sql = "insert into categorias values(null, :nome)";
  $result = $conexao->prepare($sql);
  $result->bindValue(":nome", $nome);
  $result->execute();

  $msg = "<div class='alert alert-success'>A categoria $nome foi cadastrada com sucesso!</div>";

} else {

  $msg = "";

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
  require_once "navbar.html";
  ?>

  <div class="bg-light container p-2 mt-3 border rounded">
    <h1 class="text-center p-3">Cadastro de Categorias</h1>

    <div class="row ">

      <form action="#" method="post">
        <div class="col-sm-6">
          <div class="mb-2 form-group">
            <label for="nome">Categoria</label>
            <input type="text" id="nome" name="nome" class="form-control">
          </div>

          <div class="mb-2">
            <input type="submit" value="Cadastrar" class="btn btn-primary">
            <input type="reset" value="Limpar" class="btn btn-secondary">
          </div>

          <?php echo $msg; ?>
        </div>
      </form>

    </div>

  </div>
</body>

</html>