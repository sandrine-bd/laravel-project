<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SellingController extends Controller
{
    public function show(): string {
        return view('selling');
    }
}
