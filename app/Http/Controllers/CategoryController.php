<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Category;

class CategoryController extends Controller
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
        $parent = Category::where('parent_id',0)->where('status',1)->get();
        $data=[];
        foreach($parent as $pa){
            $data[$pa->id]['name'] = $pa->name;
            $data[$pa->id]['alias'] = $pa->alias;
            $data[$pa->id]['status'] = $pa->status;
            $data[$pa->id]['created_at'] = $pa->created_at;

            $submenu = Category::where('parent_id',$pa->id)->get();
            foreach($submenu as $sub){
                $data[$pa->id]['sub'][$sub->id]['name'] = $sub->name;
                $data[$pa->id]['sub'][$sub->id]['alias'] = $sub->alias;
                $data[$pa->id]['sub'][$sub->id]['status'] = $sub->status;
                $data[$pa->id]['sub'][$sub->id]['created_at'] = $sub->created_at;
            }
        }
        return view('dashboard.category.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parent = Category::where('parent_id',0)->get();
        $url = \route('category.store');
        return view('dashboard.category.add',compact('parent','url'));
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
            'name' => 'required|unique:category'
        ],[

            'name.required' => 'Please input name',
            'name.unique' => 'Name already exists'
        ]);
        $category = new Category;
        $category->name = $request->name;
        $category->parent_id = $request->parent_id;
        $category->alias = alias($category->name);
        $category->summary = $request->summary;
        
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
            //$file->move('images/category',$newname);
            $category->image = $newname;
        }

        $category->save();
        session()->flash('message', 'Successfully added!');
        return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // return view('dashboard.category.edit');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        $parent = Category::where('parent_id',0)->where('status',1)->get();
        $url = \route('category.update',$id);
        return view('dashboard.category.edit',compact('category','parent','url'));
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
        $category = Category::find($id);
        $category->delete();

        session()->flash('message','Delete done');
        return redirect()->route('category.index');
    }
}
