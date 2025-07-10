<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products', compact('products'));
    }

    public function showProduct($id)
    {
        $product = Product::where('id', $id)->firstOrFail();
        return view('product-details', ['product' => $product]);
    }
}
