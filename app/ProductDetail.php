<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ProductCategory;
use App\Product;
use App\ProductDetail;

class ProductDetail extends Model
{
    protected $table="product-details";
    public $timestamps = false;
}
