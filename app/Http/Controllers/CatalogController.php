<?php

namespace App\Http\Controllers;

use App\Models\Product;

class CatalogController extends Controller
{
    public function index()
    {
        $products = Product::paginate(10);
        return view('catalog', compact('products'));
    }
}
