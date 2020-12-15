<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\paper_examples;
use Helper;
use Illuminate\Http\Request;
use Auth;


class paper_example extends Controller
{
    //



     public function editPaperTemplate(request $request){
         if(Auth::guard('admin')->user()->can('student.update')){
            // $students =   student::all();
            //  $user = mom::find($request->id);
             $paper_examples = paper_examples::all();

             return view('admin.PaperTemplate.edit',compact('paper_examples'));
         }
         return redirect()->back();



    }



    public function posteditPaperTemplate($id, request $request)
    {


    // paper_examples::where('id', $id)->update(array(
		// 	'link' 	  =>  $request->link,
    //
    //     ));


        $paper_examples = paper_examples::find($id);


        if($file = $request->file('link')){
             unLink(base_path().'/public/paper_example/'.$paper_examples->link);

            $paper_examples->link = Helper::uploadPaper($request->file('link'),'paper_example/');

        }else{
            $paper_examples->link = $paper_examples->link;
        }
        $paper_examples->save();



		 return redirect()->back();
    }



}
