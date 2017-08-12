<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';
//    public $timestamp = false;
    public function category(){
        return $this->belongsTo('App\Category');
//        return $this->belongsToMany('App\Category','news-detail');
    }
}
