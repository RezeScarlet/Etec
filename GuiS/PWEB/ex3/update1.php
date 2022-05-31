<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Update</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>
  <?php
  require_once 'navbar.html';

  require_once "conexao.php";

  $sql = "select * from tb_clientes";
  $resultado = mysqli_query($conexao, $sql);

  ?>
  <h1>Alteração do Cadastro de Clientes</h1>

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
  </div>

  <?php
  while ($linha = mysqli_fetch_array($resultado)) {
  ?>

    <tr>
      <td><?php echo $linha["codcliente"] ?></td>
      <td><?php echo $linha["nome"] ?></td>
      <td><?php echo $linha["data_nasc"] ?></td>
      <td><?php echo $linha["celular"] ?></td>
      <td><?php echo $linha["email"] ?></td>
      <td><?php echo $linha["rua"] ?></td>
      <td><?php echo $linha["numero"] ?></td>
      <td><?php echo $linha["bairro"] ?></td>
      <td><?php echo $linha["cep"] ?></td>
      <td><?php echo $linha["cidade"] ?></td>
      <td><?php echo $linha["estado"] ?></td>

    <?php } ?>
    </tr>
    </table>

    <form action="update2.php" method="post">
      <label class="form-label" for="codigo">Digite o código referente ao cliente</label>
      <input class="form-control" type="text" id="codigo" name="codigo" required><br>

      <button class="btn-lg btn-primary" type="submit">Enviar</button>
    </form>
</body>

</html>