<?php

namespace App\Http\Controllers\userController;

use App\Http\Controllers\Controller;
use App\User;
use  App\editer_auther_comments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
class editer_auther_comment extends Controller
{





   public function  index ($paper_id,$user_id)
   {

     $users =  \Auth::user();
      $seg_id =  $users->id;

   	  $editer_auther_comments = editer_auther_comments::where('paper_id','=',$paper_id)->with('get_user')->get();



       return view('user.editor.editer_auther_comments',compact('paper_id','user_id','seg_id','editer_auther_comments'));






  }


  public function  create(Request $request)
  {





  	    $input = Input::all();


         $editer_auther_comments = editer_auther_comments::create($input);




$get_user = user::where('id','=',$request->user_id)->get();
// dd($get_user->email);





         $data  = array('blade-path' => 'email.editer_auther_comment',
                  'to'=>$get_user->first()->email,
                  'from'=>'info@ierek.net',
                  'cc'=>$request->cc,
                  'subject'=>'editor  send to  you comments ',
                  'body'=>'please  login  to  system  to  see  editor  comment ',
           'link'=>'http://127.0.0.1:8000/reviewer/accept/'.$request->id,
                   );



 $job = (new \App\Jobs\sendmailjob($data))->delay( \Carbon\Carbon::now()->addSeconds(2) );

                                         dispatch($job);



         return redirect()->back();


  }



}
