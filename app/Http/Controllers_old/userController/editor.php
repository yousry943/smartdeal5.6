<?php

namespace App\Http\Controllers\userController;

use App\Http\Controllers\Controller;
 use  App\submit_papers;
 use App\submit_myreviews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class editor extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $papers = submit_papers::where('status','=','1')->with('get_metadata','get_user','get_user','get_Track_Selction','get_editer_auther_comment','get_paper_status')->get();


        return view('user.editor.index',compact('papers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

















    public function View_Submission($id)
    {

 $papers = submit_papers::where('id','=',$id)->with('get_metadata','get_Track_Selction','get_user','get_submit_myreviews','get_paper_status')->get();

 // dd($papers);

 $submit_myreviews = submit_myreviews::where('paper_id','=',$id)->with('get_user')->get();

  // dd($papers);

 return view('user.editor.submission',compact('papers','submit_myreviews','id'));

    }





public  function  inreview()
{

  $papers = submit_papers::where('status','=','2')->with('get_metadata','get_user','get_user','get_Track_Selction','get_editer_auther_comment','get_paper_status')->get();



return view('user.editor.inreview',compact('papers'));

  // return view('user.editor.index',compact('papers'));

}



public  function  Archive()
{
  $papers = submit_papers::with('get_metadata','get_user','get_user','get_Track_Selction','get_editer_auther_comment','get_paper_status')->get();




          return view('user.editor.Archive',compact('papers'));
}













}
