<?php

namespace App\Http\Controllers\AdminController;

use App\story;
use App\language;
use Helper;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class StoryController extends Controller
{

    public function index()
    {
        //
        $news = story::all();
         //dd($news);
        return view('admin.Story.index',compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
     return view('admin.Story.create');
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

        $news = new story();

       $news->name = $request->name;
       $news->description = $request->description;
       $news->lang_id = $request->lang_id;
       $news->body = $request->body;



       $news->image = Helper::uploadImage($request->file('image'),'uplodes/newsphoto/');
       $news->save();
         return redirect('/admin/story')->withFlashMessage('Story has been Stored');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\story  $story
     * @return \Illuminate\Http\Response
     */
    public function show(story $story)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\story  $story
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $teams = story::where('id','=',$id)->with('get_language')->get();

        $languages = language::all();



        // dd($news);
        return view('admin.Story.edit',compact('languages','teams','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\story  $story
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //


                $news= story::find($id);

                $news->name = $request->name;
                $news->description = $request->description;
                $news->lang_id = $request->lang_id;
                 $news->body = $request->body;

                if($file = $request->file('image')){
                    @unLink(base_path().'/public/uplodes/newsphoto/'.$news->image);
                    $news->image = Helper::uploadImage($request->file('image'),'uplodes/newsphoto/');
                }else{
                    $news->image = $news->image;
                }
                $news->save();

                return redirect('/admin/story')->withFlashMessage('team Edited !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\story  $story
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $news = story::find($id);
          @unLink(base_path().'/public/uplodes/newsphoto/'.$news->first()->image);
          @unLink(base_path().'/public/uplodes/newsphoto70/'.$news->first()->image);
          $news->delete();
       return redirect('/admin/story')->withFlashMessage('News Deleted');
    }
}
