<?php

namespace App\Http\Controllers\userController;

use App\Http\Controllers\Controller;
use App\our_traders_news_TechicalAnalysis;
use App\CategoriesTechicalAnalysis;
use App\language;
use Helper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TechicalAnalysisController extends Controller
{
    public function __construct()
    {
           $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::guard('web')->user()->id;
         // dd($user);
       $news = our_traders_news_TechicalAnalysis::where('user_id','=',$user_id)->with('get_categories','get_language')->get();

        //dd($news);
        return view('website.user-dashboard.TechicalAnalysis.index',compact('news'));
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
              $categorys = CategoriesTechicalAnalysis::all();
              $languages = language::all();

             return view('website.user-dashboard.TechicalAnalysis.create',compact('categorys','languages'));

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

$news = new our_traders_news_TechicalAnalysis();

      $news->user_id = $user_id = Auth::guard('web')->user()->id;
      $news->title = $request->title;
      $news->description = $request->description;
      $news->lang_id = $request->language;
      $news->categories_id = $request->category;
      $news->body = $request->body;
      $news->status = 'active';

      $news->image = Helper::uploadImage($request->file('image'),'uplodes/newsphoto/');
      $news->save();
        return redirect('/user/technical_analysis')->withFlashMessage('TechicalAnalysis has been Stored');

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
        $user_id = Auth::guard('web')->user()->id;

            $categorys = CategoriesTechicalAnalysis::all();
        $languages = language::all();

        $news = our_traders_news_TechicalAnalysis::where('id','=',$id)
        ->where('user_id','=',$user_id)
        ->with('get_categories','get_language')->get();

        //dd($categorys);
        return view('website.user-dashboard.TechicalAnalysis.edit',compact('news','categorys','languages'));


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






        $news= our_traders_news_TechicalAnalysis::find($id);

        $news->title = $request->title;
        $news->description = $request->description;
        $news->lang_id = $request->language;
        $news->categories_id = $request->category;
        $news->body = $request->body;
        $news->status = 'active';

        if($file = $request->file('image')){
            @unLink(base_path().'/public/uplodes/newsphoto/'.$news->image);
            $news->image = Helper::uploadImage($request->file('image'),'uplodes/newsphoto/');
        }else{
            $news->image = $news->image;
        }
        $news->save();

        return redirect('/user/technical_analysis')->withFlashMessage('TechicalAnalysis Edited !!');

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
        $news = our_traders_news_TechicalAnalysis::find($id)->delete();
       return redirect('/user/technical_analysis')->withFlashMessage('TechicalAnalysis Deleted');

    }
}
