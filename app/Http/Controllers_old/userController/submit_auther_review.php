<?php

namespace App\Http\Controllers\userController;

use App\Http\Controllers\Controller;

use App\submit_myreviews;
 use App\paper_reply;
 use  App\submit_papers;
 use App\Assign_reviewer;
 use Helper;
use Illuminate\Http\Request;

class submit_auther_review extends Controller
{





   public function  index ($id)
   {
       $user =  \Auth::user();
       $user->id;


 $myreviews = submit_myreviews::where('paper_id','=',$id)->with('get_paper_reply')->get()->last();

 $paper = submit_papers::where('id','=',$id)->with('get_metadata','get_Track_Selction','get_user')->get()->last();

//dd($paper);

     return view('user.submit_auther_review.index',compact('myreviews','paper'));



  }



  public function create(Request $request,$id)
  {

         $paper_reply = new paper_reply();

        $user = \Auth::guard('web')->user()->id;
        $paper_reply->filename = Helper::uploadPaper($request->file('filename'),'submit_auther_review/');
        $paper_reply->user_id = $user;
        $paper_reply->paper_id = $id ;
        $paper_reply->save();
        // $paper_reply_id =  $paper_reply->id;




$reviewers = Assign_reviewer::where('paper_id','=',$id)->with('get_user_reviwer')->get();



foreach ($reviewers as $reviewer){

        $data  = array('blade-path' => 'email.reviewer_submit_review',
                 'to'=>$reviewer->get_user_reviwer()->first()->email,
                 'from'=>'info@ierek.net',
                 'cc'=>$request->cc,
                 'subject'=>'auther has  been replay  to  your review ',
                 'body'=>'please  login  to  system  to  see  auther  replay ',
          'link'=>'http://127.0.0.1:8000/reviewer/accept/'.$request->id,
                  );



        $job = (new \App\Jobs\sendmailjob($data))->delay( \Carbon\Carbon::now()->addSeconds(2) );

                                        dispatch($job);
}

        return redirect('home/auther_paper');



}



}
