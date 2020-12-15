<?php

namespace App\Http\Controllers\userController;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Helper;

class confirmation extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {


      $users =  \Auth::user();
      $users->id;
// dd($users->email);

      $emaildata  = array('blade-path' => 'email.confirmation',
      'to'=>$users->email,
      'from'=>'info@ierek.net',
      'cc'=>$users->email,
      'body'=>'this is  email  to  confirm you  your paper has been uploaded ',

               'subject'=>'congratulation your paper has been uploaded  ',
                );



        $job = (new \App\Jobs\sendmailjob($emaildata))->delay( \Carbon\Carbon::now()->addSeconds(2) );

        dispatch($job);


        //  Helper::sendmail($emaildata);
           $messge = 'Submission complate, Thank you for your interest in the (conference) wait 5 secound will  redirect to  your paper';

    return response()->view('user.confirmation.index', compact('messge'), 200)
     ->header("Refresh", "3;url=/home/auther_paper");


    }


}
