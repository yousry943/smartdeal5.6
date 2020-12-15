<?php

namespace App\Http\Controllers\userController;

use App\Http\Controllers\Controller;
use App\User;
use App\Assign_reviewer;

use Illuminate\Http\Request;
use Validator;
 use  App\submit_papers;
use Auth;


class selectreview extends Controller
{
    //



   public function index($id){

 $reviewers = User::where('user_type_id','=',2)->get();
//dd($reviewer);
        return view('user.editor.selectreview',compact('reviewers','id'));

    }



   public function create(Request $request,$id)
   {

             $this->validate($request,[
            'user_id' => 'required',

            'paper_id' => 'required',



        ]);



        $Assign_reviewer = Assign_reviewer::firstOrCreate(['user_id' => $request->user_id,'paper_id'=>$request->paper_id],
          ['user_id' => $request->user_id, 'paper_id' => $request->paper_id]);


   // $Assign_reviewer = new Assign_reviewer();
   // $Assign_reviewer->user_id = $request->user_id;
   // $Assign_reviewer->paper_id = $request->paper_id;
   // $Assign_reviewer->save();

   submit_papers::where('id', $request->paper_id)->update(array(
       'status' 	  =>  '2',


   ));


return redirect('home/editor/main-review/'.$request->paper_id);






   }









}
