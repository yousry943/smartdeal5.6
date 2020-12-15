<?php // Code within app\Helpers\Helper.php

namespace App\Helpers;
use Mail;
use App\Refrence_Code;
use Image;
use Guizoxxv\LaravelMultiSizeImage\MultiSizeImage;
class Helper
{
    public static function sendmail($data)
    {


     Mail::send($data['blade-path'], $data, function ($message) use ($data)
        {

              $message->from($data['from']);

            $message->to($data['to']);

            $message->subject($data['subject']);

        });


    }



    public static function uploadImage($request,$destination){



           $image_name = time() . '.' . $request->getClientOriginalExtension();
           $image_name70 = time() . '.' . $request->getClientOriginalExtension();
           //
           // $destinationPath = public_path('/thumbnail');
           //
           // $resize_image = Image::make($request->getRealPath());
           // // $height = Image::make($upload_file)->height();
           //
           // $resize_image->resize(749, 565, function($constraint){
           //  $constraint->aspectRatio();
           // })->save($destinationPath . '/' . $image_name);

     Image::make( $request->getRealPath() )->fit(749, 565)->save($destination.$image_name)->destroy();
      Image::make( $request->getRealPath() )->fit(70, 70)->save('uplodes/newsphoto70/'.$image_name70)->destroy();
           $name =$request->getClientOriginalName();

           $final_name = str_replace(' ', '-', $image_name);
// dd($x);
//            $destinationPath = public_path('/images');
//
//            $request->move($destinationPath, $image_name);
//
//            $name =$request->getClientOriginalName();
//
//            $final_name = str_replace(' ', '-', $image_name);
           return $final_name;




           // $image->move($destinationPath, $image_name);


//        $filename = $request->getClientOriginalName();
//
// $mytime = \Carbon\Carbon::now();
// $time = $mytime->todateString()  ;
//
// $extension = $request->getClientOriginalExtension();
//
// // dd($extension);
//  $name =$time.$request->getClientOriginalName(); // $mytime.$request->getClientOriginalName();
// //
// //  dd($name);
//  $final_name = str_replace(' ', '-', $name);
//
//
//
//  $request->move($destination,$final_name);
// return $final_name;

// $multiSizeImage = new MultiSizeImage();
// $image = $request->getClientOriginalName();
//
// // dd($image);
// $storepath = \Storage::path('image/');
// //dd($storepath);
// $request->move($storepath,$image);
// $filePath = $storepath.$image;
// $outputPath = $path = $destination ;
// //dd($filePath);
// $final_name = $multiSizeImage->processImage($filePath,$outputPath);
//  return $final_name[0];
 //dd($final_name);


 //  $destinationPath = public_path('/images');
 //
 // $request->move($destinationPath, $image);
 //
 //
 //    return $final_name;


    }


    public static function generateCode($model_name){


      $get_Refrence_code = Refrence_Code::where('model_name', '=', 'jornal')->get();


      $Refrence = $get_Refrence_code->first()->title.'-'.$get_Refrence_code->first()->start;
      $new_start  = $get_Refrence_code->first()->start + 1;

      $Refrence_Code = Refrence_Code::find($get_Refrence_code->first()->id);

    return  $Refrence;


    }


}
