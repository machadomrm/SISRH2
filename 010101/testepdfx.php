<?php

use Dompdf\Dompdf;
use Dompdf\Options;

require_once 'dompdf/autoload.inc.php';

$options = new Options();
$options->set('isRemoteEnabled', true);

$dompdf = new Dompdf($options);

$dompdf->loadHtml("
    
    <img src='http://192.168.151.24/sisrh2/img/logo-procape.png'>
");

$dompdf->setPaper('A4', 'landscape');

$dompdf->render();

$dompdf->stream('teste.pdf', array('Attachment' => false));