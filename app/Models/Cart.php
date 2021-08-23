<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $casts = [
        'attribute' => 'array',
    ];
    public function products(){
        return $this->hasOne(Product::class,'id','product_id');
    }
    public function gallery(){
        return $this->hasOne(Gallery::class,'product_id','product_id');
    }
}
