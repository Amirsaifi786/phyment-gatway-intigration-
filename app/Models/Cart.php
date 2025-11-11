<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public $timestamps = false;
    protected $table = 'cart';
    protected $fillable = [
        'product_id',
        'user_id',
        'price',
        'mrp',
        'quantity',
        'size',
        'date',
    ];
       public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }


}
