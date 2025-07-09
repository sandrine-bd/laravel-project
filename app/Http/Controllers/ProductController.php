<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function index(): View {
        $products = DB::select('select * from products');
        return view('products', ['products' => $products]);
    }

    public function showProduct($id): string {
        return view('product-details', ['id' => $id]);
    }
}
