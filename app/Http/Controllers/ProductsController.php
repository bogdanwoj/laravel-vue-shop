<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductsController extends Controller
{

    public function index()
    {
        $product = Product::all();

        return view('product', ['products' => $product]);
    }

    public function adminIndexProducts()
    {
        if (Auth::check()) {
            // Check if the authenticated user is an admin
            $isAdmin = Auth::user()->role === 'admin';
            if ($isAdmin) {


                $product = Product::all();

                return (['products' => $product]);


            } else {
                // If the authenticated user is not an admin, you can redirect or show an error page
                return redirect()
                    ->route('login')
                    ->with('error', 'You do not have permission to access the admin dashboard.');
            }
        }

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

        if (Auth::check()) {
            // Check if the authenticated user is an admin
            $isAdmin = Auth::user()->role === 'admin';
            if ($isAdmin) {


                $product = Product::findOrFail($id);
                return view('pages.editProduct', compact('product'));


            }else {
                // If the authenticated user is not an admin, you can redirect or show an error page
                return redirect()
                    ->route('login')
                    ->with('error', 'You do not have permission to access the admin dashboard.');
            }
        }

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

        if (Auth::check()) {
            // Check if the authenticated user is an admin
            $isAdmin = Auth::user()->role === 'admin';
            if ($isAdmin) {

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

            } else {
                // If the authenticated user is not an admin, you can redirect or show an error page
                return redirect()
                    ->route('login')
                    ->with('error', 'You do not have permission to access the admin dashboard.');
            }
        }


    }

    public function destroy($id)
    {
        if (Auth::check()) {
            // Check if the authenticated user is an admin
            $isAdmin = Auth::user()->role === 'admin';
            if ($isAdmin) {

                $product = Product::findOrFail($id);
                $product->delete();


            } else {
                // If the authenticated user is not an admin, you can redirect or show an error page
                return redirect()
                    ->route('login')
                    ->with('error', 'You do not have permission to access the admin dashboard.');
            }
        }

    }
}
