<?php

namespace App\Http\Controllers;

use App\news;
use App\language;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($categories_id)
    {
      $lang = \Mcamara\LaravelLocalization\Facades\LaravelLocalization::getCurrentLocale();
      @$get_lang = language::where('langcode','=',$lang)->get();

      $get_news = news::where('lang_id','=',$get_lang->first()->id)
      ->where('categories_id','=',$categories_id)
      ->with('get_categories')
      ->orderBy('created_at', 'desc')
      ->get();
       $title = $get_news->first()->get_categories()->first()->name;

        //dd($get_news);

       return view('website.pages-front.news.index',compact('title','get_news'));

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
