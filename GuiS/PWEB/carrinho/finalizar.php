<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A Loja | Finalizar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>
<body>


    <main class="mb-4 p-3">
        <div class="text-center mb-4 p-5 shadow-sm">
            <h1>Confirmação de Pedidos</h1>
            <p class="text-secondary m-0">Carrinho de compras</p>
        </div> <br><br>

        <div class="container">
            <div class="row">
    
                <?php
                    session_start();
                    require_once "conexao.php";
    
                    $sql = "INSERT INTO pedido() VALUES (null, now(), ?)";
                    $insert_pedido = $conexao->prepare($sql);
                    $insert_pedido->bindParam(1, $_SESSION['valor_total']);
                    $insert_pedido->execute();
                    $chave = $conexao->lastInsertId();

                    foreach($_SESSION['dados'] as $produtos) {
                      $insert = $conexao->prepare("INSERT INTO pedido_item VALUES (null, ?, ?, ? , ?)");
                      $insert->bindValue(1, $chave);
                      $insert->bindParam(2, $produtos['codigo_produto']);
                      $insert->bindParam(3, $produtos['quantidade']);
                      $insert->bindParam(4, $produtos['total_parcial']);
                      $insert->execute();
                    }

                    echo "<div class='alert alert-info'> Compra realizada com sucesso!<br> O valor total a ser pago é R$ ". number_format($_SESSION['valor_total'], 2, ',', '.')."</div>";
                    unset($_SESSION['itens']);
      
                ?>
                <div class="col">
                <a href="carrinho.php" class="btn btn-primary">Voltar ao Catálogo</a>
                <a href="relatorio_pedido.php" class="btn btn-success">Imprimir pedido</a>
                </div>
            </div>
        </div>
    </main>


</body>
</html>