<?php

namespace App\Http\Controllers\AdminController;

use App\note;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $news = note::all();
         //dd($news);
        return view('admin.notes.index',compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.notes.create');
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
        $news = new note();

       $news->name = $request->name;
       $news->title = $request->title;
       $news->lang_id = $request->lang_id;
       $news->description = $request->description;
       $news->save();
         return redirect('/admin/notes')->withFlashMessage('Notes has been Stored');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\note  $note
     * @return \Illuminate\Http\Response
     */
    public function show(note $note)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\note  $note
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $teams = note::where('id','=',$id)->get();





         // dd($teams);
        return view('admin.notes.edit',compact('teams','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\note  $note
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $news= note::find($id);

        $news->name = $request->name;
        $news->title = $request->title;
        $news->lang_id = $request->lang_id;
        $news->description = $request->description;


        $news->save();

        return redirect('/admin/notes')->withFlashMessage('notes Edited !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\note  $note
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $news = note::find($id);
          @unLink(base_path().'/public/uplodes/newsphoto/'.$news->first()->image);
          @unLink(base_path().'/public/uplodes/newsphoto70/'.$news->first()->image);
          $news->delete();
       return redirect('/admin/story')->withFlashMessage('News Deleted');
    }
}
