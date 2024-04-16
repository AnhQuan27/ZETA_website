<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_type extends Model
{
    use HasFactory;

    protected $fillable = [
        'color',
        'size',
        'weight',
        'sold',
        'inventory',
        'product_id',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
