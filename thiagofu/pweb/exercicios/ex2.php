<?php
$quant = $_POST["quantidade"];
$nome = $_POST["nome"];
$pizza = $_POST["pizza"];

switch ($pizza) {
    case "mussarela":
        $preco = 30;
        break;

    case "calabresa":
        $preco = 32.5;
        break;   

    case "marguerita":
        $preco = 40;
        break;

    case "rucula":
        $preco = 38.5;
        break;

    case "lombinho":
        $preco = 39;
        break; 
}
$total = $quant * $preco;
$img = "img/$pizza.jpg";
$pizza = ucfirst($pizza)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza!!!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        body {
            padding: 1rem;
        }

        .container {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .line {
            font-weight: 700;
        }

        .output {
            font-weight: normal;
            color: darkgreen;
        }

      img {
        border: 1px solid lightgrey;
        border-radius: 10%;
      }
    </style>
</head>
<body>
    <div class="container">
        <span class="line">
            Nome do cliente: 
            <span class="output"><?php echo $nome ?></span>
        </span>

        <span class="line">
            Pizza Escolhida:
            <span class="output"><?php echo $pizza ?></span>
        </span>

        <span class="line">
            Preço da pizza:
            <span class="output"><?php echo $preco ?></span>
        </span>

        <span class="line">
            Valor total a pagar:
            <span class="output">R$ <?php echo $total ?></span>
        </span>

        <br>
        <br>

        <span class="line">
            Veja a pizza escolhida abaixo: <br><br> 
            <img src="<?php echo $img ?>" alt="pizza escolhida">
        </span>

    </div>

</body>
</html>