<?php
namespace App\Controllers;


use App\Entities\Product;

class ProductController
{
    public function __construct(){


    }
    public static function get(){
        $products = Product::get();
        include "../resources/views/lists.php";
    }
}
