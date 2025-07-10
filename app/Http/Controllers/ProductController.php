<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index() {
        $products = DB::select('SELECT * FROM products');
        return view('products', compact('products'));
    }

    public function showProduct($id): string {
        return view('product-details', ['id' => $id]);
    }
}
