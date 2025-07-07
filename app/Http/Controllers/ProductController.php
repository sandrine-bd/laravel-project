<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show(): string {
        return 'Liste des produits';
    }

    public function showProduct($id) {
        return 'Fiche du produit ' . $id;
    }
}
