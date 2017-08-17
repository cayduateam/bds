<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductCategory;
use App\Product;
use App\Category;
use App\ProductDetail;
use App\ProductImage;
use App\ProductImageDetail;

class ProductController extends Controller
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
        $product = Product::where('status',1)->get();
        return view('dashboard.product.index',compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $url = \route('product.store');
        $parent = ProductCategory::where('parent_id',0)->where('status',1)->get();
        $category=[];
        foreach($parent as $pa){
            $category[$pa->id]['name'] = $pa->name;
            $category[$pa->id]['alias'] = $pa->alias;
            $category[$pa->id]['status'] = $pa->status;
            $category[$pa->id]['created_at'] = $pa->created_at;

            $submenu = ProductCategory::where('parent_id',$pa->id)->where('status',1)->get();
            foreach($submenu as $sub){
                $category[$pa->id]['sub'][$sub->id]['name'] = $sub->name;
                $category[$pa->id]['sub'][$sub->id]['alias'] = $sub->alias;
                $category[$pa->id]['sub'][$sub->id]['status'] = $sub->status;
                $category[$pa->id]['sub'][$sub->id]['created_at'] = $sub->created_at;
            }
        }
        return view('dashboard.product.add',compact('parent','category','url'));
    }
    public function parentChange(Request $request){
        $sub_parent = ProductCategory::select('id','name')->where('parent_id',$request->id)->where('status',1)->get();
        $res = '';
        foreach($sub_parent as $cate){
            $sub_sub_parent = ProductCategory::select('id','name')->where('parent_id',$cate->id)->where('status',1)->get();
            if(count($sub_sub_parent) > 0){
                $res .= '<optgroup label="'.$cate->name.'">';
                foreach($sub_sub_parent as $sub){
                    $res .= '<option value="'.$cate->id.'">'.$cate->name.'</option>';
                }
                $res .= '</optgroup>';
            }
        }
        return $res;
        return view('dashboard.product-category.block.list',compact('id'))->render();
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
            'title' => 'required|unique:product'
        ],[

            'title.required' => 'Please input name',
            'title.unique' => 'Title already exists'
        ]);

        $product = new Product;
        $product->title = $request->title;
        $product->alias = alias($product->title);
        $product->price = $request->price;
        $product->sale = $request->sale;
        $product->summary = $request->summary;
        $product->content = $request->content;
        $product->metakey = $request->metakey;
        $product->metades = $request->summary;
        $product->metarobot = $request->metarobot;
        $product->status = $request->status;

        // $product->image = null;
        if($request->hasFile('image'))
        {
            $files = $request->file('image');

            foreach($files as $file){
                $folder = rand(1,10);
                $filename = bodauimage($file->getClientOriginalName());
                $newname = strtotime(date('Y-m-d H:i:s', strtotime("+2 second"))).'_'.$filename;
                $file->move('images/product/'.$folder.'/',$newname);

                $image = new ProductImage;
                $image->link = $folder.'/'.$newname;
                $image->save();
                $image_id[] = $image->id;

                $product->image = $image->link;
            }
            
        }

        $product->save();

        $product_id = $product->id;
        foreach($request->sub_parent_id as $product_category_id){
            $detail = new ProductDetail;
            $detail->product_id = $product_id;
            $detail->product_category_id = $product_category_id;
            $detail->save();
        }
        if(isset($image_id) && count($image_id) > 0){
            foreach($image_id as $id){
                $image_detail = new ProductImageDetail;
                $image_detail->product_id = $product_id;
                $image_detail->product_image_id = $id;
                $image_detail->save();
            }
        }

        session()->flash('message', 'Successfully added!');
        return redirect()->route('product.index');
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
        $news = Product::find($id);
        $news->delete();

        session()->flash('message','Delete done');
        return redirect()->route('product.index');
    }
}
