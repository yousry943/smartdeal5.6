<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\employee;

use Illuminate\Http\Request;
use Auth;


class createemp extends Controller
{
    //

    public function __construct()
    {
//        $this->middleware('admin:admin');
    }

    function index(){
        return view('admin.createemployee');

    }
    public function showemployee( Request $request ,$search = null){
        
      if($search==null){
        $users = employee::orderBy('id', 'DESC')->paginate(10);
        return view('admin.users.showemployee',compact('users'));
      }
     
       $users =  employee::where('id', 'LIKE', '%' . $request->search . '%')
                    ->orWhere('fname', 'LIKE', '%' . $request->search . '%')
                    ->paginate(10)
                   
                    ;
                   // dd($users);
                   
       return view('admin.users.showemployee',compact('users'));
      

    }
    
    
 
    
    
    
      public function addemployee(){

          if(Auth::guard('admin')->user()->can('employee.create')){
              $employees = employee::all();

              return view('admin.addemployee',compact('employees'));
          }
          return redirect()->back();


    }
    
    
    
    
    
    
      public function addforemployee(request $request){
       $this->validate($request,[
            'fname' => 'required|string|max:20',
            'address' => 'required|string|max:20',
            'phone' => 'required|string|max:11|min:11|unique:employees',
            'email' => 'required|email|max:50|unique:employees',
            
            
        ]);
     $seg = Auth::guard('admin')->user()->email;
    
   
     $student = new employee;
     $student->fname = $request->fname;
     $student->phone = $request->phone;
     $student->email  =  $request->email;
     $student->address  =  $request->address;
     $student->seg = $seg;
    
     $student->save();

     

     
     
    return redirect('/admin/employee/add')->withFlashMessage('تم اضافه  موظف جديد');


    }
    
    

    public function deleteemployee(request $request){

        if(Auth::guard('admin')->user()->can('employee.delete')){
            $user = employee::find($request->id);
            $user->delete();
            return redirect()->back()->withFlashMessage('employee Deleted !!');
        }
        return redirect()->back();


    }
    
    
    
    
     public function editemployee(request $request){
         if(Auth::guard('admin')->user()->can('employee.update')){
             $user = employee::find($request->id);
             return view('admin.editemployee',compact('user'));
         }
         return redirect()->back();

      

    }
    
    
    
    public function posteditemployee($id, request $request)
    {
          $this->validate($request,[
            'fname' => 'required|string|max:20',
            'address' => 'required|string|max:50',
           'email' => 'required|email|max:50',
            
            
            'phone' => 'required|string|max:11|min:11'
        ]);
        
      
            
    employee::where('id', $id)->update(array(
			'fname' 	  =>  $request->fname,
			'phone' =>  $request->phone,
			'address' =>  $request->address,
			'email' =>  $request->email,
		
		
		));
		 return redirect('admin/employee/show');
    }
    
    

  

}
