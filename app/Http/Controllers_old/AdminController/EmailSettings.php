<?php

namespace App\Http\Controllers\AdminController;

use App\email_Templet;
use App\email_Form;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmailSettings extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $email_Templets = email_Templet::all();
        // dd($email_Templet);
        return view('admin.EmailSettings.index',compact('email_Templets'));
    }






    public function editEmailSettings($id)
    {
        //


        $email_Templets =  email_Form::where('user_templet_id', '=',$id)->get();


        return view('admin.EmailSettings.editEmailSettings',compact('email_Templets','id'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function posteditEmailSettings(Request $request, $id)
    {
        //

        email_Form::where('id', $id)->update(array(
            'subject' 	  =>  $request->subject,
            'body' 	  =>  $request->body,
            'user_templet_id' 	  =>  $id,


        ));



        return redirect()->back();


    }

}
