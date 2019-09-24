<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $fillable = [
        'user_email', 'cart_id', 'quantity', 'cart_total', 'order_id'
    ];
}
