<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A Loja | HOME</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>
<body>


    <main class="mb-4 p-3">
        <div class="text-center mb-4 p-5 shadow-sm">
            <h1>Administração de Loja Virtual</h1>
            <p class="text-secondary m-0">Carrinho de compras</p>
        </div>

        <div class="container">
            <div class="row">
    
                <?php
                    session_start();
                    require_once "conexao.php";

                    if (!isset($_SESSION['itens'])) {
                      $_SESSION['itens'] = array();
                    }

                    if (isset($_GET['add']) && $_GET['add'] == "carrinho") {
                      $idProduto = $_GET['codigo'];

                      if (!isset($_SESSION['itens'][$idProduto])) {
                        $_SESSION['itens'][$idProduto] = 1;
                      } else {
                        $_SESSION['itens'][$idProduto] += 1;
                      }
                    }

                    if(count($_SESSION['itens']) == 0) {
                        echo "Carrinho Vazio<br> <a class='btn btn-primary' href='index.php'>Adicionar itens</a>";
                    } else {
                        $total_parcial = 0;
                        $subtotal = 0;
                        $valor_total = 0;

                        $_SESSION['dados'] = array();
                        ?> 
                            <table class="table table-dark">
                                <thead>
                                    <th style="width: 40vh">Produto</th>
                                    <th style="width: 40vh">Quantidade</th>
                                    <th style="width: 20vh">Preço</th>
                                    <th style="width: 20vh">Subtotal</th>
                                    <th style="width: 20vh">Ação</th>
                                </thead>
                            </table>
                        <?php
                        foreach ($_SESSION['itens'] as $idProduto => $qtde) { ?> 
                            <table class="table table-striped">
                                <?php
                                $select = $conexao->prepare("select * from produtos where codigo = ?");
                                $select->bindParam(1, $idProduto);
                                $select->execute();
                            $produto = $select->fetchAll();
                            $total_parcial = $qtde * $produto[0]['preco'];
                            $subtotal+=$total_parcial;

                            array_push(
                                $_SESSION['dados'],
                                array(
                                    'codigo_produto' => $idProduto,
                                    'quantidade' => $qtde,
                                    'preco' => $produto[0]['preco'],
                                    'total_parcial' => $total_parcial,
                                )
                            )
                            ?>
                        <tr>
                            <th style = "width: 40vh"><?= $produto[0]['descricao'] ?></th>
                            <th style = "width: 40vh"><?= $qtde ?></th>
                            <th style = "width: 20vh"><?= number_format($produto[0]['preco'], 2,',','.') ?></th>
                            <th style = "width: 20vh"><?= number_format($total_parcial[0]['preco'], 2,',','.') ?></th>
                            <th style = "width: 20vh"><?= '<a class="btn btn-danger" href="remover.php?remover=carrinho&codigo='.$idProduto.'"class="card-link">Remover</a>' ?></th>
                        </tr>    
                        </table>
                        <?php 
                        }
                        $valor_total+=$subtotal;
                        echo "<font color=blue size=5>O valor total a ser pago é R$: ".number_format($valor_total, 2, ",", ".");

                        $_SESSION['valor_total'] = $valor_total;

                        echo '<br><br><a class="btn btn-primary" href="index.php">Continuar Comprando</a>';
                        echo '<a class="btn btn-success" href="finalizar.php">Finalizar Pedido</a>';

                    }
    
                     
                ?>
    
            </div>
        </div>
    </main>


</body>
</html>