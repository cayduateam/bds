<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected $table="product_category";

    public function product(){
    	// return $this->hasMany('App\Product','category_id','id');
    	return $this->belongsToMany('App\Product','product_details','product_category_id','product_id');
    }

    public function product_enable(){
    	// return $this->hasMany('App\Product','category_id','id');
    	return $this->belongsToMany('App\Product','product_details','product_category_id','product_id')->where('status',1);
    }

}
