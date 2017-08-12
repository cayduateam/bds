<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';
    // public $timestamps = false;

    public function news(){
        return $this->belongsToMany('App\News','news-detail');
    }
}
