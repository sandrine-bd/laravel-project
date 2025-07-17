<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::all();
        $query = Product::with('category'); // Eager loading pour éviter N+1

        // Filtre par recherche de nom
        if ($request->filled('search')) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        // Filtre par catégories multiples
        if ($request->filled('category_ids')) {
            $query->whereIn('category_id', $request->category_ids);
        }
        $products = $query->get();

        return view('products', compact('products', 'categories'));
    }

    public function showProduct($id)
    {
        $product = Product::where('id', $id)->firstOrFail();
        return view('product-details', ['product' => $product]);
    }
}
