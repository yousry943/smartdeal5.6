<?php

namespace App\Http\Controllers\userController;
use App\submit_papers;
use App\Assign_reviewer;

use App\paper_reply;

use App\submit_myreviews;
use App\Editor_decisions;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class mainreview extends Controller
{
    public function index($id)
    {
        $reviewers = Assign_reviewer::where('paper_id', '=', $id)->get();

        if (!empty($reviewers->first()->paper_id)) {
            foreach ($reviewers as $reviewer) {
                $submit_myreview = $reviewer
                    ->get_submit_reviewers(
                        $reviewer['paper_id'],
                        $reviewer['user_id']
                    )
                    ->last();
                $paper_reply = $reviewer
                    ->get_paper_reply(
                        $reviewer['paper_id'],
                        $reviewer['user_id']
                    )
                    ->last();
                $user = $reviewer->get_user($reviewer['user_id'])->last();

                $auther = submit_papers::where('id', '=', $id)
                    ->with('get_user')
                    ->get();

                $all[] = [
                    $user,
                    $reviewer,
                    $submit_myreview,
                    $paper_reply,
                    $auther
                ];
            }

            //dd($all[0][4][0]->get_user->id);

            $all_count = count($all);

            //$all[0][6][0]->get_user->email
            //dd($all[0][5][0]->get_user->email);
            return view(
                'user.mainreview.index',
                compact('id', 'all', 'all_count', 'reviewers')
            );
        } else {
            return redirect('home/editor/selectreview/' . $id);
        }
    }
}
