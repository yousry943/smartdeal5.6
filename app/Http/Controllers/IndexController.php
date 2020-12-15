<?php

namespace App\Http\Controllers;

use App\Providers\AppServiceProvider;
use Illuminate\Http\Request;
use Redirect;

use App\category;
use App\language;
use App\CategoriesTechicalAnalysis;
use App\our_traders_news_TechicalAnalysis;
use App\User;
use App\story;
use App\report;
use App\news;
use App\Slider;
use App\Gallery;
use App\Gallerycategory;
use App\note;

class IndexController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // protected $test;

    public function __construct()
    {
       // $this->test = $test;

         // $this->middleware('auth');

                //$this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {



$lang = \Mcamara\LaravelLocalization\Facades\LaravelLocalization::getCurrentLocale();
@$get_lang = language::where('langcode','=',$lang)->get();
@$get_lang_id = $get_lang->first()->id;
@$get_category_news = category::where('lang_id','=',$get_lang_id)->get();
 @$get_category_TechicalAnalysis = CategoriesTechicalAnalysis::where('lang_id','=',$get_lang_id)->get();

  // @$get_OurTraders_have_techical_analyses = our_traders_news_TechicalAnalysis::with('get_user')->get();
$get_OurTraders_have_techical_analyses = User::has('get_news_TechicalAnalysis')->get();
// $users = User::with('get_news_TechicalAnalysis')->get()->sortByDesc('latestPost.created_at');
$get_storys = story::where('lang_id','=',$get_lang_id)
->orderBy('id', 'desc')
->take(3)->get();
$get_storys_all = story::where('lang_id','=',$get_lang_id)
->orderBy('id', 'desc')
->get();
//dd($get_storys);
$get_report = report::where('lang_id','=',$get_lang_id)->get();
$get_sliders = Slider::where('lang_id','=',$get_lang_id)->get();
$get_note = note::where('lang_id','=',$get_lang_id)
->orderBy('id', 'desc')
->get();


$get_Gallerycategorys = Gallerycategory::where('lang_id','=',$get_lang_id)->get();

$get_Gallerys = Gallery::with('get_categories')->where('lang_id','=',$get_lang_id)->get();


$get_news = news::where('lang_id','=',$get_lang->first()->id)
->orderBy('created_at', 'desc')
->take(6)
->get();

$get_ourTraders_have_techical_analyses = our_traders_news_TechicalAnalysis::where('lang_id','=',$get_lang->first()->id)
->orderBy('created_at', 'desc')
->take(6)
->get();

$get_ourTraders_have_techical_analyses_active = $get_ourTraders_have_techical_analyses->first()->id;



      return view('website.pages-front.index',compact('get_storys_all','get_note','get_Gallerycategorys','get_Gallerys','get_ourTraders_have_techical_analyses_active','get_ourTraders_have_techical_analyses','get_sliders','get_report','get_news','get_storys','get_OurTraders_have_techical_analyses','get_category_news','get_category_TechicalAnalysis'));


    }
}
