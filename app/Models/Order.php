<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $fillable = ['order_id', 'invoice_no', 'user_ip', 'session_id', 'merchant_user_id', 'name', 'country', 'state', 'city', 'pincode', 'street', 'mobile', 'email', 'order_notes', 'amount', 'order_status', 'payment_method', 'transaction_id', 'payment_status'];

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}
