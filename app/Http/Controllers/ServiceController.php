<?php

namespace App\Http\Controllers;

use App\news_techical_analyses;
use App\language;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //




         return view('website.pages-front.Service.index');
    }


}
