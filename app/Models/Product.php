<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\AsArrayObject;
use Illuminate\Database\Eloquent\Casts\AsCollection;

class Product extends Model
{
    use HasFactory;
    protected $casts = [
        'attribute' => 'array',
    ];

    public function categories(){
        return $this->belongsToMany(Category::class,'category_products','product_id','category_id');
    }

    public function gallery(){
        return $this->hasOne(Gallery::class);
    }
}
