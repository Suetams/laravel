<?php

require_once 'vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();

$css = file_get_contents('CSS/style2.css');

ob_start();
?>
<h2>Extrato de Conta</h2>
<img src="Img/logo.png  " alt="Logo">
<table class="info">
    <tr>
        <td>Fornecedor:</td>
        <td>MOVICEL</td>
        <td>Contato:</td>
        <td>222 335 001</td>
    </tr>
    <tr>
        <td>Morada:</td>
        <td>Luanda</td>
        <td>NIF:</td>
        <td>5410001109</td>
    </tr>
    <tr>
        <td>Banco:</td>
        <td>BFA</td>
        <td>Conta:</td>
        <td>149654581</td>
    </tr>
    <tr>
        <td>Rubrica:</td>
        <td>Fornecedor - Serviços de Comunicações</td>
    </tr>
    <tr>
        <td>Data:</td>
        <td>11/03/2017 22:03</td>
    </tr>
</table>
<h3>Movimentações:</h3>
<table class="table">
    <tr>
        <th>Data Mov.</th>
        <th>Nº Doc.</th>
        <th>Descrição</th>
        <th>Débito</th>
        <th>Crédito</th>
    </tr>
    <tr>
        <td>11/04/2017</td>
        <td>9876/17</td>
        <td>Plano Carga Nice +</td>
        <td>0,00 KZ</td>
        <td>45.000,00 KZ</td>
    </tr>
    <tr>
        <td>10/03/2017</td>
        <td>5868/17</td>
        <td>Pagamento do Plano Carga</td>
        <td>40.000,00 KZ</td>
        <td>0,00 KZ</td>
    </tr>
    <tr>
        <td>17/02/2017</td>
        <td>68732/17</td>
        <td>Plano Karga Nice +</td>
        <td>0,00 KZ</td>
        <td>50.000,00 KZ</td>
    </tr>
    <tr>
        <td>10/03/2017</td>
        <td>5672/17</td>
        <td>Pagamento do Saldo</td>
        <td>25.000,00 KZ</td>
        <td>0,00 KZ</td>
    </tr>
</table>
<?php

$html = ob_get_contents();

ob_end_clean();

$mpdf->WriteHTML($css, \Mpdf\HTMLParserMode::HEADER_CSS);
$mpdf->WriteHTML($html, \Mpdf\HTMLParserMode::HTML_BODY);
$mpdf->Output();
?>