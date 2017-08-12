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
        $this->validate($request,[
            'title' => 'required|min:5|unique:news,title' //title min 5 ky tu va co ten khong trung nhau
        ],[
            'title.required' => 'Vui lòng nhập tiêu đề',
            'title.unique' => 'Tiêu đề đã tồn tại',
            'title.min' => 'Tiêu đề quá ngắn'
        ]);

        $news = new News;
        $news->title = $request->title;
    }


    //section category
    public function getListCat(){
        $parent = Category::where('parent_id',0)->get();
        $data=[];
        foreach($parent as $pa){
            $data[$pa->id]['id'] = $pa->id;
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
        return view('dashboard.category.list',['data' => $data]);
    }

    public function getaddNewsCat(){
        $parent = Category::select('id','name','alias')->where('parent_id',0)->get();
        return view('dashboard.category.add',['parent' => $parent]);
    }

    public function postaddNewsCat(Request $request){
        //validate hmm later
        $category = new Category;
        $category->name = $request->name;
        $category->alias = bodau($request->name);

        $category->metarobot = $request->metarobot;
        $category->metakey = $request->metakey;
        $category->metades = $request->summary;
        $category->summary = $request->summary;
        $category->status = $request->status;
        $category->image = '';
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $filename = bodau($file->getClientOriginalName());
            $newname = strtotime(date('Y-m-d H:i:s')).'_'.$filename;
            $file->move('images/category',$newname);
            $category->image = $newname;
        }
        $category->save();
        return redirect('dashboard/index')->with('message','Thêm danh mục thành công');
    }

    //section category end
}
