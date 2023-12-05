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
            'genres' => Genre::orderBy('name', 'asc')->get(),
            'products' => Product::with(['genres'])->paginate(10),

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
            'image' => 'nullable',
        ]);

        if($request->file('image')){
        $validated["image"] = $request->file('image')->store('media/image');
        }

        $product = Product::create($validated);
        $product->genres()->attach($request->genre);

        return back()->with('success', 'Berhasil Menambahkan Film!');;
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
        // dd($product->load('genres'));
        return view('edit', [
            'product' => $product->load('genres'),
            'genres' => Genre::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {

        $validated = $request->validate([
            'title' => 'required',
            'release' => 'required',
            'link' => 'required',
            'description' => 'required',
            'country' => 'required',
            'image' => 'nullable',
        ]);

        if($request->file('image')){
        $validated["image"] = $request->file('image')->store('media/image');
        }

        $product->genres()->sync($request->genre);
        $product->generateSlug();
        $product->update($validated);

        return redirect('admin')->with('success', 'Berhasil Edit!');;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {

        Product::destroy($product->id);

        return back()->with('sucess', 'Berhasil Hapus Genre!');
    }
}
