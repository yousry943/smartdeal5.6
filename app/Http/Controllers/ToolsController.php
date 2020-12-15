<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToolsController extends Controller
{
    //
    public function chart()
    {

      $title = "Chart";

          return view('website.pages-front.Tools.chart',compact('title'));
    }



    public function Calendar()
    {
        //
            $title = "Calendar";
        return view('website.pages-front.Tools.Calendar',compact('title'));
    }





    public function RiskManagement()
    {
            $title = "Risk Management";
        return view('website.pages-front.Tools.RiskManagement',compact('title'));
    }

}
