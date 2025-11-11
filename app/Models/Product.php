<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table="product";
    protected $fillable=['name','image','mrp','sellprice','size','rating'];

     public function carts()
    {
        return $this->hasMany(Cart::class, 'product_id');
    }



}
