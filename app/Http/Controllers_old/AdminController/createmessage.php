<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Group;
use App\teacher; 
use App\group_message;

use App\admin_teacher;



use Illuminate\Http\Request;
use Auth;
  

class createmessage extends Controller
{
    

    function addmessage(){
       
  
        $auth = Auth::guard('admin')->user()->id;
        
        $admin_teacher = admin_teacher::where('admin_id','=',$auth)->get()->first();
        $teacher_id = $admin_teacher->teacher_id;
        
        $group_ids = Group::where('teacher_id','=',$teacher_id)->get();
       //dd($group_ids);
       
        return view('admin.message.addmessage',compact('group_ids','teacher_id'));

    }


  
    function postaddmessage(request $request){
        // $this->validate($request,[
        //     'fname' => 'required|string|max:20',
        //     'address' => 'required|string|max:20',
        //     'phone' => 'required|string|max:11|min:11|unique:employees',

        //    'email' => 'required|email|max:50|unique:employees',
            
            
        // ]);
     $seg = Auth::guard('admin')->user()->id;

   
     $student = new group_message;
     $student->teacher_id = $request->teacher_id;
     $student->group_id = $request->group_id;
     $student->title  =  $request->title;
     $student->content  =  $request->content;
    //  $student->seg = $seg;
    
     $student->save();
     return redirect('admin/message')->withFlashMessage('تم ارسال الرساله ');


    }


    function showmessage(){
       
  
        $auth = Auth::guard('admin')->user()->id;
        $admin_teacher = admin_teacher::where('admin_id','=',$auth)->get()->first();
        $teacher_id = $admin_teacher->teacher_id;
       
        $group_message = group_message::where('teacher_id','=',$teacher_id)->get();
       
       
        return view('admin.message.showmessage',compact('group_message'));

    }




   public function  editmessage(request $request){
       
  
     
       $group_message = group_message::find($request->id);     
     

   
        return view('admin.message.editmessage',compact('group_message','user'));

    }
public function  posteditmessage(request $request , $id)
{

    group_message::where('id', $id)->update(array(
        'title' 	  =>  $request->title,
        'content' =>  $request->content,
     
    
    ));
     return redirect('admin/show/message');

}


   public  function deletemessage(request $request , $id){
 

    $user = group_message::find($request->id);
    $user->delete();
    return redirect()->back()->withFlashMessage('تم مسح  الرساله ');

return redirect()->back();

    }





}
