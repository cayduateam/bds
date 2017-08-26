<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductCategory;
use App\Product;
use App\Category;
use App\ProductDetail;

class ProductCategoryController extends Controller
{
    public function __construct(){
        $task = null;
        if(strpos(\route::currentRouteName(), 'create') !== false) $task = 'Create';
        if(strpos(\route::currentRouteName(), 'edit') !== false) $task = 'Edit';
        view()->share('task', $task);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        /*view database query
        \DB::connection()->enableQueryLog();
        $data = Product::find(6)->images;
        $queries = \DB::getQueryLog();
        return dd($queries);
        //end view database query */



        $parent = ProductCategory::where('parent_id',0)->where('status',1)->get();
        return view('dashboard.product-category.index',compact('parent'));
    }

    public function ajaxList(Request $request){
        $id = $request->id;
        $parent = ProductCategory::where('parent_id',$id)->where('status',1)->get();
        $data=[];
        foreach($parent as $pa){
            $data[$pa->id]['name'] = $pa->name;
            $data[$pa->id]['alias'] = $pa->alias;
            $data[$pa->id]['status'] = $pa->status;
            $data[$pa->id]['created_at'] = $pa->created_at;

            $submenu = ProductCategory::where('parent_id',$pa->id)->get();
            foreach($submenu as $sub){
                $data[$pa->id]['sub'][$sub->id]['name'] = $sub->name;
                $data[$pa->id]['sub'][$sub->id]['alias'] = $sub->alias;
                $data[$pa->id]['sub'][$sub->id]['status'] = $sub->status;
                $data[$pa->id]['sub'][$sub->id]['created_at'] = $sub->created_at;
            }
        }
        return view('dashboard.product-category.block.list',compact('data'))->render();
    }
    public function parentChange(Request $request){
        
        $sub_parent = ProductCategory::select('id','name')->where('parent_id',$request->id)->where('status',1)->get();
        $res = '<option value="0">--</option>';
        foreach($sub_parent as $cate){
            $res .= '<option value="'.$cate->id.'">'.$cate->name.'</option>';
        }
        return $res;
        return view('dashboard.product-category.block.list',compact('id'))->render();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parent = ProductCategory::where('parent_id',0)->where('status',1)->get();
        $url = \route('product-category.store');
        return view('dashboard.product-category.add',compact('parent','url'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|unique:product_category'
        ],[

            'name.required' => 'Please input name',
            'name.unique' => 'Name already exists'
        ]);
        $category = new ProductCategory;
        $category->name = $request->name;
        $category->alias = alias($category->name);
        $category->summary = $request->summary;
        
        $category->path = null;
        if($request->parent_id != 0){
            $category->path = $request->parent_id.'-';
            $category->parent_id = $request->parent_id;
        }
        if($request->sub_parent_id != 0){
            $category->path .= $request->sub_parent_id.'-';
            $category->parent_id = $request->sub_parent_id;
        }
        $category->metakey = $request->metakey;
        $category->metades = $request->summary;
        $category->metarobot = $request->metarobot;
        $category->status = $request->status;

        $category->image = null;
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $filename = bodauimage($file->getClientOriginalName());
            $newname = strtotime(date('Y-m-d H:i:s')).'_'.$filename;
            $file->move('images/productCategory',$newname);
            $category->image = $newname;
        }
        $category->save();

        session()->flash('message', 'Successfully added!');
        return redirect()->route('product-category.index');
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
        $news = ProductCategory::find($id);
        $news->delete();

        session()->flash('message','Delete done');
        return redirect()->route('product-category.index');
    }

}
