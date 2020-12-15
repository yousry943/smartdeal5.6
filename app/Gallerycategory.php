<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallerycategory extends Model
{
    //
    protected $table='gallerycategories';
    protected $fillable = [
        'name','lang_id'
    ];


    public function get_language(){
        return $this->belongsTo('App\language','lang_id','id');
    }


}
