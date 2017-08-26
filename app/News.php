<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table='news';

    public function category(){
    	return $this->belongsToMany('App\Category','news_detail','news_id','category_id');
    }

    public function category_enable(){
    	return $this->belongsToMany('App\Category','news_detail','news_id','category_id')->where('status',1);
    }
}
