<?php

namespace App\Models\Model;

use App\Models\Model\Review;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    public function reviews(){
        return $this->hasMany(Review::class);
    }




}
