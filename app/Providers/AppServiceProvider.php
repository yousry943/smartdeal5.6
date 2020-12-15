<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Notification;
use Auth;
class AppServiceProvider extends ServiceProvider
{
    private $lang;
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      
        
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }






//       public function  set_lang($lang){
// $this->lang =  $lang ;

//         }

//         public function  get_lang(){
//           return   $this->lang; 
//         }

}
