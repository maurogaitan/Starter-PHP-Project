<?php

use Dompdf\Dompdf;
require '../vendor/autoload.php';
require '../config/database.php';
ob_start();

$products = App\Entities\Product::get();
include "../resources/views/lists.php";



// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml(ob_get_clean());



// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();