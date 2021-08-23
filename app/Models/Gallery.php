<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    public function product(){
        return $this->hasOne(Product::class);
    }

    public function cart(){
        return $this->hasOne(Cart::class,'product_id');
    }
}
