<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Product;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {

        $search = request('search');
        $products_search = null;

        // Jika ada pencarian maka
        if(request('search')) {
            $products_search = Product::where('title', 'like', "%{$search}%")->orWhereHas('genres', function($q){
                $q->where('name','like', '%' .request('search'). '%');
            })->orWhere('country', 'like', "%{$search}%")->paginate(40);
        }

        // Mencari product terbaru
        $product = Product::latest()->paginate(40);

        // Mencari $product yang berelasi dengan $genre yang memiliki nama 'Anime'
        $products_anime = Product::whereHas('genres', function($q){  
            $q->where('name', 'Anime');
        })->paginate(40);

        // Membuat array dari kolom country yang berada di $product
        $countries = Product::pluck('country')->unique()->sort()->toArray();  // pluck() : get by name of column, unique() : don't repeat, sort() : sort Ascending, toArray() : transform to Array

        return view('welcome', [
            'products' => $product,
            'products_anime' => $products_anime,
            'products_filtered' => $products_search,
            'countries' => $countries,
            'genres' => Genre::orderBy('name', 'asc')->get(),
        ]);
    }

}
