<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class note extends Model
{
    //

    protected $table='notes';
    protected $fillable = [
        'name', 'title','description','lang_id',

    ];

    public function get_language(){
        return $this->belongsTo('App\language','lang_id','id');
    }
}
