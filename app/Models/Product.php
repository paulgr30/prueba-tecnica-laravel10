<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price', 'stock', 'product_brand_id'];




    public function productBrand()
    {
        return $this->belongsTo(ProductBrand::class);
    }
}
