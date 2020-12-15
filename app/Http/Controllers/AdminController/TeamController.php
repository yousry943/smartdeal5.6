<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\team;

use Helper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeamController extends Controller
{
    public function __construct() 
    {
//        $this->middleware('admin:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = team::all();
         //dd($news);
        return view('admin.Team.index',compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // if (Auth::guard('admin')->user()->can('admins.create')) {
        //     $roles = Role::all();
        //     return view('admin.manager.create',compact('roles'));
        // }
        // return redirect()->back();


             return view('admin.Team.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      // dd($request);
        // $this->validate($request,[
        //     'username' => 'required|string|max:255',
        //     'email' => 'required|string|max:255|unique:admins',
        //     'password' =>'required|string|max:10|confirmed',
        //     'role' => 'required'
        // ]);

//         $request['password'] = bcrypt($request->password);
//         $admin = Admin::create($request->all());
//
//         $admin->roles()->sync($request->role);
// //        Admin::find($id)->roles()->sync($request->role);



       $news = new team();


      $news->name = $request->name;
      $news->jobname = $request->jobname;
      $news->description = $request->description;


      $news->image = Helper::uploadImage($request->file('image'),'uplodes/newsphoto/');
      $news->save();
        return redirect('/admin/team')->withFlashMessage('Team has been Stored');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        // dd($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // if (Auth::guard('admin')->user()->can('admins.update')) {
        //     $manager = Admin::find($id);
        //     $roles = Role::all();
        //     return view('admin.manager.edit',compact('roles','manager'));
        // }
        // return redirect()->back();


        $teams = team::where('id','=',$id)->get();

        // dd($news);
        return view('admin.Team.edit',compact('teams','id'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $this->validate($request,[
        //     'username' => 'required|string|max:255',
        //     'email' => 'required|string|max:255',
        // ]);
        // $manager = news::find($id)->update($request->except('_token','_method'));
        // return redirect('/admin/news')->withFlashMessage('News Edited');






        $news= team::find($id);

        $news->name = $request->name;
        $news->jobname = $request->jobname;
        $news->description = $request->description;

        if($file = $request->file('image')){
            @unLink(base_path().'/public/uplodes/newsphoto/'.$news->image);
            $news->image = Helper::uploadImage($request->file('image'),'uplodes/newsphoto/');
        }else{
            $news->image = $news->image;
        }
        $news->save();

        return redirect('/admin/team')->withFlashMessage('team Edited !!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // if (Auth::guard('admin')->user()->can('admins.delete')) {
        //     $admin = Admin::find($id)->delete();
        //     return redirect('/admin/manager')->withFlashMessage('Manager Deleted');
        // }
        $news = team::find($id);
          @unLink(base_path().'/public/uplodes/newsphoto/'.$news->first()->image);
          @unLink(base_path().'/public/uplodes/newsphoto70/'.$news->first()->image);
          $news->delete();
       return redirect('/admin/team')->withFlashMessage('News Deleted');

    }
}
