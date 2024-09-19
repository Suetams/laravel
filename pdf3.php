<?php

require_once 'vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();

$stylesheet = file_get_contents('CSS/style.css');
$html = '<h1>Minha primeira Página PDF<h1>';

$mpdf->WriteHTML($stylesheet, \Mpdf\HTMLParserMode::HEADER_CSS);
$mpdf->WriteHTML($html, \Mpdf\HTMLParserMode::HTML_BODY);
$mpdf->Output();