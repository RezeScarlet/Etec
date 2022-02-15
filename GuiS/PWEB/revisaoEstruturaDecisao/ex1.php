<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Revisão</title>
</head>
<body>
	<?php
	$nome = $_POST['nome'];
	$idade = $_POST['idade'];

	if ($idade>= 16) {
		$situacao = "Você já pode votar nas proximas eleições";
	} else {
		$situacao = "Você ainda NÃO tem direito de votar";
	}
	echo "Nome: $nome <br>
				Idade: $idade <br>
				$situacao";
	?>
</body>
</html>