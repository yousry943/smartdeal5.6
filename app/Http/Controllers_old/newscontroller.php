<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\news;
use App\comments;
use Helper;

class newscontroller extends Controller
{

  public function test()
    {
       return  Helper::shout('now i\'m using my helper class in a controller!!');
    }



  public function insert(){
 return view('test');
  }

  public function  insertdb( request $request){
  $insert = new news ;
  $insert->name = request('name');
  $insert->number = request('number');
  $insert->save();
  return redirect('insert');


  }
  public function showdb(){
  	  $show = news::all();
  	
  	 
  	  return  view('test',compact('show') );

  }

    public function delete($id){
  	  $delete = news::find($id);
  	  $delete->delete();

  	  return  redirect('insert');

  }

  public function insertajax(){
 return view('insertajax');
  }

  
  public function uplodeget(){
 return view('uplode');
  }

  public function uplodepost(){
// return request()->all();
    $this->validate(request(),['file.*'=>'required|image|mimes:jpg,png,gif']);
    //$this->validate(request(),['file'=>'required|array']);
    $files = request()->file('file');
    foreach ($files as $file) {
      # code...

    $name = $file->getClientOriginalName();
    $realpath = $file->getRealPath();
     $file->move(public_path('uplode'),$name);
  }
  return back();
    }


    public function  getaddnews(){
            $show = news::all();
    
     
      return  view('addnews',compact('show') );


    }

    public function  postaddnews(){
$data =  $this->validate(request(),[
  'name'=>'required',
  ]);

  $insert = new news ;
  $insert->name = request('name');
  $insert->number = request('number');
  $insert['user_id'] = auth()->user()->id;
  
  $insert->save();
  return redirect('addnews');

    }

    public function  renews($id){
      $news = news::with('user_id')->find($id);
      
   return  view('newsrelation',compact('news') );
    }



    public function add_comments(Request $request,$news_id){
      $data= $this->validate(request(),[
        'comments'=>'required',
        ]);
      $data = new comments;
      $data['user_id'] = auth()->user()->id;
      $data['news_id'] = $news_id;
      
     $data->comments = request('comments');
    
      //comments::create($data);
     $data->save();

     return back();

//dd($data);
   

    }



}


