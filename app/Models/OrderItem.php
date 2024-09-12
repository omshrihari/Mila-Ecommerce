<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    protected $table = 'order_items';

    protected $fillable = ['order_id', 'product_id', 'product_name', 'product_image', 'product_price', 'product_sku', 'product_qty', 'product_unit_price', 'sub_total'];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
