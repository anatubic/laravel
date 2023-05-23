<?php

namespace App\Http\Controllers;

use App\Models\Founder;
use Illuminate\Http\Request;
use App\Http\Resources\FounderResource;
use App\Http\Resources\FounderCollection;

class FounderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        /*$founders = Founder::all();
        return $founders;*/
        $founders = Founder::all();
        return new FounderCollection($founders);
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
    public function show($founder_id)
    {
        $founder = Founder::find($founder_id);
        if (is_null($founder)) {
            return response()->json('Data not found', 404);
        }
        return new FounderResource($founder);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Founder $founder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Founder $founder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Founder $founder)
    {
        //
    }
}
