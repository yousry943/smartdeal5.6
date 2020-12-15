<?php

namespace App\Http\Controllers;

use App\news_techical_analyses;
use App\language;
use Illuminate\Http\Request;

class NewsTechicalAnalysesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($categories_id)
    {
        //

        $lang = \Mcamara\LaravelLocalization\Facades\LaravelLocalization::getCurrentLocale();
        @$get_lang = language::where('langcode','=',$lang)->get();

        $get_news = news_techical_analyses::where('lang_id','=',$get_lang->first()->id)
        ->where('categories_id','=',$categories_id)
        ->has('get_categories')
        ->orderBy('created_at', 'desc')
        ->get();
        //dd($get_news);
          $title = $get_news->first()->get_categories()->first()->name;


         return view('website.pages-front.TechicalAnalysis.index',compact('title','get_news'));
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
     * @param  \App\news_techical_analyses  $news_techical_analyses
     * @return \Illuminate\Http\Response
     */
    public function show(news_techical_analyses $news_techical_analyses)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\news_techical_analyses  $news_techical_analyses
     * @return \Illuminate\Http\Response
     */
    public function edit(news_techical_analyses $news_techical_analyses)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\news_techical_analyses  $news_techical_analyses
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, news_techical_analyses $news_techical_analyses)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\news_techical_analyses  $news_techical_analyses
     * @return \Illuminate\Http\Response
     */
    public function destroy(news_techical_analyses $news_techical_analyses)
    {
        //
    }
}
