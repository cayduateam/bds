<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = About::first();
        return view('dashboard.about.index',compact('about'));
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
         $this->validate($request,[
            'section1_title' => 'required|min:5'
        ],[
            'section1_title.required' => 'Please input at least 1 section'
            //more later
        ]);

        $about = new About;
        $about->section1_title = $request->section1_title;
        $about->section1 = $request->section1;
        $about->section2_title = $request->section2_title;
        $about->section2 = $request->section2;
        $about->section3_title = $request->section3_title;
        $about->section3 = $request->section3;
        $about->section4_title = $request->section4_title;
        $about->section4 = $request->section4;
        $about->section5_title = $request->section5_title;
        $about->section5 = $request->section5;

        $about->image = null;
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $filename = bodauimage($file->getClientOriginalName());
            $newname = strtotime(date('Y-m-d H:i:s')).'_'.$filename;
            $file->move('images/about',$newname);
            $about->image = $newname;
        }
        $about->save();
        session()->flash('message', 'Successfully edit about!');
        return redirect()->route('about.index');
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
        $this->validate($request,[
            'section1_title' => 'required|min:5'
        ],[
            'section1_title.required' => 'Please input at least 1 section'
            //more later
        ]);

        $about = About::find(1);
        $about->section1_title = $request->section1_title;
        $about->section1 = $request->section1;
        $about->section2_title = $request->section2_title;
        $about->section2 = $request->section2;
        $about->section3_title = $request->section3_title;
        $about->section3 = $request->section3;
        $about->section4_title = $request->section4_title;
        $about->section4 = $request->section4;
        $about->section5_title = $request->section5_title;
        $about->section5 = $request->section5;

        $about->image = $request->old_image;
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $filename = bodauimage($file->getClientOriginalName());
            $newname = strtotime(date('Y-m-d H:i:s')).'_'.$filename;
            $file->move('images/about',$newname);
            $about->image = $newname;
        }
        $about->save();
        session()->flash('message', 'Successfully edit About!');
        return redirect()->route('about.index');
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
