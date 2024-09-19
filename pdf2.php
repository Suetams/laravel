<?php

require_once 'vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();
$html = '<h1>Minha primeira Página PDF<h1>';
$mpdf->WriteHTML($html);
$mpdf->Output();