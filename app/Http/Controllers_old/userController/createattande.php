<?php

namespace App\Http\Controllers\userController;

use App\Http\Controllers\Controller;
use App\teacher;
use App\Subject;
use App\AttendaceStudent;
use Illuminate\Http\Request;
use Auth;

class createattande extends Controller
{
    //

    public function __construct()
    {
        //        $this->middleware('admin:admin');
    }

    public function index()
    {
        return view('admin.createstudent');
    }
    public function showattande(Request $request, $search = null)
    {
        $seg = Auth::guard('web')->user()->id;
        if ($search == null) {
            $users = AttendaceStudent::orderBy('id', 'DESC')
                ->where('student_id', '=', $seg)
                ->paginate(10);

            return view('user.attendance_student.index', compact('users'));
        }

        $users = AttendaceStudent::where(
            'created_at',
            'LIKE',
            '%' . $request->search . '%'
        )->paginate(10);

        return view('user.attendance_student.index', compact('users'));
    }
}
