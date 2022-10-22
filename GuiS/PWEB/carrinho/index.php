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
    
                    require_once "conexao.php";
    
    
                    $result = $conexao->prepare("SELECT * FROM produtos");
                    $result->execute();
    
                    while($linha = $result->fetch(PDO::FETCH_ASSOC)) {
                        
                        $cod_produto = $linha["codigo"];
                        $descricao = $linha["descricao"];
                        $preco = $linha["preco"];
                        $cod_categoria = $linha["codcategoria"];
                        $imagem = $linha["imagem"];
    
                        
                ?>
    
                <div class="col-sm-4 g-4">
                    <div class="card rounded">
                    
                        <div class="card-header">
                            <img src="img/<?= $imagem; ?>" class="card-img-top img-fluid">
                        </div>

                        <div class="card-body bg-dark text-white">
                            <div class="row">
                                <p class="card-title h5 col">
                                    <?= $descricao; ?>
                                </p>
                                <p class="card-text col text-right">
                                    <?= "R$".number_format($preco, 2, ",", "."); ?>
                                </p>
                            </div>
                            <a href="carrinho.php?add=carrinho&codigo=<?= $cod_produto ?>" class="btn btn-primary mt-2">Comprar</a>
                        </div>
                        
                    </div>
                </div>
    
                <?php
    
                    }    
                ?>
    
            </div>
        </div>
    </main>


</body>
</html>