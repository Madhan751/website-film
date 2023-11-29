<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Product;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        $products = Product::get();
        return view('welcome', [
            'products' => $products,
            'genres' => Genre::get(),
        ]);
    }
}
