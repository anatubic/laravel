<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\FounderResource;

class BrandResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request)
    {
        return[
            'id'=>$this->resource->id,
            'name'=>$this->resource->name,
            'year of launch'=>$this->resource->year_of_launch,
            'headquarters'=>$this->resource->headquarters,
            'founder'=>new FounderResource($this->resource->founder)
        ];
        //return parent::toArray($request);
        
    }
}
