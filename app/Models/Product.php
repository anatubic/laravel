<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

    public function product(){
        return $this->belongsTo(Brand::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
