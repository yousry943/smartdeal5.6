<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class our_traders_news_TechicalAnalysis extends Model
{
    //


            protected $table='our_traders_news__techical_analyses';
            protected $fillable = [
                'user_id','image', 'title','description','lang_id','categories_id','body','status',
            ];

            /**
             * The attributes that should be hidden for arrays.
             *
             * @var array
             */

            public function get_categories(){
                return $this->belongsTo('App\CategoriesTechicalAnalysis','categories_id','id');





                        // return $this->hasOneThrough('App\User', 'App\category');
            }




            public function scopeget_our_traders_news_TechicalAnalysis($query,$user_id){



            //  return $query->where('user_id','=',$user_id)


              // return $query->whereHas('categories_id',function($q){
              //
              // $q->whereHas('our_traders_news_TechicalAnalysis',function($q){
              //
              // $q->where('user_id','=',$q);
              //
              // });
              //
              // });


            //return category::where('id','=',$categories_id);

              // return $this->belongsTo('App\category','categories_id','id');


                //return $this->hasOneThrough('App\category','App\our_traders_news_TechicalAnalysis');

                     // return $this->hasOneThrough('App\our_traders_news_TechicalAnalysis','App\category','categories_id', 'id');

                 // return $this->belongsTo('App\paper_reply', 'id', 'paper_id')->where('user_id','=', $users->id);




            }


            public function get_language(){
                return $this->belongsTo('App\language','lang_id','id');
            }



            public function get_user(){
                return $this->belongsTo('App\User','user_id','id');
            }
}
