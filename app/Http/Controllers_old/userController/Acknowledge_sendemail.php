<?php

namespace App\Http\Controllers\userController;

use App\Http\Controllers\Controller;
use App\User;
use App\email_Form; 
use Helper;
use Illuminate\Http\Request;
use Facades\App\Helper\IceHelper;

class Acknowledge_sendemail extends Controller
{



  public function index($user_id)
    {

        //

$user = User::where('id','=',$user_id)->get();
 $email_Form =  email_Form::where('user_templet_id','=',3)->get();
// dd($user);
        return view('user.editor.Acknowledge_sendemail',compact('user','email_Form'));
    }




    public function create(Request $request)
    {


  $data  = array('blade-path' => 'email.Reviewer_Acknowledge',
           'to'=>$request->to,
           'from'=>'info@ierek.net',
           'cc'=>$request->cc,
           'subject'=>$request->subject,
           'body'=>$request->body,
           'link'=>'link'

            );






                        $job = (new \App\Jobs\sendmailjob($data))->delay( \Carbon\Carbon::now()->addSeconds(2) );

                        dispatch($job);







       return redirect()->back()->with('success', "Your Email Was Sebt Successfully");
  



      return redirect()->back()->with('success', "The Email Was Sent Successfully");


    }







}
