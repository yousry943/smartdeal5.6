<?php

namespace App\Http\Controllers\userController;

use App\Http\Controllers\Controller;
use App\User;
use App\submit_papers;

class auther_paper extends Controller
{
    public function index()
    {
        // $x = \Auth::guard('web')->user()->can('autherPolicy.view');
        //
        // dd($x);

        if (
            \Auth::guard('web')
                ->user()
                ->can('autherPolicy.view')
        ) {
            $users = \Auth::user();
            $users->id;

            $papers = submit_papers::where('user_id', '=', $users->id)
                ->with(
                    'get_user',
                    'get_Track_Selction',
                    'get_metadata',
                    'get_submit_myreviews',
                    'get_auther_reply',
                    'get_editer_auther_comment',
                    'get_paper_status'
                )
                ->get();
            // dd($papers);

            return view('user.auther_paper.index', compact('papers'));
        } else {
            return view('user.permission.permission');
        }
    }
}
