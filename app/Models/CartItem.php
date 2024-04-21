<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;
    protected $fillable = [
        'amount',
        'total_price',
        'cart_id',
        'product_type_id',
    ];

    public function product_type()
    {
        return $this->belongsTo(Product_type::class);
    }

    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }
}
