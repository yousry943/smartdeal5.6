<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuCategory extends Model
{
    //

    protected $table='menu_categories';
    protected $fillable = [
        'name','lang_id',
    ];




    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    public function get_categories(){
        return $this->belongsTo('App\learncategories','categories_id','id');
    }


    public function get_language(){
        return $this->belongsTo('App\language','lang_id','id');
    }

}
