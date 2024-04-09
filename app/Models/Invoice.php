<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'payment_method',
        'total_price',
        'time',
        'invoice_status_id',
        'order_id',
    ];

    public function invoice_status()
    {
        return $this->belongsTo(Invoice_status::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
