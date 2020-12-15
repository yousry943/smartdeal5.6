<?php

namespace App\Http\Controllers\userController;

use App\Http\Controllers\Controller;
// use App\User;
// use  App\submit_papers;
use App\submit_papers;
use App\submit_myreviews;
class decisioncomments extends Controller
{
  




   public function  index ($paper_id,$user_id)
   {
       // $users =  \Auth::user(); 
       // $users->id;



  


$myreviews = submit_myreviews::where('user_id','=',$user_id)->where('paper_id','=',$paper_id)->with('get_paper_reply')->get()->last();

 $paper = submit_papers::where('id','=',$paper_id)->with('get_metadata','get_auther_reply','get_user')->get()->last();


// dd($paper);




if ($myreviews == null) {
   return 'this reviewer  does not  have reviews yet   ';
} else{
        return view('user.editor.reviews-show-data',compact('myreviews','paper'));

} 




  }


 
}
