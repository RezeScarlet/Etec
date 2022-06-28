<?php
  if (isset($_POST["descricao"])){
    $descricao = $_POST["descricao"];
    $preco = $_POST["preco"];
    $codcategoria = $_POST["categoria"];
    $caminho = "img/";
    $arquivo_temp = $_FILES["arquivo"]["tmp_name"];
    $arquivo_temp = $_FILES["arquivo"]["nome"];
    $arquivo_completo = $caminho.basename($arquivo_imagem);
    $extensao - strtolower (pathinfo($arquivo_completo, PATHINFO_EXTENSION));
  } else {

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

<body>

  <?php
  require_once "navbar.html";
  require_once "conexao.php";
  ?>

  <div class="bg-light container p-2 mt-3 border rounded shadow-lg">
    <h1 class="text-center p-3">Cadastro de Produtos</h1>

    <div class="container mt-2">
      <div class="row justify-content-center">
        <div class="col-sm-8">

          <form action="#" method="post">
            <div class="mb-2 form-group">
              <label for="descricao">Descrição do produto</label>
              <input type="text" id="descricao" name="descricao" class="form-control">
            </div>

            <div class="mb-2 form-group">
              <label for="preco">Preço de venda</label>
              <input type="text" id="preco" name="preco" class="form-control">
            </div>

            <div class="mb-2">
              <label for="categoria">Categoria</label>
              <select name="categoria" id="categoria" class="form-select">

                <option value="-1">Categorias</option>
                <?php
                
                $sql = "SELECT * FROM categorias";
                $result = $conexao -> prepare($sql);
                $result ->execute();
                
                while ( $linha = $result -> fetch(PDO::FETCH_ASSOC) ) 
                {
                  $codcategoria = $linha ["codigo"];
                  $nomecategoria = $linha["nome"];

                  echo "<option value='$codcategoria'>$nomecategoria</option>";
                }

                ?>
              </select>

            </div>

            <div class="mb-2">
              <label for="arquivo">Imagem do produto</label>
              <input type="file" name="arquivo" id="arquivo" class="form-control">
            </div>

            <div class="mb-2">
              <input type="submit" value="Cadastrar" class="btn btn-primary">
              <input type="reset" value="Limpar" class="btn btn-secondary">
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>