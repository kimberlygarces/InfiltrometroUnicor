<?php
require '../vendor/autoload.php';
use Spipu\Html2Pdf\Html2Pdf;
$prueba = $_GET['prueba'];

//recoger buffer de pagina a crear en pdf
ob_start();
require_once 'pdf.php';
$html = ob_get_clean();

$h2p = new Html2Pdf('p','A4','es','true','UTF-8');
$h2p->writeHTML($html);
$h2p->output($prueba.".pdf");
?>
