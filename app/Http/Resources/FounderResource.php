<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FounderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public static $wrap = 'founder';
    
    public function toArray(Request $request)
    {
        return[
            'id'=>$this->resource->id,
            'name'=>$this->resource->name,
            'year of birth'=>$this->resource->year_of_birth,
            'occupation'=>$this->resource->occupation
        ];
    }
}
