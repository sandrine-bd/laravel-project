<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccueilController extends Controller
{
        public function show(): string {
            return view('accueil');
        }
}
