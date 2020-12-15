<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OurTraders_news extends Model
{
    //


    protected $table='our_traders_news';
    protected $fillable = [
        'user_id', 'title','description','lang_id','categories_id','body','status',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    public function get_categories(){
        return $this->belongsTo('App\category','categories_id','id');
    }


    public function get_language(){
        return $this->belongsTo('App\language','lang_id','id');
    }

}
