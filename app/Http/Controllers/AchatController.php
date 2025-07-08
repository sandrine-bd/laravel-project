<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AchatController extends Controller
{
    public function show(): string {
        return view('acheter');
    }
}
