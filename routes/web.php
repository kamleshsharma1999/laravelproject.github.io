<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class,'index'])->name('home');
Route::group(['middleware'=>'admin'],function(){
    Route::get('/back','App\Http\Controllers\Admin\Admin@back');

});
// user_route
Route::get('/usersform','App\Http\Controllers\Admin\Users@usersform');
Route::post('/usersform','App\Http\Controllers\Admin\Users@postusersform');
Route::get('/usersformlist','App\Http\Controllers\Admin\Users@usersformlist');
Route::get('/user/{id}/formedit','App\Http\Controllers\Admin\Users@edits');
Route::put('/user/{id}/formedit','App\Http\Controllers\Admin\Users@editdata');
Route::get('/user/{id}/formdelete','App\Http\Controllers\Admin\Users@deleted');
// user_route and
// Banner route
Route::get('/BannerForm','App\Http\Controllers\Admin\BannerControlle@bannerForm');
Route::post('/BannerForm','App\Http\Controllers\Admin\BannerControlle@postbannerForm');
Route::get('/BannerFormlist','App\Http\Controllers\Admin\BannerControlle@BannerFormlist');
// banner_route and
// cms route
Route::get('/cmsform','App\Http\Controllers\Admin\CmsController@cmsform');
Route::Post('/cmsform','App\Http\Controllers\Admin\CmsController@postcmsform');
Route::get('/CmsFormlist','App\Http\Controllers\Admin\CmsController@CmsFormlist');
// cms_route and
// courser_route 
Route::get('/CoursesForm','App\Http\Controllers\Admin\CoursesController@CoursesForm');
Route::post('/CoursesForm','App\Http\Controllers\Admin\CoursesController@postcoursesform');
Route::get('/Courserslist','App\Http\Controllers\Admin\CoursesController@Courserslist');
Route::get('/courses/{id}/formedit','App\Http\Controllers\Admin\CoursesController@editss');
Route::put('/courses/{id}/formedit','App\Http\Controllers\Admin\CoursesController@editdata');
Route::get('/courses/{id}/formdelete','App\Http\Controllers\Admin\CoursesController@deleted');
//  courser_route and
// Trainer route
Route::get('/trainerForm','App\Http\Controllers\Admin\TrainerController@trainerForm');
Route::post('/trainerForm','App\Http\Controllers\Admin\TrainerController@posttrainerForm');
Route::get('/trainerFormlist','App\Http\Controllers\Admin\TrainerController@trainerFormlist');
Route::get('/Trainer/{id}/formedit','App\Http\Controllers\Admin\TrainerController@edits');
Route::post('/Trainer/{id}/formedit','App\Http\Controllers\Admin\TrainerController@editdata');
Route::get('/Trainer/{id}/formdelete','App\Http\Controllers\Admin\TrainerController@deleted');
// Trainer route and
// event route 
Route::get('/EventForm','App\Http\Controllers\Admin\EventContoller@EventForm');
Route::post('/EventForm','App\Http\Controllers\Admin\EventContoller@PostEventForm');
Route::get('/EventFormlist','App\Http\Controllers\Admin\EventContoller@EventFormlist');
Route::get('/Event/{id}/formedit','App\Http\Controllers\Admin\EventContoller@edits');
Route::post('/Event/{id}/formedit','App\Http\Controllers\Admin\EventContoller@editdata');
Route::get('/Event/{id}/formdelete','App\Http\Controllers\Admin\EventContoller@deleted');
// event route and
//Category
Route::get('/Categoryform','App\Http\Controllers\Admin\CategoryController@Categoryform');
Route::post('/Categoryform','App\Http\Controllers\Admin\CategoryController@addform');
Route::get('/Categorylist','App\Http\Controllers\Admin\CategoryController@Categorylist');
Route::get('/Category/{id}/formedit','App\Http\Controllers\Admin\CategoryController@editss');
Route::put('/Category/{id}/formedit','App\Http\Controllers\Admin\CategoryController@editdata');
Route::get('/Category/{id}/formdelete','App\Http\Controllers\Admin\CategoryController@deleted');
Route::get('/status-update/{id}','App\Http\Controllers\Admin\CategoryController@statuss');
//SubCategory
Route::get('/subCategorylistss','App\Http\Controllers\Admin\SubCategoryController@cagetorylistss');
Route::post('/subCategorylistss','App\Http\Controllers\Admin\SubCategoryController@subcategoryAdd');
//Route::get('dfdfdlists','App\Http\Controllers\Admin\SubCategoryController@jointable');
Route::get('/statusupdate/{id}','App\Http\Controllers\Admin\SubCategoryController@statusupdate');



// front route
Route::get('/homes','App\Http\Controllers\Front\HomeController@homes');
Route::get('/Courses','App\Http\Controllers\Front\Courses@coursess'); 
Route::get('/trainers','App\Http\Controllers\Front\Trainer@trainerss'); 
Route::get('/events','App\Http\Controllers\Front\Event@eventss'); 


Route::get('/about', function () {
    return view('Front/About');
});

Route::get('/pricing', function () {
    return view('Front/Pricing');
});
Route::get('/contact', function () {
    return view('Front/Contact');
});





