<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_image extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'product_type_id',
    ];

    public function product_type()
    {
        return $this->belongsTo(Product_type::class);
    }

}
