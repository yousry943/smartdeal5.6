<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\contact;
use Helper;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // dd('yousry');
        // return view('website.front.contact.index',compact('users'));
        return view('website.pages-front.contact.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function send(Request $request )
    {
        dd($request);

   //      \Mail::send($data['blade-path'], $data, function ($message) use ($data)
   // {
   //
   //       $message->from($data['from']);
   //
   //     $message->to($data['to']);
   //
   //     $message->subject($data['subject']);
   //
   // });
   //
   //
   // Helper::sendmail($data);
    }


}
