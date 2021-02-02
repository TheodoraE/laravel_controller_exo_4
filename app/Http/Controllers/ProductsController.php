<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function products(){
        $prodData = Product::all();
        return view('pages/products', compact('prodData'));
    }
}
