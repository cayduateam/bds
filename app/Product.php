<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ProductCategory;
use App\Product;
use App\ProductDetail;

class Product extends Model
{
    protected $table="product";

    public function category(){
    	return $this->belongsToMany('App\ProductCategory','product_details','product_id','product_category_id');
    }

    public function category_enable(){
    	return $this->belongsToMany('App\ProductCategory','product_details','product_id','product_category_id')->where('status',1);
    }

    public function images(){
    	return $this->hasMany('App\ProductImage','product_id','id');
    }
}
