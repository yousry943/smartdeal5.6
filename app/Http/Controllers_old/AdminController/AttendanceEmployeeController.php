<?php

namespace App\Http\Controllers\AdminController;

use App\AttendanceEmployee;
use App\employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Carbon;

class AttendanceEmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $employees = AttendanceEmployee::all();
        return view('admin.Attendance_employee.index',compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //
        $employees = employee::all();
        return view('admin.Attendance_employee.create',compact('employees'));
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
        //get currentDate
        $currentDate = Carbon::now();

        //get request data
        $data = $request->only('employee_id','state');
        $data['created_at'] = $currentDate->toFormattedDateString();

        //get all data
        $all = AttendanceEmployee::all('employee_id','state','created_at');
        $alldata=[];

        // prepare all data
        foreach ($all as $a){
//            dd($a->created_at->toFormattedDateString());
            $done = [];
            $done['employee_id'] = $a->employee_id;
            $done['state'] = $a->state;
            $done['created_at'] =$a->created_at->toFormattedDateString();
            array_push($alldata,$done);
        }
        //check if request data is already found
        if(!in_array($data,$alldata)){
            $attednd = AttendanceEmployee::create($data);
            return redirect('admin/attendance-employee')->withFlashMessage('تم تسجيل الموظف ..:)');
        }
        return redirect()->back()->withFailedMessage('تم تسجيل هذا الموظف اليوم ..:)');

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
    }
}
