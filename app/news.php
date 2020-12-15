<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\category;
use App\language;
use  App\image_news;
class news extends Model
{
    //

    protected $table='news';
    protected $fillable = [
        'image', 'title','description','lang_id','categories_id','body','status',
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
