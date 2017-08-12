<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\News;

class NewsController extends Controller
{
    public function getList(){
        $news = News::orderBy('id','desc')->paginate(20);
        return view('dashboard.news.list',['news' => $news]);
    }
    public function getaddNews(){
        return view('dashboard.news.add');
    }
}
