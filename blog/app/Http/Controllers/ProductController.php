<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

class ProductController extends Controller
{
    //
    public function index() {
        $product = Product::all();
        print_r($product); die();
    }
}
