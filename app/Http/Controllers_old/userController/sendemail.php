<?php

namespace App\Http\Controllers\userController;

use App\User;
use App\email_Form;

use Helper;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class sendemail extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id,$user_id)
    {

        //

$user = User::where('id','=',$user_id)->get();
 $email_Form =  email_Form::where('user_templet_id','=',2)->get();
// dd($user);
        return view('user.editor.sendemail',compact('user','id','email_Form'));
    }




    public function create(Request $request)
    {

// dd($request);
  $data  = array('blade-path' => 'email.Request_Reviewer',
           'to'=>$request->to,
           'from'=>'info@ierek.net',
           'cc'=>$request->cc,
           'subject'=>$request->subject,
           'body'=>$request->body,
    'link'=>'http:/ierek.net/index.php/reviewer/accept/'.$request->id,
            );


      // dd($users->email);




              $job = (new \App\Jobs\sendmailjob($data))->delay( \Carbon\Carbon::now()->addSeconds(2) );

              dispatch($job);



        // \Mail::send($data['blade-path'], $data, function ($message) use ($data)
        // {

        //       $message->from($data['from']);

        //     $message->to($data['to']);

        //     $message->subject($data['subject']);

        // });


        // Helper::sendmail($data);

       return redirect()->back()->with('success', "The Email Was Sent Successfully");
        // //
        // return view('admin.EducationYear.create');

    }





}
