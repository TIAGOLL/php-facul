<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Cost;

class productController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $costs = Cost::all();
        return view('home')->with('product', $products)->with('cost', $costs);
    }
}
