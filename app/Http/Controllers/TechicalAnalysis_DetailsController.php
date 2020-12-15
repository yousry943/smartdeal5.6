<?php

namespace App\Http\Controllers;

use App\news_techical_analyses;
use App\language;
use Illuminate\Http\Request;

class TechicalAnalysis_DetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {

      // dd($id);
      $lang = \Mcamara\LaravelLocalization\Facades\LaravelLocalization::getCurrentLocale();
      @$get_lang = language::where('langcode','=',$lang)->get();

      $get_data = news_techical_analyses::where('id','=',$id)

      ->get();

      $Latest_Posts = news_techical_analyses::orderBy('created_at', 'desc')
      ->limit(4)
      ->get();
        $title = $get_data->first()->get_categories()->first()->name;

         //dd($title);
      //
      return view('website.pages-front.TechicalAnalysis_Detalis.index',compact('title','get_data','Latest_Posts'));

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\news  $news
     * @return \Illuminate\Http\Response
     */
    public function show(news $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\news  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(news $news)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\news  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, news $news)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\news  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(news $news)
    {
        //
    }
}
