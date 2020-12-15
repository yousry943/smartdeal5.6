<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class language extends Model
{

  protected $table='languages';
  protected $fillable = [
      'name', 'langcode',
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */

  // public function roles(){
  //     return $this->belongsToMany('App\Models\Role','admin_role','admin_id','role_id');
  // }
}
