<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    //

      protected $table='categories';
      protected $fillable = [
          'name', 'lang_id',
      ];

      /**
       * The attributes that should be hidden for arrays.
       *
       * @var array
       */

      public function get_language(){
          return $this->belongsTo('App\language','id','lang_id');
      }

      public  function get_our_traders_news_TechicalAnalysis()
      {
        // dd($user_id);


       return $this->belongsTo('App\our_traders_news_TechicalAnalysis','id','categories_id');



        // return $this->belongsTo('App\our_traders_news_TechicalAnalysis','id','categories_id')->where('user_id','=',$user_id);

      }



}
