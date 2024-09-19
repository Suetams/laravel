<?php

require_once 'vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML('<h1>Minha primeira Página PDF<h1>');
$mpdf->Output();