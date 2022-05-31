<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Update2</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>

<body class="bg-dark">

	<?php
  $codigo = $_POST["codigo"];
  require_once ("conexao.php");
  $sql = "select * from tb_clientes where codcliente = $codigo";
  $result = mysqli_query($conexao, $sql);
	require_once ("navbar.html");
  $numrow = mysqli_num_rows($result);

  if ($numrow>0) {

    while ($linha  = mysqli_fetch_array($result)) {
	?>

	<div class="container bg-light my-3 p-5 rounded">

		<h1>Editar Cadastro de Cliente</h1>

		<form action="update3.php" method="POST">

          <div class="mb-3 mt-3">
						<label class="form-label" for="codigo">Código</label>
						<input class="form-control" type="number" id="codigo" name="codigo" readonly value="<?php echo $linha["codcliente"]; ?>">
					</div>

					<div class="mb-3 mt-3">
						<label class="form-label" for="nome">Nome</label>
						<input class="form-control" type="text" id="nome" name="nome" required  value="<?php echo $linha["nome"]; ?>">
					</div>
					<div class="mb-3 mt-3">
						<label class="form-label" for="data">Data de Nascimento</label>
						<input class="form-control" type="date" id="data" name="data_nasc" required value="<?php echo $linha["data_nasc"]; ?>">
					</div>

					<div class="row">
						<div class="col col-8">
							<div class="mb-3 mt-3">
								<label class="form-label" for="email">Email</label>
								<input class="form-control" type="email" name="email" id="email" required value="<?php echo $linha["email"]; ?>">
							</div>
						</div>
						<div class="col">
							<div class="mb-3 mt-3">
								<label class="form-label" for="celular">Celular</label>
								<input class="form-control" type="tel" name="celular" id="celular" placeholder="(19) 99999-9999" required value="<?php echo $linha["celular"]; ?>">
							</div>
						</div>
					</div>

					<hr>
			
				<div class="row">
					<div class="col col-8">
						<div class="mb-3 mt-3 flex-grow-1">
							<label class="form-label" for="rua">Rua</label>
							<input class="form-control" type="text" id="rua" name="rua" required value="<?php echo $linha["rua"]; ?>">
						</div>
					</div>
					<div class="col">
						<div class="mb-3 mt-3">
							<label class="form-label" for="numero">Número</label>
							<input class="form-control" type="number" id="numero" name="numero" required value="<?php echo $linha["numero"]; ?>">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col col-8">
						<div class="mb-3 mt-3">
							<label class="form-label" for="bairro">Bairro</label>
							<input class="form-control" type="text" id="bairro" name="bairro" required value="<?php echo $linha["bairro"]; ?>">
						</div>
					</div>
					<div class="col">
							<div class="mb-3 mt-3">
								<label class="form-label" for="cep">CEP</label>
								<input class="form-control" type="text" id="cep" name="cep" required value="<?php echo $linha["cep"]; ?>">
							</div>
						</div>
					</div>


				<div class="row">
					<div class="co col-8">
						<div class="mb-3 mt-3">
							<label class="form-label" for="cidade">Cidade</label>
							<input class="form-control" type="text" id="cidade" name="cidade" required value="<?php echo $linha["cidade"]; ?>">
						</div>
					</div>

          <div class="row">
					<div class="co col-8">
						<div class="mb-3 mt-3">
							<label class="form-label" for="estado">Estado</label>
							<input class="form-control" type="text" id="estado" name="estado" required value="<?php echo $linha["estado"]; ?>">
						</div>
					</div>
				</div>


				<div class="mb-3 mt-3 btns">
					<input type="submit" value="Enviar" class="btn btn-primary btn-lg m-2">
				</div>
			</div>
		</form>
	</div>

</body>
</html>

<?php
	}} else {
		echo "Cliente não cadastrado <br>";
	}
?>