<?php 
require_once 'connection.php';


$html = '<table border=1>
         <thead>
         <tr bgcolor=black>
         <th><font color=white>Código</th>
         <th><font color=white>Nome</th>
         </tr>
         </thead>
         <tbody>';

$sql = "SELECT * FROM produtos";
$resultado = mysqli_query($conexao, $sql);
while ($row_transacoes = mysqli_fetch_assoc($resultado)) {
  $html .= '<tr><td>'.$row_transacoes['cod_produto']."</td>
            <td>".$row_transacoes['produto']."</td>";
    
}

$html .= "</tbody>
          </table>"; 

use Dompdf\Dompdf;

require_once "dompdf/autoload.inc.php";

$dompdf = new DOMPDF();

$dompdf->load_html('<h1 style="text-align: center;">Relatório de Clientes</h1>'. $html .'');

$dompdf->render();

$dompdf->stream(
  "relatorio_celke.pdf",
  array(
    "Attachment" => false
  )
);

?>