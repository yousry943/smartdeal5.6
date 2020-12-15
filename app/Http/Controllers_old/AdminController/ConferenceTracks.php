<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Track_Selction;





use Illuminate\Http\Request;
use Auth;


class ConferenceTracks extends Controller
{
    //



    function addConferenceTracks(){

        // $student = student::find($user);
        // $Groups = $student->student_group;
        // $teachers = teacher::all();
        //
        return view('admin.ConferenceTracks.add');

    }



    public function showConferenceTracks( Request $request ,$search = null){

      if($search==null){


       $Track_Selctions = Track_Selction::orderBy('id', 'DESC')->paginate(10);

        return view('admin.ConferenceTracks.show',compact('Track_Selctions'));
      }

       $Track_Selctions =  Track_Selction::where('id', 'LIKE', '%' . $request->search . '%')
                    ->orWhere('track_name', 'LIKE', '%' . $request->search . '%')
                    ->paginate(20)  ;



       return view('admin.ConferenceTracks.show',compact('Track_Selctions'));


    }






    //   public function addinvoice(){
    //       $classes = ClassRoom::all();

    //     return view('admin.addinvoice',compact('classes'));

    // }






      public function addformConferenceTracks(request $request){
       // $this->validate($request,[
       //      'Group_id' => 'required|string|max:20',
       //      'value' =>  'required|string|max:11',
       //      'date' => 'required|string|max:11',
       //  ]);




     $student = new Track_Selction;
     $student->track_name = $request->track_name;

     $student->save();


    return redirect()->back()->withFlashMessage('Done');


    }



    public function deleteTrack_Selction(request $request){


        $user = Track_Selction::find($request->id);
        $user->delete();
        return redirect()->back()->withFlashMessage('Track Selction Deleted !!');

    }



     public function editConferenceTracks(request $request){


        $Track_Selction = Track_Selction::find($request->id);





return view('admin.ConferenceTracks.edit',compact('Track_Selction'));


    }










    public function posteditinvoice($id, request $request)
    {


        invoice::where('id', $id)->update(array(
			'fname' 	  =>  $request->fname,
			'phone' =>  $request->phone,
			'education_year_id'	=> $request->classes,

		));
		 return redirect('admin/student/show');
    }





}
