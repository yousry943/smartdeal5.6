<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\User;
use App\Notification;
use Illuminate\Http\Request;

class Notifications extends Controller
{
  

   public function seen($id){
   


     Notification::where('id', $id)->update(array(
        'seen' 	  => 1,
    
    
    ));




   }

 
}
