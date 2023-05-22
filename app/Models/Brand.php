<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'year_of_launch',
        'headquarters',
        'founder_id'
    ];

    //protected $guarded = [];

    public function founder(){
        return $this->belongsTo(Founder::class, 'founder_id');
    }

    public function products(){
        return $this->hasMany(Product::class);
    }
}
