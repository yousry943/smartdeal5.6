<?php

namespace App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;
use App\report;
use App\language;
use Helper;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $news = report::all();
         //dd($news);
        return view('admin.Report.index',compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
           return view('admin.Report.create');
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
        $news = new report();

       $news->name = $request->name;
       $news->description = $request->description;
       $news->lang_id = $request->lang_id;



       $news->image = Helper::uploadImage($request->file('image'),'uplodes/newsphoto/');
       $news->save();
         return redirect('/admin/report')->withFlashMessage('Report has been Stored');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\report  $report
     * @return \Illuminate\Http\Response
     */
    public function show(report $report)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\report  $report
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $teams = report::where('id','=',$id)->with('get_language')->get();

        $languages = language::all();



        // dd($news);
        return view('admin.Report.edit',compact('languages','teams','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\report  $report
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $news= report::find($id);

        $news->name = $request->name;
        $news->description = $request->description;
        $news->lang_id = $request->lang_id;

        if($file = $request->file('image')){
            @unLink(base_path().'/public/uplodes/newsphoto/'.$news->image);
            $news->image = Helper::uploadImage($request->file('image'),'uplodes/newsphoto/');
        }else{
            $news->image = $news->image;
        }
        $news->save();

        return redirect('/admin/report')->withFlashMessage('report Edited !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\report  $report
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $news = report::find($id);
          @unLink(base_path().'/public/uplodes/newsphoto/'.$news->first()->image);
          @unLink(base_path().'/public/uplodes/newsphoto70/'.$news->first()->image);
          $news->delete();
       return redirect('/admin/report')->withFlashMessage('report Deleted');
    }
}
