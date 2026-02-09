<?php

namespace App\Models;

use App\Models\ProductImage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{

    use SoftDeletes;

     protected $fillable =
    [
        'name',
        'price',
        'stock',
        'category',
        'description',
    ];

    public function image()
    {
        return $this->hasMany(ProductImage::class);
    }
}
