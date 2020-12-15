<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class learn extends Model
{
    //

    protected $table='learns';
    protected $fillable = [
        'title','image','description','lang_id','categories_id','body',
    ];




    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    public function get_categories(){
        return $this->belongsTo('App\learncategory','categories_id','id');
    }


    public function get_language(){
        return $this->belongsTo('App\language','lang_id','id');
    }



}
