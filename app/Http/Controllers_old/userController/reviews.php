<?php

namespace App\Http\Controllers\userController;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use  App\submit_papers;
use App\paper_reply;
use App\Assign_reviewer;

 use App\Editor_decisions;

class reviews extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function index()
    {



    if (\Auth::guard('web')->user()->can('reviewerPolicy.view')) {
          $users =  \Auth::user();
          $users->id;



    $Assign_reviewers = Assign_reviewer::where('user_id','=',$users->id)->get();


      foreach ($Assign_reviewers as $Assign_reviewer){


        $paper = submit_papers::where('id','=',$Assign_reviewer['paper_id'] )->with('get_user','get_metadata','get_Track_Selction','get_auther_reply','get_reviewer_reply','get_paper_status')->get();


        $submit_myreview = $Assign_reviewer->get_submit_reviewers($Assign_reviewer['paper_id'],$Assign_reviewer['user_id'])->last();
        // $Editor_decisions= Editor_decisions::where('paper_id','=',$Assign_reviewer['paper_id'] )->get()->last();


        $papers[] = [$paper,$submit_myreview] ;

           }
 //dd($papers);

   @$all_count = count($papers);

if (isset($papers)) {


     return view('user.reviews.index',compact('papers','all_count'));
}else {


        return view('user.reviews.index');
}

 }else {
     return view('user.permission.permission');
    }




    }

}
