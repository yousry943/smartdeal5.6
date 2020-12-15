<?php

namespace App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;

use App\MenuCategory;
use App\language;
use Illuminate\Http\Request;

class MenuCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Gallerycategorys =  MenuCategory::with('get_language')->get();

      return view('admin.MenuCategory.index',compact('Gallerycategorys'));
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
        return view('admin.MenuCategory.create',compact('languages'));
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
        $news = new MenuCategory();


       $news->name = $request->name;
       $news->lang_id = $request->language;

       $news->save();
         return redirect('/admin/menuCategory')->withFlashMessage('Menu Category has been Stored');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MenuCategory  $menuCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $Gallerycategorys = MenuCategory::where('id','=',$id)->get();
        $languages = language::all();

        // dd($news);
        return view('admin.MenuCategory.edit',compact('Gallerycategorys','languages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MenuCategory  $menuCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request , $id)
    {
        //
        $Gallerycategory= MenuCategory::find($id);

        $Gallerycategory->name = $request->name;
        $Gallerycategory->lang_id = $request->language;



        $Gallerycategory->save();

        return redirect('/admin/menuCategory')->withFlashMessage('Menu Category Edited !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MenuCategory  $menuCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $news = MenuCategory::find($id);
        $news->delete();
       return redirect('/admin/menuCategory')->withFlashMessage('Menu Category Deleted');
    }
}
