<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;

class FounderBrandController extends Controller
{
    //

    public function index($founder_id)
    {
        $brands = Brand::get()->where('founder_id',$founder_id);
        if(is_null($brands)) {
            return response()->json('Data not found', 404);
        }
        return response()->json($brands);
    }


}
