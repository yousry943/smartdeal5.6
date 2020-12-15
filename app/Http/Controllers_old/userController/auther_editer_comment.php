<?php

namespace App\Http\Controllers\userController;

use App\Http\Controllers\Controller;
use App\User;
use  App\editer_auther_comments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
class auther_editer_comment extends Controller
{





   public function  index ($paper_id)
   {

     $users =  \Auth::user();
      $seg_id =  $users->id;
      $user_id = $users->id;

   	  $auther_editer_comments = editer_auther_comments::where('paper_id','=',$paper_id)->with('get_user')->get();



       return view('user.auther_paper.auther_editer_comment',compact('paper_id','seg_id','user_id','auther_editer_comments'));






  }


  public function  create(Request $request)
  {



  	    $input = Input::all();


         $editer_auther_comments = editer_auther_comments::create($input);

         // $get_user = user::where('id','=',$request->user_id)->get();
         $auther_editer_comments = editer_auther_comments::where('paper_id','=',$request->paper_id)->where('seg_id','!=',$request->user_id)->with('get_user')->get()->last();

        $get_user = user::where('id','=',$auther_editer_comments->seg_id)->get();




                  $data  = array('blade-path' => 'email.auther_editer_comment',
                           'to'=>$get_user->first()->email,
                           'from'=>'info@ierek.net',
                           'cc'=>$request->cc,
                           'subject'=>'auther send to  you comments ',
                           'body'=>'please  login  to  system  to  see  auther  comment ',
                    'link'=>'http://127.0.0.1:8000/reviewer/accept/'.$request->id,
                            );



          $job = (new \App\Jobs\sendmailjob($data))->delay( \Carbon\Carbon::now()->addSeconds(2) );

                                                  dispatch($job);


         return redirect()->back();


  }



}
