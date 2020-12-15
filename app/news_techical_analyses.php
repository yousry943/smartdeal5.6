<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\CategoriesTechicalAnalysis;

class news_techical_analyses extends Model
{
    //categories_techical_analyses



        protected $table='news_techical_analyses';
        protected $fillable = [
            'image', 'title','description','lang_id','categories_id','body','status',
        ];

        /**
         * The attributes that should be hidden for arrays.
         *
         * @var array
         */

        public function get_categories(){
            return $this->belongsTo('App\CategoriesTechicalAnalysis','categories_id','id');
        }


        public function get_language(){
            return $this->belongsTo('App\language','lang_id','id');
        }

}
