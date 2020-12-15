<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    protected $table = 'roles';
    protected $fillable =['title'];

    public function permissions(){
        return $this->belongsToMany('App\Models\Permission')->withTimestamps();
    }
}
