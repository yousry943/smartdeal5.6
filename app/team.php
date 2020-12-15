<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class team extends Model
{
    //teams

    protected $table='teams';




    protected $fillable = [
        'name', 'jobname','description','image',
    ];

}
