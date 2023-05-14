<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Resources\ProductResource;
use App\Http\Resources\ProductCollection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return new ProductCollection($products);
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
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'shade' => 'required',
            'description' => 'required',
            'purchased_at' => 'required',
            'day_of_purchase' => 'required|date_format:Y-m-d',
            'brand_id' => 'required',
            'user_id' => 'required'
        ]);

        if($validator->fails()){
            return response()->json($validator->errors());
        }

        $product = Product::create([
            'name' => $request->name,
            'shade' => $request->shade,
            'description' => $request->description,
            'purchased_at' => $request->purchased_at,
            'day_of_purchase' => $request->day_of_purchase,
            'brand_id' => $request->brand_id,
            'user_id' => Auth::user()->id
        ]);

        return response()->json(['Success.', new ProductResource($product)]);
    }

    /**
     * Display the specified resource.
     */
    public function show($product_id)
    {
        $product = Product::find($product_id);
        if (is_null($product)) {
            return response()->json('Data not found', 404);
        }
        return new ProductResource($product);
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
    public function update(Request $request, int $product_id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'shade' => 'required',
            'description' => 'required',
            'purchased_at' => 'required',
            'day_of_purchase' => 'required|date_format:Y-m-d',
            'brand_id' => 'required',
            'user_id' => 'required'
        ]);

        if($validator->fails()){
            return response()->json($validator->errors());
        }

        $product = Product::find($product_id);
        $product->name = $request->name;
        $product->shade = $request->shade;
        $product->description = $request->description;
        $product->purchased_at = $request->purchased_at;
        $product->day_of_purchase = $request->day_of_purchase;
        $product->brand_id = $request->brand_id;
        $product->user_id = $request->user_id;

        $product->save();

        return response()->json(['Updated', new ProductResource($product)]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $product_id)
    {
        $product = Product::findOrFail($product_id);
        if (is_null($product)) {
            return response()->json('It does not exist', 404);
        }
        $product->delete();

        return response()->json(['Success']);
    }
}
