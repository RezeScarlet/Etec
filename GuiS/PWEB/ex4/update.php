<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Pesquisa</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>

<body class="bg-dark">
	<?php
	require_once 'navbar.html';
	require_once 'connection.php';
	?>
	<div class="container bg-light my-3 p-4 rounded">

		<h1 class="text-center">Atualizar Produto</h1>
		<div class="row">
			<div class="container col mt-4 table-responsive-sm">
				<?php
					$sql = "SELECT * FROM produtos";
					$resultado = mysqli_query($conexao, $sql);
				?>
					<table class="table table-light table-striped table-hover table-borderless border border-dark">
						<tr>
							<th class="table-dark">Código Produto</th>
							<th class="table-dark">Produto</th>
							<th class="table-dark">Quantidade</th>
							<th class="table-dark">Valor Compra</th>
							<th class="table-dark">Valor Venda</th>
						</tr>
						<?php
						while ($linha = mysqli_fetch_array($resultado)) {
						?>
							<tr>
								<td><?php echo $linha["cod_produto"] ?></td>
								<td><?php echo $linha["produto"] ?></td>
								<td><?php echo $linha["quantidade"] ?></td>
								<td><?php echo $linha["preco_custo"] ?></td>
								<td><?php echo $linha["preco_venda"] ?></td>
						<?php }
					 ?>
							</tr>
					</table>
			</div>
			<div class="col">
				<form action="update2.php" method="POST">

					<div class="mt-3 form-group">
						<label>
							<p class="fs-4 m-0">Código do produto:</p>
							<input type="number" min="1" id="codigo" name="codigo" class="form-control" required></input>
						</label>
					</div>

					<div class="btns">
						<input type="submit" value="Enviar" class="btn-md btn m-2 text-white" style="background: #483fff;">
					</div>

				</form>
			</div>
		</div>
</body>
</html>