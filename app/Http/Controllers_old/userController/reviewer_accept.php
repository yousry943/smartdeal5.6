<?php

namespace App\Http\Controllers\userController;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Assign_reviewer;

class reviewer_accept extends Controller
{
    public function index($id)
    {
        // $permissions = Permission::all();
        return view('user.reviews.reviewer_accept', compact('id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if ($request->accept == 'accept') {
            
            $daynow = \Carbon\Carbon::now();
            $today = \Carbon\Carbon::today();

            $Due = $daynow->addDays(7);
            // dd($daynow);

            Assign_reviewer::where('paper_id', $request->id)->update([
                'accept_date' => $today,
                'Due' => $Due
            ]);
        }

        return redirect('/home');

        // $reviewer_accept->save();
    }
}
