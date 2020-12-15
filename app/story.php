<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class story extends Model
{
    //

    protected $table='stories';
    protected $fillable = [
        'name', 'description','image','lang_id'
    ];

    public function get_language(){
        return $this->belongsTo('App\language','lang_id','id');
    }

}
