<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;

use App\Gallerycategory;
use App\language;
use Illuminate\Http\Request;

class GallerycategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //Gallerycategory
          $Gallerycategorys =  Gallerycategory::with('get_language')->get();
      

        return view('admin.Gallerycategory.index',compact('Gallerycategorys'));
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
            return view('admin.Gallerycategory.create',compact('languages'));
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
        $news = new Gallerycategory();


       $news->name = $request->name;
       $news->lang_id = $request->language;

       $news->save();
         return redirect('/admin/Gallerycategory')->withFlashMessage('Gallery category has been Stored');




    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gallerycategory  $gallerycategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //


        $Gallerycategorys = Gallerycategory::where('id','=',$id)->get();
        $languages = language::all();

        // dd($news);
        return view('admin.Gallerycategory.edit',compact('Gallerycategorys','languages'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gallerycategory  $gallerycategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request , $id)
    {
        //

        $Gallerycategory= Gallerycategory::find($id);

        $Gallerycategory->name = $request->name;
        $Gallerycategory->lang_id = $request->language;



        $Gallerycategory->save();

        return redirect('/admin/Gallerycategory')->withFlashMessage('Gallery category Edited !!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gallerycategory  $gallerycategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $news = Gallerycategory::find($id);
        $news->delete();
       return redirect('/admin/Gallerycategory')->withFlashMessage('Gallerycategory Deleted');
    }
}
