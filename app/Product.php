<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'category_id', 'product_name', 'product_code', 'root', 'buying_date', 'buying_price', 'selling_price', 'product_quantity','supplier_id', 'image'
    ];
}
