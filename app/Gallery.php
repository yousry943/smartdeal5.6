<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Gallerycategory;
class Gallery extends Model
{
    //



    protected $table='galleries';
    protected $fillable = [
        'name','image','lang_id','categorie_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

     public function get_language(){
         return $this->belongsTo('App\language','lang_id','id');
     }

    public function get_categories(){
        return $this->belongsTo('App\Gallerycategory','categorie_id','id');
    }


}
