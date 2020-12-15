<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class learncategory extends Model
{
    //


    protected $table='learncategories';
    protected $fillable = [
        'name','lang_id','menuCategory_id'
    ];


    public function get_language(){
        return $this->belongsTo('App\language','lang_id','id');
    }

    public function get_menuCategory(){
        return $this->belongsTo('App\MenuCategory','menuCategory_id','id');
    }

    public function get_learn(){
        return $this->hasMany('App\learn','categories_id','id');
    }



}
