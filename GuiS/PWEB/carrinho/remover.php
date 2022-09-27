<?php 

session_start();

if(isset($_GET['remover']) && $_GET['remover'] == "carrinho") {
  $idProduto = $_GET['codigo'];
  unset($_SESSION['itens'][$idProduto]);
  echo '<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=carrinho.php"/>';
}

?>