<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;

use App\Gallery;
use App\language;
use App\Gallerycategory;
use Helper;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Gallerys =  Gallery::with('get_language','get_categories')->get();
        //dd($Gallerys);
        return view('admin.Gallery.index',compact('Gallerys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $languages = language::all();
        $categorys = Gallerycategory::all();
        return view('admin.Gallery.create',compact('languages','categorys'));
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

        $news = new Gallery();

       $news->name = $request->name;
       $news->lang_id = $request->language;
       $news->categorie_id = $request->category;




       $news->image = Helper::uploadImage($request->file('image'),'uplodes/newsphoto/');
       $news->save();
         return redirect('/admin/Gallery')->withFlashMessage('Gallery has been Stored');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $Gallery = Gallery::where('id','=',$id)->with('get_language')->get();

        $languages = language::all();
        $categorys = Gallerycategory::all();



        // dd($news);
        return view('admin.Gallery.edit',compact('Gallery','languages','categorys','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $news= Gallery::find($id);

        $news->name = $request->name;
        $news->lang_id = $request->language;
        $news->categorie_id = $request->category;

        if($file = $request->file('image')){
            @unLink(base_path().'/public/uplodes/newsphoto/'.$news->image);
            $news->image = Helper::uploadImage($request->file('image'),'uplodes/newsphoto/');
        }else{
            $news->image = $news->image;
        }
        $news->save();

        return redirect('/admin/Gallery')->withFlashMessage('Gallery Edited !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $news = Gallery::find($id);
          @unLink(base_path().'/public/uplodes/newsphoto/'.$news->first()->image);
          @unLink(base_path().'/public/uplodes/newsphoto70/'.$news->first()->image);
          $news->delete();
       return redirect('/admin/Gallery')->withFlashMessage('News Deleted');

    }
}
