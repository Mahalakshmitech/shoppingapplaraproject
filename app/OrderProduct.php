<?php
namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
  

    protected $table = 'order_product';  // Specify the table name if it's different from the default (order_product)

    protected $fillable = [
        'product_name', 'quantity', 'rate', 'total_price'
    ];
}
