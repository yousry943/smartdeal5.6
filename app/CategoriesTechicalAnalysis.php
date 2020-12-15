<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriesTechicalAnalysis extends Model
{
    //

    protected $table='categories_techical_analyses';
    protected $fillable = [
        'name', 'lang_id',
    ];

    public  function get_our_traders_news_TechicalAnalysis()
    {
      // dd($user_id);


     return $this->belongsTo('App\our_traders_news_TechicalAnalysis','id','categories_id');



      // return $this->belongsTo('App\our_traders_news_TechicalAnalysis','id','categories_id')->where('user_id','=',$user_id);

    }
}
