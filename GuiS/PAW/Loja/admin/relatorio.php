<?php 
require_once 'conexao.php';


$html = '<table border=1>
         <thead>
         <tr bgcolor=black>
         <th><font color=white>Código</th>
         <th><font color=white>Descrição</th>
         <th><font color=white>Preço</th>
         <th><font color=white>Categoria</th>
         </tr>
         </thead>
         <tbody>';

$resultado = $conexao -> prepare("SELECT * FROM produtos");
$resultado -> execute();
while ($linha = $resultado->fetch(PDO::FETCH_ASSOC)) {
  $html .= '<tr><td>'.$linha['codigo']."</td>
            <td>".$linha['descricao']."</td>
            <td>".$linha['preco']."</td>
            <td>".$linha['codcategoria']."</td>";
    
}

$html .= "</tbody>
          </table>"; 

use Dompdf\Dompdf;

require_once "dompdf/autoload.inc.php";

$dompdf = new DOMPDF();

$dompdf->load_html('<h1 style="text-align: center;">Relatório de Clientes</h1>'. $html);

$dompdf->render();

$dompdf->stream(
  "relatorio_produtos.pdf",
  array(
    "Attachment" => false
  )
);

?>