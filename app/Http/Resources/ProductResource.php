<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public static $wrap = 'product';

    public function toArray($request)
    {
        return[
            'id'=>$this->resource->id,
            'name'=>$this->resource->name,
            'description'=>$this->resource->description,
            'brand'=>new BrandResource($this->resource->brand),
            'user'=>new UserResource($this->resource->user)
        ];
        //return parent::toArray($request);
    }
}
