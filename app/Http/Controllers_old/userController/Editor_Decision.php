<?php

namespace App\Http\Controllers\userController;

use App\Http\Controllers\Controller;
use App\submit_papers;
 use App\Editor_decisions;
use Illuminate\Http\Request;


class Editor_Decision extends Controller
{
    //




    public function create( Request $request ){


        //dd($request);

        // $user_id = \Auth::guard('web')->user()->id;
        // $Editor_decision = new Editor_decisions();
        //
        // $Editor_decision->user_id = $user_id;
        // $Editor_decision->paper_id = $request->paper_id;
        // $Editor_decision->editor_decisions = $request->editor_decisions;
        // $Editor_decision->save();

        $this->validate($request,[
            'editor_decisions' => 'required',
          ]);
        submit_papers::where('id', $request->paper_id)->update(array(
            'status' 	  =>  $request->editor_decisions,


        ));




    $paper = submit_papers::where('id','=',$request->paper_id)->with('get_user')->get()->last();

// dd($paper->get_user()->first()->email);

    $data  = array('blade-path' => 'email.Editor_Decision',
             'to'=>$paper->get_user()->first()->email,
             'from'=>'info@ierek.net',
             'cc'=>$request->cc,
             'subject'=>' Editor Decision',
             'body'=>' Editor send  to  you final   Decision ',
      'link'=>'http://127.0.0.1:8000/reviewer/accept/'.$request->id,
              );



    $job = (new \App\Jobs\sendmailjob($data))->delay( \Carbon\Carbon::now()->addSeconds(2) );

                                    dispatch($job);






       return redirect()->back()->with('success', "Your Decision Was Submitted Successfully.");

        // return view('admin.users.index',compact('users'));

    }


}
