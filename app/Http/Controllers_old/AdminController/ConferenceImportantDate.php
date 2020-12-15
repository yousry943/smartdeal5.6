<?php

namespace App\Http\Controllers\AdminController;

use App\ClassRoom;
use App\EducationYear;
use App\ConferenceImportantDates;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ConferenceImportantDate extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $ConferenceImportantDates = ConferenceImportantDates::all();



        return view('admin.ConferenceImportantDates.index',compact('ConferenceImportantDates'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        if(Auth::guard('admin')->user()->can('classes.create')){
            $educations = EducationYear::all();
            $subjects = Subject::all();
            return view('admin.Class.create',compact('educations','subjects'));
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
            'name'=>'required|min:3|unique:classes,name|regex:/^([^0-9]*)$/',
        ]);
        $data = $request->only('name','education_year_id');
        $class = ClassRoom::create($data);
        $class->subjects()->sync($request->subject_id);
        return redirect('admin/class')->withFlashMessage('تم اضافة السنة ..:)');
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
    public function editConferenceImportantDates($id)
    {


        //



              $ConferenceImportantDates = ConferenceImportantDates::find($id);


            return view('admin.ConferenceImportantDates.edit',compact('ConferenceImportantDates'));

        return redirect()->back();


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function posteditConferenceImportantDates(Request $request, $id)
    {
        //
        //

        // $this->validate($request,[
        //     'name'=>'required|min:3|unique:classes,name|regex:/^([^0-9]*)$/',
        // ]);


        ConferenceImportantDates::where('id', $id)->update(array(
			'start_date' 	  =>  $request->start_date,
			'end_date' =>  $request->end_date,


		));

    return redirect()->back()->withFlashMessage('Done');



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
        //
        if(Auth::guard('admin')->user()->can('classes.delete')){
            $class = ClassRoom::destroy($id);
            return redirect('admin/class')->withFlashMessage('تم مسح السنة ..:)');
        }
        return redirect()->back();


    }
}
