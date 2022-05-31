<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Cadastro</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>

<body class="bg-dark">

	<?php
	require 'navbar.html'
	?>

	<div class="container bg-light my-3 p-5 rounded">

		<h1>Cadastro de Clientes</h1>

		<form action="cadastro.php" method="POST">

					<div class="mb-3 mt-3">
						<label class="form-label" for="nome">Nome</label>
						<input class="form-control" type="text" id="nome" name="nome" required>
					</div>
					<div class="mb-3 mt-3">
						<label class="form-label" for="data">Data de Nascimento</label>
						<input class="form-control" type="date" id="data" name="data_nasc" required>
					</div>

					<div class="row">
						<div class="col col-8">
							<div class="mb-3 mt-3">
								<label class="form-label" for="email">Email</label>
								<input class="form-control" type="email" name="email" id="email" required>
							</div>
						</div>
						<div class="col">
							<div class="mb-3 mt-3">
								<label class="form-label" for="celular">Celular</label>
								<input class="form-control" type="tel" name="celular" id="celular" placeholder="(19) 99999-9999" required>
							</div>
						</div>
					</div>

					<hr>
			
				<div class="row">
					<div class="col col-8">
						<div class="mb-3 mt-3 flex-grow-1">
							<label class="form-label" for="rua">Rua</label>
							<input class="form-control" type="text" id="rua" name="rua" required>
						</div>
					</div>
					<div class="col">
						<div class="mb-3 mt-3">
							<label class="form-label" for="numero">Número</label>
							<input class="form-control" type="number" id="numero" name="numero" required>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col col-8">
						<div class="mb-3 mt-3">
							<label class="form-label" for="bairro">Bairro</label>
							<input class="form-control" type="text" id="bairro" name="bairro" required>
						</div>
					</div>
					<div class="col">
							<div class="mb-3 mt-3">
								<label class="form-label" for="cep">CEP</label>
								<input class="form-control" type="text" id="cep" name="cep" required>
							</div>
						</div>
					</div>


				<div class="row">
					<div class="co col-8">
						<div class="mb-3 mt-3">
							<label class="form-label" for="cidade">Cidade</label>
							<input class="form-control" type="text" id="cidade" name="cidade" required>
						</div>
					</div>

					<div class="col">
						<div class="mb-3 mt-3">
							<label for="estado">Estado</label>
							<select name="estado" id="estado" class="form-select form-select-lg">
								<option value="" selected disabled>Escolha seu estado</option>
								<option value="AC">Acre</option>
								<option value="AL">Alagoas</option>
								<option value="AP">Amapá</option>
								<option value="AM">Amazonas</option>
								<option value="BA">Bahia</option>
								<option value="CE">Ceará</option>
								<option value="DF">Distrito Federal</option>
								<option value="ES">Espírito Santo</option>
								<option value="GO">Goiás</option>
								<option value="MA">Maranhão</option>
								<option value="MT">Mato Grosso</option>
								<option value="MS">Mato Grosso do Sul</option>
								<option value="MG">Minas Gerais</option>
								<option value="PA">Pará</option>
								<option value="PB">Paraíba</option>
								<option value="PR">Paraná</option>
								<option value="PE">Pernambuco</option>
								<option value="PI">Piauí</option>
								<option value="RJ">Rio de Janeiro</option>
								<option value="RN">Rio Grande do Norte</option>
								<option value="RS">Rio Grande do Sul</option>
								<option value="RO">Rondônia</option>
								<option value="RR">Roraima</option>
								<option value="SC">Santa Catarina</option>
								<option value="SP">São Paulo</option>
								<option value="SE">Sergipe</option>
								<option value="TO">Tocantins</option>
							</select>
						</div>
					</div>
				</div>


				<div class="mb-3 mt-3 btns">
					<input type="submit" value="Enviar" class="btn btn-primary btn-lg m-2">
					<input type="reset" value="Limpar" class="btn btn-secondary btn-lg m-2">
				</div>
			</div>
		</form>
	</div>
</body>

</html>

<?php

require_once "conexao.php";

if ($_POST) {
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

	$sql = " insert into tb_clientes (nome, data_nasc, celular, email, rua, numero, bairro, cep, cidade, estado)  
		values ('$nome' , '$data_nasc',  '$celular', '$email', '$rua', '$numero', '$bairro', '$cep', '$cidade' , '$estado')";

	$result = mysqli_query($conexao, $sql);
	if ($result) {
		echo "Cliente cadastrado com sucesso !!!";
	} else {
		echo "Ocorreu um erro";
	}
}
?>