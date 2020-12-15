<?php

namespace App\Http\Controllers\AdminController;

use App\ClassRoom;
use App\Group;
use App\Subject;
use App\teacher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $groups = Group::all();
        return view('admin.Group.index',compact('groups'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        if(Auth::guard('admin')->user()->can('group.create')){
            $subjects = Subject::all();
            $teachers = teacher::all();
            $classes = ClassRoom::all();

            return view('admin.Group.create',compact('subjects','teachers','classes'));
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
            'from' => 'numeric',
            'to' => 'numeric',

        ]);
//        dd($request->all());
        $group = Group::create($request->all());
        return redirect('admin/group')->withFlashMessage('تم اضافة المجموعة ..:)');

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
        if(Auth::guard('admin')->user()->can('group.update')){
            $group = Group::find($id);
            $subjects = Subject::all();
            $teachers = teacher::all();
            $classes = ClassRoom::all();
            return view('admin.Group.edit',compact('group','subjects','teachers','classes'));
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
            'from' => 'numeric',
            'to' => 'numeric',

        ]);
        $group = Group::find($id);
        $group->name            = $request->name;
        $group->from            = $request->from;
        $group->to              = $request->to;
        $group->subject_id      = $request->subject_id;
        $group->teacher_id      = $request->teacher_id;
        $group->class_room_id   = $request->class_room_id;
        if($group->save()){
         return redirect('admin/group')->withFlashMessage('تم تعديل المجموعة ..:)');
        }
        return redirect()->back();


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
        if(Auth::guard('admin')->user()->can('group.delete')){
            $group = Group::destroy($id);
            return redirect('admin/group')->withFlashMessage('تم مسح المجموعة ..:)');

        }
        return redirect()->back();

    }
}
