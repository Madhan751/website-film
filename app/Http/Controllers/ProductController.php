<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        return view('admin', [
            'genres' => Genre::get(),
            'products' => Product::with(['genres'])->get(),

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // dd($genrez);      
        $validated = $request->validate([
            'title' => 'required',
            'release' => 'required',
            'link' => 'required',
            'genre' => 'required',
            'description' => 'required',
            'country' => 'required',
            'image' => 'required',
        ]);

        $product = Product::create($validated);
        $product->genres()->attach($request->genre);

      
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
            return view('tonton', [
                'product' => $product,
                'products' => Product::all(),
                'genres' => Genre::all(),
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
