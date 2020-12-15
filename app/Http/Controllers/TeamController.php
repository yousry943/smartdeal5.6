<?php

namespace App\Http\Controllers;

use App\news_techical_analyses;
use App\team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //


       $teams = team::all();
        $title = "Team";

         return view('website.pages-front.Team.index',compact('teams','title'));
    }


}
