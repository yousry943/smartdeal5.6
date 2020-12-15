<?php

namespace App\Http\Controllers\userController;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
 use App\submit_myreviews;
 use App\paper_reply;
 use App\submit_papers;

  use Helper;

class submit_myreview extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
        // $classes = ClassRoom::all();
//        foreach ($classes as $class){
//                dd($class->subjects()->get());
//
//        }get_user_type_id
        // $users =  \Auth::user();
        // dd($users->get_user_type_id);
        $paper = submit_papers::where('id','=',$id)->with('get_metadata','get_auther_reply','get_user')->get()->last();
        return view('user.submit_myreviews.index',compact('paper'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request,$id)
    {

      $this->validate($request,[
        'filename' => 'required|mimes:doc,docx,pdf|max:2048'
        ]);
        
        //  $this->validate($request,[
        //     // 'title' => 'required|max:50',
        //     // 'description' => 'required',
        //     'paper' => 'required|mimes:doc,docx,pdf|max:2048'
        // ]);


        $paper_reply = new paper_reply();

        $user = \Auth::guard('web')->user()->id;
          if( $request->file('filename')){
        $paper_reply->filename = Helper::uploadPaper($request->file('filename'),'submit_myreview/');
      }else {
        $paper_reply->filename = " ";

      }
        $paper_reply->user_id = $user;
        $paper_reply->paper_id = $id ;
        $paper_reply->save();
        $paper_reply_id =  $paper_reply->id;



        $submit_myreviews = new submit_myreviews();
        $submit_myreviews->Reviewer_expertise = $request->Reviewer_expertise;

        $submit_myreviews->Originality = $request->Originality;
        $submit_myreviews->Quality = $request->Quality;
        $submit_myreviews->English_Quality = $request->English_Quality;
        $submit_myreviews->Detailed_comments = $request->Detailed_comments;
        $submit_myreviews->Comments_to_Proceedings = $request->Comments_to_Proceedings;
        $submit_myreviews->user_id = $user;



        $submit_myreviews->Overall_evaluation = $request->Overall_evaluation;
        $submit_myreviews->paper_replies_id = $paper_reply_id;
        $submit_myreviews->paper_id  = $id;

          $submit_myreviews->save();

    $paper = submit_papers::where('id','=',$id)->with('get_user')->get()->last();



    $data  = array('blade-path' => 'email.reviewer_submit_review',
         'to'=>$paper->get_user->email,
         'from'=>'info@ierek.net',
         'cc'=>$request->cc,
         'subject'=>'reviewer has  been replay  to  your paper ',
         'body'=>'please  login  to  system  to  see  reviewer  replay ',
  'link'=>'http://127.0.0.1:8000/reviewer/accept/'.$request->id,
          );



$job = (new \App\Jobs\sendmailjob($data))->delay( \Carbon\Carbon::now()->addSeconds(2) );

                                dispatch($job);




        return redirect('home/reviews/');




        // return view('admin.Class.create',compact('educations','subjects'));
    }






    public function show($id)
    {
        // //
        // $class = ClassRoom::find($id);
        // $educations = EducationYear::all();
        // $subjects = Subject::all();

       $user =  \Auth::user();
       $user->id;


$myreviews = submit_myreviews::where('user_id','=',$user->id)->where('paper_id','=',$id)->with('get_paper_reply')->get()->last();

 $paper = submit_papers::where('id','=',$id)->with('get_metadata','get_auther_reply','get_user')->get()->last();


//dd($paper);



//   dd($myreviews);
if ($myreviews == null) {
   return 'you dont have reviews for  this paper  ';
} else{
        return view('user.submit_myreviews.reviews-show-data',compact('myreviews','paper'));

}
       // return view('user.submit_myreviews.reviews-show-data',compact('myreviews'));

    }








    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {



$user = \Auth::guard('web')->user()->id;
   $myreviews = submit_myreviews::where('paper_id','=',$id)->where('user_id','=',$user)
   ->get()->last();


// dd($myreviews);

          return view('user.submit_myreviews.edit',compact('myreviews','id'));

        // return view('admin.Class.edit',compact('educations','subjects','class'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

      $this->validate($request,[
        'filename' => 'required|mimes:doc,docx,pdf|max:2048'
        ]);

           $paper_reply = new paper_reply();

        $user = \Auth::guard('web')->user()->id;
        $paper_reply->filename = Helper::uploadPaper($request->file('filename'),'submit_myreview/');
        $paper_reply->user_id = $user;
        $paper_reply->paper_id = $id ;
        $paper_reply->save();
        $paper_reply_id =  $paper_reply->id;



        $submit_myreviews = new submit_myreviews();
        $submit_myreviews->Reviewer_expertise = $request->Reviewer_expertise;

        $submit_myreviews->Originality = $request->Originality;
        $submit_myreviews->Quality = $request->Quality;
        $submit_myreviews->English_Quality = $request->English_Quality;
        $submit_myreviews->Detailed_comments = $request->Detailed_comments;
        $submit_myreviews->Comments_to_Proceedings = $request->Comments_to_Proceedings;
        $submit_myreviews->user_id = $user;



        $submit_myreviews->Overall_evaluation = $request->Overall_evaluation;
        $submit_myreviews->paper_replies_id = $paper_reply_id;
        $submit_myreviews->paper_id  = $id;

          $submit_myreviews->save();



          $paper = submit_papers::where('id','=',$id)->with('get_user')->get()->last();



      $data  = array('blade-path' => 'email.reviewer_submit_review',
               'to'=>$paper->get_user->email,
               'from'=>'info@ierek.net',
               'cc'=>$request->cc,
               'subject'=>'reviewer has  been replay  to  your paper ',
               'body'=>'please  login  to  system  to  see  reviewer  replay ',
        'link'=>'http://127.0.0.1:8000/reviewer/accept/'.$request->id,
                );



      $job = (new \App\Jobs\sendmailjob($data))->delay( \Carbon\Carbon::now()->addSeconds(2) );

                                      dispatch($job);



          return redirect('home/reviews/');


    }



}
