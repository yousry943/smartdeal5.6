<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use App\Notification;
use Auth;
use App\group_message; 
use App\student_group;
use App\student; 
use App\seen; 

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\Event' => [
            'App\Listeners\EventListener',
        ],  
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();      

///Notification//////
        \App::singleton('count',function(){
            $seg = \Illuminate\Support\Facades\Auth::guard('web')->user()->id ;
        
         
        $count = Notification::where('user_id', '=',$seg)->where('seen','=',0)->count();
        
          return $count;
        
          });
     
       
    \App::singleton('Notification',function(){
        $seg = \Illuminate\Support\Facades\Auth::guard('web')->user()->id ;
    
     
    $Notifications = Notification::where('user_id', '=',$seg)->orderBy('id', 'DESC')->get();
     $count = $Notifications->count($Notifications);
    
      return $Notifications;
    
      });

//////message //////





\App::singleton('count_group_messages',function(){
    $seg = \Illuminate\Support\Facades\Auth::guard('web')->user()->id ;
    $student_group = student_group::where('student_id', '=',$seg)->get();
 $count =0;
    foreach ($student_group as $student_groups)
    { 
 $count_group_messagess = group_message::where('group_id', '=',$student_groups->group_id)->count();
  $count += $count_group_messagess; 
  }
 $count_seen = seen::where('student_id', '=',$seg)->count();
echo  $count- $count_seen ;

  });









\App::singleton('group_messages',function(){
$seg = \Illuminate\Support\Facades\Auth::guard('web')->user()->id ;
$student_group = student_group::where('student_id', '=',$seg)->get();

$datas=[];
foreach ($student_group as $student_groups)

{
$group_messages = group_message::where('group_id', '=',$student_groups->group_id)->orderBy('id', 'DESC')->get();

array_push($datas,$group_messages);

}
return $datas;



});




      
        }
}
