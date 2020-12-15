<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class report extends Model
{

     protected $table='reports';
     protected $fillable = [
         'name', 'description','image','lang_id',
     ];

     /**
      * The attributes that should be hidden for arrays.
      *
      * @var array
      */



     public function get_language(){
         return $this->belongsTo('App\language','lang_id','id');
     }
}
