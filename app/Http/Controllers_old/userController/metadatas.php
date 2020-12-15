<?php

namespace App\Http\Controllers\userController;

use App\metadata;
use App\submit_papers;
use Response;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class metadatas extends Controller
{
    public function index($id)
    {
        $users = \Auth::user();

        // dd($users);

        return view('user.metadata.index', compact('users', 'id'));
    }

    public function create(Request $request, $id)
    {
        $this->validate($request, [
            'Title' => 'required',
            'Abstract' => 'required',
            'Academic_discipline' => 'required',
            'Subject_classification' => 'required',
            'Keywords' => 'required',
            'Language' => 'required',
            'papers_id' => 'required'
        ]);

        $input = Input::all();

        $metadata = metadata::create($input);

        $submit_papers = submit_papers::find($id);
        $submit_papers->metadata_id = $metadata->id;
        $submit_papers->save();

        return redirect('home/confirmation');
    }

    public function edit(Request $request, $id)
    {
        $metadata = metadata::where('papers_id', '=', $id)->get();
        $paper = submit_papers::where('id', '=', $id)
            ->with('get_user', 'get_metadata')
            ->get();
        //dd($paper);

        return view('user.metadata.edit', compact('metadata', 'id', 'paper'));
    }

    public function editform(Request $request, $id)
    {
        $metadata = metadata::updateOrCreate(
            ['papers_id' => $id],
            [
                'Title' => $request->Title,
                'papers_id' => $id,
                'Abstract' => $request->Abstract,
                'Academic_discipline' => $request->Academic_discipline,
                'Subject_classification' => $request->Subject_classification,
                'Keywords' => $request->Keywords,
                'Language' => $request->Language,
                'Affilation' => $request->Affilation,
                'Country' => $request->Country,
                'URL' => $request->URL
            ]
        );

        submit_papers::where('id', $id)->update(array(
            'metadata_id' => $metadata->id
        ));

        return redirect('/home/auther_paper');
    }
}
