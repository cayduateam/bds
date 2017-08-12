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
        $category = Category::pluck('name');
        return view('dashboard.news.add',['category' => $category]);
    }
    public function postaddNews(){
//        $this->validate($request,[
//            'title' => 'required|min:5|unique:news,title' //title min 5 ky tu va co ten khong trung nhau
//        ],[
//            'title.required' => 'Vui lòng nhập tiêu đề',
//            'title.unique' => 'Tiêu đề đã tồn tại',
//            'title.min' => 'Tiêu đề quá ngắn'
//        ]);

//        $news = new News;
//        $news->title = $request->title;
    }
}
