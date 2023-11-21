<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    public function store(Request $request)
    {


        $product = Product::find($request->get('product_id'));


        if ($product) {
            $productFoundInCart = Cart::where('product_id', $request->get('product_id'))->first();

            if ($productFoundInCart) {
                // Product found in the cart, increment quantity
                $productFoundInCart->increment('quantity');
            } else {
                // Product not found in the cart, create a new cart entry
                $cart = Cart::create([
                    'product_id' => $product->id,
                    'quantity' => 1,
                    'price' => $product->sale_price,
                    'user_id' => auth()->user()->id,
                ]);
            }

            //check the number of user cart items
            $userItems = Cart::where('user_id', auth()->user()->id)->sum('quantity');
            if (isset($cart) || isset($productFoundInCart)) {
                return ['message' => 'Cart Updated',
                    'items'=> $userItems];
            } else {
                return response()->json(['error' => 'Failed to update cart'], 500);
            }
        } else {
            return response()->json(['error' => 'Product not found'], 404);
        }



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
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
