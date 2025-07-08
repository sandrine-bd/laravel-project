<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompteController extends Controller
{
    public function show(): string {
        return view('mon-compte');
    }
}
