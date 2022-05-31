<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <title>Consulta Por Nome</title>
</head>
<body>
  <?php require_once("navbar.html"); ?>
  <div class="container">
    <h1>Pesquisa Por Nome de Cliente</h1>
    <form action="consultaNome.php" method="post">
      <label for="nome">Digite o Nome: </label><br>
      <input type="text" id="nome" name="nome">

      <input type="submit" value="Enviar">
    </form>
  <?php
    require("conexao.php");
    if ($_POST) {
      $nome = $_POST["nome"];

      $sql = "SELECT * FROM tb_clientes WHERE nome LIKE '%$nome%'";

      $resultado=mysqli_query($conexao,$sql);

  ?>

  

    <div class="container-fluid mt-4">
    <table class="table table-light table-striped table-hover table-borderless border border-dark">
      <tr>
        <th class="table-dark">Código Cliente</th>
        <th class="table-dark">Nome</th>
        <th class="table-dark">Data de Nascimento</th>
        <th class="table-dark">Celular</th>
        <th class="table-dark">Email</th>
        <th class="table-dark">Rua</th>
        <th class="table-dark">Número</th>
        <th class="table-dark">Bairro</th>
        <th class="table-dark">CEP</th>
        <th class="table-dark">Cidade</th>
        <th class="table-dark">Estado</th>
      </tr>

      <?php
        while ($linha=mysqli_fetch_array($resultado)) {
      ?>

      <tr>
        <td><?php echo $linha["codcliente"]?></td>
        <td><?php echo $linha["nome"]?></td>
        <td><?php echo $linha["data_nasc"]?></td>
        <td><?php echo $linha["celular"]?></td>
        <td><?php echo $linha["email"]?></td>
        <td><?php echo $linha["rua"]?></td>
        <td><?php echo $linha["numero"]?></td>
        <td><?php echo $linha["bairro"]?></td>
        <td><?php echo $linha["cep"]?></td>
        <td><?php echo $linha["cidade"]?></td>
        <td><?php echo $linha["estado"]?></td>

        <?php } } ?>
    </tr>
  </div>
  </div>
</body>
</html>