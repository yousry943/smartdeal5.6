<?php

namespace App\Http\Controllers\userController;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\submit_papers;
use App\Submission_Instructions;
use App\Track_Selction;
use App\paper_examples;

use Helper;

class submit_paper extends Controller
{
    public function index()
    {
        // $Submission_Instructions =  Submission_Instructions::all();
        //
        // $paper_example = $Submission_Instructions->first()->paper_example;

        $Track_Selctions = Track_Selction::all();
        $paper_examples = paper_examples::all();

        return view(
            'user.submit_paper.index',
            compact('Track_Selctions', 'paper_examples')
        );
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'Track_Selction' => 'required',
            // 'description' => 'required',
            'paper' => 'required|mimes:doc,docx,pdf|max:2048'
        ]);

        $submit_papers = new submit_papers();

        $seg = \Auth::guard('web')->user()->id;

        $submit_papers->user_id = $seg;

        $submit_papers->Track_Selction_id = $request->Track_Selction;
        $submit_papers->status = '1';

        $submit_papers->paper_link = Helper::uploadPaper(
            $request->file('paper'),
            'submit_papers/'
        );
        $submit_papers->save();
        $paper_id = $submit_papers->id;

        return redirect('home/metadata/' . $paper_id);
    }
}
