<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table='category';

    public function news(){
    	return $this->belongsToMany('App\News','news_detail','category_id','news_id');
    }

    public function news_enable(){
    	return $this->belongsToMany('App\News','news_detail','category_id','news_id')->where('status',1);
    }
}
