<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Founder extends Model
{
    use HasFactory;

    /* protected $fillable = [
        'name',
        'year_of_birth',
        'profession'
    ]; */

    protected $guarded = [];

    public function founders(){
        return $this->hasMany(Brand::class);
    }

}
