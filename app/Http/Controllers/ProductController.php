<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show(): string {
        return view('products');
    }

    public function showProduct($id): string {
        return view('product-details', ['id' => $id]);
    }
}
