<?php

namespace App\Http\Controllers;

use App\our_traders_news_TechicalAnalysis;
use App\language;
use App\User;
use App\CategoriesTechicalAnalysis;
use Illuminate\Http\Request;

class OurTradersDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $user_id;

    public function index($user_id)
    {
      $this->user_id = $user_id;

      $lang = \Mcamara\LaravelLocalization\Facades\LaravelLocalization::getCurrentLocale();
      @$get_lang = language::where('langcode','=',$lang)->get();
      //dd($get_lang);

      $get_OurTraders_have_techical_analyses = User::has('get_news_TechicalAnalysis')->get();

       $get_news = our_traders_news_TechicalAnalysis::where('lang_id','=',$get_lang->first()->id)
        ->where('user_id','=',$user_id)

        ->orderBy('created_at', 'desc')
      ->paginate(6);
      $this->lang_id =  $get_lang->first()->id;
      // dd($this->lang_id );



$categorys = CategoriesTechicalAnalysis::whereHas('get_our_traders_news_TechicalAnalysis', function ($query) {

 $query->where('user_id', '=',$this->user_id);
 $query->where('lang_id', '=',$this->lang_id);

})->get();



       return view('website.pages-front.OurTradersDetails.index',compact('user_id','categorys','get_news','get_OurTraders_have_techical_analyses'));


    }


    public function  data($id)
    {
      $lang = \Mcamara\LaravelLocalization\Facades\LaravelLocalization::getCurrentLocale();
      @$get_lang = language::where('langcode','=',$lang)->get();

      $get_data = our_traders_news_TechicalAnalysis::where('id','=',$id)

      ->get();
      // dd($get_data->user_id);

      $Latest_Posts = our_traders_news_TechicalAnalysis::where('user_id','=',$get_data->first()->user_id)

      ->where('lang_id', '=',$get_lang->first()->id)
      ->orderBy('created_at', 'desc')
      ->limit(6)
      ->get();
      // dd($Latest_Posts);

        $title = $get_data->first()->get_categories()->first()->name;

         //dd($title);
      //
      return view('website.pages-front.TechicalAnalysis_Detalis.index',compact('title','get_data','Latest_Posts'));


    }




    public  function categorydata($user_id,$category_id)
     {

      $this->user_id = $user_id;
       $lang = \Mcamara\LaravelLocalization\Facades\LaravelLocalization::getCurrentLocale();
       @$get_lang = language::where('langcode','=',$lang)->get();
       //dd($get_lang);

       $get_OurTraders_have_techical_analyses = User::has('get_news_TechicalAnalysis')->get();

        $get_news = our_traders_news_TechicalAnalysis::where('lang_id','=',$get_lang->first()->id)
         ->where('user_id','=',$user_id)
         ->where('categories_id','=',$category_id)

         ->orderBy('created_at', 'desc')
         ->paginate(6);


    $this->lang_id =  $get_lang->first()->id;

       $categorys = CategoriesTechicalAnalysis::whereHas('get_our_traders_news_TechicalAnalysis', function ($query) {

       $query->where('user_id', '=',$this->user_id);
        $query->where('lang_id', '=',$this->lang_id);

       })->get();



        return view('website.pages-front.OurTradersDetails.index',compact('user_id','categorys','get_news','get_OurTraders_have_techical_analyses'));


     }
  }
