<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Category;
use App\NewsDetail;

class NewsController extends Controller
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
        $data = array();
        $news = News::paginate(20);
        return view('dashboard.news.index',compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $url = \route('news.store');
        $category = Category::where('parent_id',0)->where('status',1)->get();
        
        return view('dashboard.news.add',compact('category','url'));
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
            'title' => 'required|min:5'
        ],[
            'title.required' => 'Please input title'
            //more later
        ]);

        $news = new News;
        $news->title = $request->title;
        // $news->parent_id = $request->parent_id;
        $news->alias = alias($news->title);
        $news->summary = $request->summary;
        $news->content = $request->content;
        $news->hit = 0;
        
        $news->metakey = $request->metakey;
        $news->metades = $request->metades;
        $news->metarobot = $request->metarobot;
        $news->status = $request->status;

        $news->image = null;
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $filename = bodauimage($file->getClientOriginalName());
            $newname = strtotime(date('Y-m-d H:i:s')).'_'.$filename;
            $file->move('images/news',$newname);
            $news->image = $newname;
        }

        $news->image_slide = null;
        if($request->hasFile('image_slide'))
        {
            $file = $request->file('image_slide');
            $filename = bodauimage($file->getClientOriginalName());
            $newname = strtotime(date('Y-m-d H:i:s')).'_'.$filename;
            $file->move('images/news/slide',$newname);
            $news->image_slide = $newname;
        }
        $news->save();

        $news_id = $news->id;
        foreach($request->category_id as $category_id){
            $detail = new NewsDetail;
            $detail->news_id = $news_id;
            $detail->category_id = $category_id;
            $detail->save();
        }
        session()->flash('message', 'Successfully added!');
        return redirect()->route('news.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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
        $news = News::find($id);
        $news->delete();

        session()->flash('message','Delete done');
        return redirect()->route('news.index');
    }
}
