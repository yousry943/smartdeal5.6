<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Facades\App\Helper\IceHelper;
use App\Slider;
use App\language;
use Helper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
//        $this->middleware('admin:admin');
    }
    public function index()
    {
        //
        //$locale= \Illuminate\Support\Facades\App::setLocale('ar');
        $Sliders =  Slider::with('get_language')->get();

        // dd($Sliders);
        return view('admin.Slider.index',compact('Sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //
//        dd(auth()->user());
        // if (Auth::guard('admin')->user()->can('sliders.create')) {
        $languages = language::all();
            return view('admin.Slider.create',compact('languages'));
        // }


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request,[
        //     'title' => 'required|max:50',
        //     'description' => 'required',
        //     'photo' => 'required'
        // ]);

        $slider = new Slider();

        $slider->title = $request->title;
        $slider->description = $request->description;
        $slider->lang_id = $request->language;
        $slider->image = Helper::uploadImage($request->file('image'),'uplodes/newsphoto/');
        $slider->save();
        return redirect('/admin/slider')->withFlashMessage('Slider Added !!');
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


        //
        // if (Auth::guard('admin')->user()->can('sliders.update')) {
            $slider = Slider::find($id);
            $languages = language::all();
            //dd($slider);
            return view('admin.Slider.edit',compact('slider','languages'));
        // }


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


        // $this->validate($request,[
        //     'title' => 'required|max:50',
        //     'description' => 'required'
        // ]);


        $slider = Slider::find($id);

        $slider->title       = $request['title'];
        $slider->description = $request['description'];
        $slider->lang_id = $request['language'];



        if($file = $request->file('image')){
            @unLink(base_path().'/public/uplodes/newsphoto/'.$slider->image);
            $slider->image = Helper::uploadImage($request->file('image'),'uplodes/newsphoto/');
        }else{
            $slider->image = $slider->image;
        }
        $slider->save();

        return redirect('/admin/slider')->withFlashMessage('Slider Edited !!');
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

        // if (Auth::guard('admin')->user()->can('sliders.delete')) {
        //     $slider = Slider::find($id);
        //     unLink(base_path().'/public/uploads/slider/'.$slider->photo);
        //     $slider->delete();
        //     return redirect()->back()->withFlashMessage('Slider Deleted !!');
        // }
        // return redirect()->back();
        $news = Slider::find($id);
          @unLink(base_path().'/public/uplodes/newsphoto/'.$news->first()->image);
          @unLink(base_path().'/public/uplodes/newsphoto70/'.$news->first()->image);
          $news->delete();
       return redirect('/admin/slider')->withFlashMessage('Slider Deleted');
    }
}
