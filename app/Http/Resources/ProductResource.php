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
            'shade'=>$this->resource->shade,
            'description'=>$this->resource->description,
            'purchased at'=>$this->resource->purchased_at,
            'day of purchase'=>$this->resource->day_of_purchase,
            'brand'=>new BrandResource($this->resource->brand),
            'user'=>new UserResource($this->resource->user)
        ];
    }
}
