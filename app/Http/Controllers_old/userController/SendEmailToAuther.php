<?php
namespace App\Http\Controllers\userController;

use App\User;
use App\email_Form;
use Helper;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SendEmailToAuther extends Controller
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
 $email_Form =  email_Form::where('user_templet_id','=',1)->get();


 // dd($email_Form);
        return view('user.editor.SendEmailToAuther',compact('user','id','email_Form'));
    }




    public function create(Request $request)
    {


  $data  = array('blade-path' => 'email.sendemail_Editor_To_Auther',
           'to'=>$request->to,
           'from'=>'info@ierek.net',
           'cc'=>$request->cc,
           'subject'=>$request->subject,
           'body'=>$request->body,
    'link'=>'http://127.0.0.1:8000/reviewer/accept/'.$request->id,
            );

// dd($request->id);


    $job = (new \App\Jobs\sendmailjob($data))->delay( \Carbon\Carbon::now()->addSeconds(2) );

                                  dispatch($job);





      //  Helper::sendmail($data);

       // return redirect()->back();
return redirect('home/editor/main-review/'.$request->id);



    }





}
