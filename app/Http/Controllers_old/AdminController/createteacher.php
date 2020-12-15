<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\teacher;
use App\Subject;
use App\admin;
use App\admin_teacher;
use Illuminate\Http\Request;
use Auth;
use Hash;
class createteacher extends Controller
{
    //

    public function __construct()
    {
//        $this->middleware('admin:admin');
    }

    function index(){
        return view('admin.createstudent');

    }
    public function showteacher( Request $request ,$search = null){
        
      if($search==null){
        $users = teacher::orderBy('id', 'DESC')->paginate(5);

       
       
        return view('admin.users.showteacher',compact('users'));
      }
     
       $users =  teacher::where('id', 'LIKE', '%' . $request->search . '%')
                    ->orWhere('fname', 'LIKE', '%' . $request->search . '%')
                    ->paginate(10)
                   
                    ;
                   // dd($users);
                   
       return view('admin.users.showteacher',compact('users'));
      

    }
    
    
 
    
    
    
      public function addteacher(){

          if(Auth::guard('admin')->user()->can('teacher.create')){
              $subjects = Subject::all();
              return view('admin.addteacher',compact('subjects'));
          }
          return redirect()->back();


    }
    
      public function addformteacher(request $request){
             $this->validate($request,[
                'fname' => 'required|string|max:20',
                'phone' => 'required|string|max:11|min:11|unique:teachers',
                'password' => 'required|confirmed',
                'email' => 'required|email',
            ]);

        $seg = Auth::guard('admin')->user()->email;

        $admin = new admin;
        $admin->username = $request->fname;
        $admin->name = $request->fname;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password);
        $admin->remember_token = Hash::make($request->password);

   
        $admin->save();
 
        $admin_id =  $admin->id;
     
        $data = $request->only('fname','phone');
        $data['seg'] = $seg;
         
        $data['seg'] = $seg;
        $teacher = teacher::create($data);
        $teacher->subjects()->sync($request->subject_id);
        $teacher_id =  $teacher->id;
        $admin_teacher = new admin_teacher;
        $admin_teacher->admin_id = $admin_id;
        $admin_teacher->teacher_id = $teacher_id;
        $admin_teacher->save();

  
       
        return redirect('/admin/teacher/add')->withFlashMessage('تم اضافه  مدرس جديد');


    }
    
    

    public function deleteteacher(request $request){

        if(Auth::guard('admin')->user()->can('teacher.delete')){
            $user = teacher::find($request->id);
            $user->delete();
            return redirect()->back()->withFlashMessage('teacher Deleted !!');
        }
        return redirect()->back();


    }
    
    
    
    
    
    
    
     public function editteacher(request $request){


         if(Auth::guard('admin')->user()->can('teacher.update')){
             $user = teacher::find($request->id);
             $subjects = Subject::all();
             return view('admin.editteacher',compact('user','subjects'));
         }
         return redirect()->back();

    }
    
    
    
    public function posteditteacher($id, request $request)
    {
      
                 $this->validate($request,[
            'fname' => 'required|string|max:20',
          
            'phone' => 'required|string|max:11|min:11'
        ]);
        
    $teacher = teacher::find($id);
    $teacher->fname = $request->fname;
    $teacher->phone = $request->phone;
    if($teacher->save()){
        $teacher->subjects()->sync($request->subject_id);

    }
		 return redirect('admin/teacher/show');
    }
    
    

  

}