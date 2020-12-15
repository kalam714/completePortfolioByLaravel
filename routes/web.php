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

Route::get('/', function () {
    return view('index');
});
Route::get('/admin/index', function () {
    return view('admin.index');
});
Auth::routes();
Route::get('/','App\Http\Controllers\FrontendController@getData');
Route::get('/singlePost/{slug}/{id}','App\Http\Controllers\FrontendController@singlePost')->name('single.post');
Route::get('/projectDetails/{slug}/{id}','App\Http\Controllers\FrontendController@detailsProject')->name('details.project');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('message/store','App\Http\Controllers\ContactController@messageSent');
Route::get('messageGet','App\Http\Controllers\ContactController@getMessage')->name('message.get');
Route::delete('destroy/message/{id}','App\Http\Controllers\ContactController@destroyMessage')->name('message.destroy');
Route::resource('project','App\Http\Controllers\ProjectController');
Route::resource('experience','App\Http\Controllers\ExperienceController');
Route::resource('education','App\Http\Controllers\EducationController');
Route::resource('post','App\Http\Controllers\PostController');
Route::resource('skill','App\Http\Controllers\SkillController');