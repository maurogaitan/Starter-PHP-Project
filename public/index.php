<?php


require '../vendor/autoload.php';
require '../config/database.php';



use App\Controllers\ProductController;

$product = new ProductController();

$product->get();



