<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    public $timestamps = false;

    protected $fillable=[
        'product_id',
        'image'
    ];

    public function product()
    {
        return $this -> belongsToMany(Product::class);
    }
}
