<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\category;
use App\our_traders_news_TechicalAnalysis;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [


        'name','lastname','type_id','phone', 'email', 'password','image',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];





public function roles(){

     return $this->belongsToMany('App\u_roles','user_roles','user_id','role_id');

    //return $this->belongsToMany('App\Models\Role','admin_role','admin_id','role_id');


}






    public function verifyUser()
{
return $this->hasOne('App\VerifyUser');
}

public function get_news_TechicalAnalysis(){
    return $this->belongsTo('App\our_traders_news_TechicalAnalysis','id','user_id');
}


public function get_categories($user_id){

dd($categories_id);
    //return $this->hasOneThrough('App\category','App\our_traders_news_TechicalAnalysis');

         // return $this->hasOneThrough('App\category','App\our_traders_news_TechicalAnalysis','categories_id', 'id');

    // return $this->belongsTo('App\category', 'categories_id', 'id');

      return category::where('id','=',$categories_id);
}




function withCategories() {
return $this->hasOne('App\category', 'id', 'category_id');
}

public function show($id){
our_traders_news_TechicalAnalysis::with('withCategories')->where('category_id', $id)->get(); //the output of articles of the category
}


}
