<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{

    public function index()
    {
        $product = Product::all();

        return view('product', ['products' => $product]);
    }

    public function adminIndexProducts()
    {
        $product = Product::all();

        return (['products' => $product]);
    }

    public function indexProducts()
    {
        $products = Product::all();

        return view('pages.productsList', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('pages.editProduct', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
//            'image_name' => 'required|string',
            'price' => 'required|numeric',
        ]);

        $product = Product::findOrFail($id);

        $product->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
//            'image_name' => $request->input('image_name'),
            'price' => $request->input('price'),
        ]);


        return redirect()->route('admin.dashboard')
                         ->with('success', 'Product updated successfully');
    }

    public function destroy($id)
    {
        $contact = Product::findOrFail($id);
        $contact->delete();

    }
}
