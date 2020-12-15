<?php

namespace App\Http\Controllers\AdminController;

use App\EducationYear;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $educations = EducationYear::paginate(5);;
        return view('admin.EducationYear.index',compact('educations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        if(Auth::guard('admin')->user()->can('education.create')){
            return view('admin.EducationYear.create');

        }
        return redirect()->back();


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'name'=>'required|min:3|unique:education_years,name|regex:/^([^0-9]*)$/',
        ]);
        $edu = EducationYear::create($request->all());
        return redirect('admin/education')->withFlashMessage('تم اضافة المرحلة ..:)');


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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        //
        if(Auth::guard('admin')->user()->can('education.update')){

            $edu = EducationYear::find($id);
            return view('admin.EducationYear.edit',compact('edu'));
        }
        return redirect()->back();


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
        //
        $this->validate($request,[
            'name'=>'required|min:3|unique:education_years,name|regex:/^([^0-9]*)$/',
        ]);
        $edu = EducationYear::find($id);
        $edu->name = $request->name;
        $edu->save();
        return redirect('admin/education')->withFlashMessage('تم تعديل المرحلة ..:(');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        if(Auth::guard('admin')->user()->can('education.delete')){

            $edu = EducationYear::destroy($id);
            return redirect()->back()->withFlashMessage('تم مسح المرحلة ..:(');
        }
        return redirect()->back();

    }
}
