<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;

    /* protected $fillable = [
        'name',
        'description',
        'day_of_purchase',
        'shade'
    ]; */

    protected $guarded = [];

    public function brand(){
        return $this->belongsTo(Brand::class, 'brand_id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
