<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show(): string {
        return view('acheter');
    }

    public function showProduct: string {
        return view('vendre');
    }
}
