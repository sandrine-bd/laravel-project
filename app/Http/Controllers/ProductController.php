<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
Use App\Models\Category;

class ProductController extends Controller
{
    public function index()
    {
        return view('products', [
            'products' => Product::with('category')->paginate(20)
        ]);
    }

    public function showProduct($id)
    {
        $product = Product::where('id', $id)->firstOrFail();
        return view('product-details', ['product' => $product]);
    }
}
