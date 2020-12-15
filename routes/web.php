<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

Route::get('/', function () {
    return view('welcome');
});


Route::get('/user/verify/{token}', 'Auth\RegisterController@verifyUser');

Route::get('/user/resend/verify/{id}', 'Auth\RegisterController@reverifyUser');


Route::get('user/logout', function () {
    Auth()->guard('web')->logout();
    return redirect('/');
});


//Admin Routes
Route::get('/admin/login', 'admin_auth@index');
Route::post('/admin/login', 'admin_auth@loginpost')->name('admin.login.submit');

Route::get('/admin/forget/password','admin_auth@forgetpassword');
Route::get('/admin/reset/password/{token}','admin_auth@resetpassword');
Route::post('/admin/reset/password/{token}','admin_auth@postresetpassword');
Route::post('/admin/forget/password','admin_auth@postforgetpassword');


Config::set('auth.defines','admin');
Route::get('admin/logout', function () {
    Auth()->guard('admin')->logout();
    return redirect('/admin/login');
});





//Route::group(['prefix' => LaravelLocalization::setLocale().'/','middleware'=>'auth:web'],function(){

Route::group(['prefix' => LaravelLocalization::setLocale().'/'],function(){

  Route::get('/', 'IndexController@index');


Route::get('resize', 'ResizeController@index');

Route::post('resize/resize_image', 'ResizeController@resize_image');





Route::get('home', 'HomeController@index')->name('home');

//news
Route::resource('user/news', 'userController\NewsController');

Route::get('user/news/{id}/delete','userController\NewsController@destroy');


//technical_analysis
Route::resource('user/technical_analysis', 'userController\TechicalAnalysisController');

Route::get('user/technical_analysis/{id}/delete','userController\TechicalAnalysisController@destroy');


//contact
Route::get('/contact', 'ContactController@index')->name('contact');
Route::post('/submit/contact', 'ContactController@send');
// News
Route::get('/news/{categories_id}', 'NewsController@index');
Route::get('/Forex_Details/{id}', 'News_DetailsController@index');
// News TechicalAnalysis
Route::get('/TechicalAnalysis/{categories_id}', 'NewsTechicalAnalysesController@index');
Route::get('/TechicalAnalysis_Details/{id}', 'TechicalAnalysis_DetailsController@index');

//our Traders
// Route::get('our/Traders', 'OurTradersController@index');
Route::get('our/Traders/Details/{user_id}', 'OurTradersDetailsController@index');
Route::get('our/Traders/Details/data/{id}', 'OurTradersDetailsController@data');

Route::get('our/Traders/category/Details/{user_id}/{category_id}', 'OurTradersDetailsController@categorydata');

//ٍservice
Route::get('service', 'ServiceController@index');

//Team
Route::get('team', 'TeamController@index');

//learn
Route::get('learn/{menuCategory}', 'LearnController@index');

//Articles
Route::get('Articles', 'ArticlesController@index');


//Articles
Route::get('Articles/{id}', 'ArticlesController@Details');


//Tools
Route::get('tools/chart', 'ToolsController@chart');
Route::get('tools/Calendar', 'ToolsController@Calendar');
Route::get('tools/RiskManagement', 'ToolsController@RiskManagement');



//Courses_Details
Route::get('Courses_Details/{id}', 'LearnController@CoursesDetails');

//Request A Quote
Route::post('RequestAQuote', 'RequestAQuoteController@send');



Route::get('test','userController\test@index');


 });








///Admin Route
    Route::group(['prefix' => LaravelLocalization::setLocale().'/admin','middleware'=>'admin:admin'],function(){


     Route::get('','AdminController\AdminController@index')->name('admin.dashboard');

     //News
     Route::resource('news','AdminController\NewsController');
     Route::get('news/{id}/delete','AdminController\NewsController@destroy');



     //TechicalAnalysisController
     Route::resource('TechicalAnalysis','AdminController\TechicalAnalysisController');
     Route::get('TechicalAnalysis/{id}/delete','AdminController\TechicalAnalysisController@destroy');




     //notes
     Route::resource('notes','AdminController\NoteController');
     Route::get('notes/{id}/delete','AdminController\NoteController@destroy');



     //News
     Route::resource('team','AdminController\TeamController');
     Route::get('team/{id}/delete','AdminController\TeamController@destroy');


     //Story
     Route::resource('story','AdminController\StoryController');
     Route::get('story/{id}/delete','AdminController\StoryController@destroy');



     //Gallerycategory
     Route::resource('Gallerycategory','AdminController\GallerycategoryController');
     Route::get('Gallerycategory/{id}/delete','AdminController\GallerycategoryController@destroy');


     //Gallery
     Route::resource('Gallery','AdminController\GalleryController');
     Route::get('Gallery/{id}/delete','AdminController\GalleryController@destroy');




     //learncategory
     Route::resource('learncategory','AdminController\LearncategoryController');
     Route::get('learncategory/{id}/delete','AdminController\LearncategoryController@destroy');



     //menuCategory
     Route::resource('menuCategory','AdminController\MenuCategoryController');
     Route::get('menuCategory/{id}/delete','AdminController\MenuCategoryController@destroy');



     //learn
     Route::resource('learn','AdminController\LearnController');
     Route::get('learn/{id}/delete','AdminController\LearnController@destroy');






     //report
     Route::resource('report','AdminController\ReportController');
     Route::get('report/{id}/delete','AdminController\ReportController@destroy');


     //slider
     Route::resource('slider','AdminController\SliderController');
     Route::get('slider/{id}/delete','AdminController\SliderController@destroy');








     Route::get('users','AdminController\AdminController@getAllUsers');
     Route::get('users/{id}/delete','AdminController\AdminController@deleteUser');


// for user managers routes
     Route::resource('user/manager','AdminController\UserManagerController');
     Route::get('user/manager/{id}/delete','AdminController\UserManagerController@destroy');



     // for managers routes
          Route::resource('manager','AdminController\managerController');
          Route::get('manager/{id}/delete','AdminController\managerController@destroy');




// for role  routes
     Route::resource('role','AdminController\roleController');
     Route::get('role/{id}/delete','AdminController\roleController@destroy');


     // for user  role routes
          Route::resource('user/role','AdminController\UserRoleController');
          Route::get('user/role/{id}/delete','AdminController\UserRoleController@destroy');



// for permission routes
     Route::resource('permission','AdminController\permissionController');
     Route::get('permission/{id}/delete','AdminController\permissionController@destroy');


 });
