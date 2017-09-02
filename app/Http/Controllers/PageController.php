<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\ProductCategory;
use App\Product;
use App\Category;
use App\ProductDetail;
use App\ProductImage;
use App\ProductImageDetail;
use App\News;
use App\About;
use App\Footer;

class PageController extends Controller
{
    public function __construct(){
        $parentProCat = ProductCategory::select('id','name','alias')->where('parent_id',0)->where('status',1)->get();
        $proCat = array();
        foreach($parentProCat as $parent){
            $proCat[$parent->id]['alias'] = $parent->alias;
            $proCat[$parent->id]['name'] = $parent->name;
            $submenu = ProductCategory::select('id','name','alias')->where('parent_id',$parent->id)->where('status',1)->get();
            foreach($submenu as $sub){
                $proCat[$parent->id]['sub'][$sub->id]['name'] = $sub->name;
                $proCat[$parent->id]['sub'][$sub->id]['alias'] = $sub->alias;
            }
        }
        $category = Category::select('name','alias')->where('parent_id',0)->where('status',1)->get();

        $lastest_news = News::select('title','alias','hit')->where('status',1)->orderBy('hit','desc')->orderBy('created_at','desc')->get();

        view()->share('proCat',$proCat);
        view()->share('category',$category);
        view()->share('lastest_news',$lastest_news);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.index');
    }

    /*
     * Frontend view
     */
    public function viewCategory($category_alias){

        $sub = ProductCategory::select('id','name','alias','hit')
        ->whereIn('parent_id',function($query) use ($category_alias){
            $query->select('id')->from('product_category')->where('alias',$category_alias);
        })->get();
        return view('pages.category',compact('sub'));
    }

    public function about(){

        echo 'about';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
