<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SearchProductsController extends Controller
{
    public function index()
    {
        $query_str = request('query');
        $items = Product::when($query_str, function ($query, $query_str) {
                    return $query->where('name', 'LIKE', "%{$query_str}%");
                })->get();
        return view('search', compact('items', 'query_str'));
    }
}
