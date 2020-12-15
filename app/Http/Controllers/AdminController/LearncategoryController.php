<?php

namespace App\Http\Controllers\AdminController;

use App\learncategory;
use App\language;
use App\MenuCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LearncategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Gallerycategorys =  learncategory::with('get_language','get_menuCategory')->get();
        // dd($Gallerycategorys);

      return view('admin.LearnCategory.index',compact('Gallerycategorys'));
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
        $MenuCategorys = MenuCategory::all();

        return view('admin.LearnCategory.create',compact('languages','MenuCategorys'));
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
        $news = new learncategory();


       $news->name = $request->name;
       $news->menuCategory_id = $request->menuCategory_id;
       $news->lang_id = $request->language;

       $news->save();
         return redirect('/admin/learncategory')->withFlashMessage('Gallery category has been Stored');
    }


    public function edit($id)
    {
        //
        $Gallerycategorys = learncategory::where('id','=',$id)->get();
        $languages = language::all();
        $menuCategory = MenuCategory::all();

        // dd($news);
        return view('admin.LearnCategory.edit',compact('Gallerycategorys','menuCategory','languages'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\learncategory  $learncategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request , $id)
    {
        //
        $Gallerycategory= learncategory::find($id);

        $Gallerycategory->name = $request->name;
        $Gallerycategory->lang_id = $request->language;



        $Gallerycategory->save();

        return redirect('/admin/learncategory')->withFlashMessage('learncategory category Edited !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\learncategory  $learncategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $news = learncategory::find($id);
        $news->delete();
       return redirect('/admin/learncategory')->withFlashMessage('learncategory Deleted');
    }
}
