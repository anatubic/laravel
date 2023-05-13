<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
//use App\Http\Resources\ProductResource;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $products = Product::all();
        return $products;
        //return ProductResource::collection($products);
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($product_id)
    {
        //
        $product = Product::find($product_id);
        if (is_null($product)) {
            return response()->json('Data not found', 404);
        }
        return response()->json($product);
        //return new ProductResource($product);
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
    public function update(Request $request, Product $product)
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
