<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    /* protected $fillable = [
        'name',
        'year_of_launch',
        'headquarters'
    ]; */

    protected $guarded = [];

    public function brand(){
        return $this->belongsTo(Founder::class);
    }

    public function brands(){
        return $this->hasMany(Product::class);
    }
}
