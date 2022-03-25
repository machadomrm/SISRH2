<?php

require_once 'dompdf/lib/html5lib/Parser.php';
require_once 'dompdf/src/Autoloader.php';

Dompdf\Autoloader::register();
use Dompdf\Dompdf;
use Dompdf\Options;

$options = new Options();
$options->set('isRemoteEnabled', true);

$dompdf = new Dompdf($options);


$logo="<img src='http://192.168.151.24/sisrh2/img/logo-procape.png'>";









$dompdf->loadHtml($logo);

$dompdf->setPaper('A4', 'landscape');

$dompdf->render();

$dompdf->stream('teste.pdf', array('Attachment' => false));