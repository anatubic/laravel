<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Founder extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'year_of_birth',
        'occupation'
    ];

    //protected $guarded = [];

    public function brands(){
        return $this->hasMany(Brand::class);
    }

}
