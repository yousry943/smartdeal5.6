<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Image;
use Guizoxxv\LaravelMultiSizeImage\MultiSizeImage;

class ResizeController extends Controller
{
    //



    function index()
    {
     return view('resize');
    }

    function resize_image(Request $request)
    {
     $this->validate($request, [
      'image'  => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
     ]);



//      $image = $request->file('image');
//      $name = $image->getClientOriginalName();
//
// $multiSizeImage = new MultiSizeImage();
//
// $filePath = \Storage::path('image/'.$name);
//
// $x = $multiSizeImage->processImage($filePath);
// dd($x);

$image = $request->file('image');
     $image_name = time() . '.' . $image->getClientOriginalExtension();

     $destinationPath = public_path('/thumbnail');

     $resize_image = Image::make($image->getRealPath());
     // $height = Image::make($upload_file)->height();

     $resize_image->resize(565, 749, function($constraint){
      $constraint->aspectRatio();
     })->save($destinationPath . '/' . $image_name);


     $destinationPath = public_path('/images');

     $image->move($destinationPath, $image_name);

     return back()
       ->with('success', 'Image Upload successful')
       ->with('imageName', $image_name);

    }
}
