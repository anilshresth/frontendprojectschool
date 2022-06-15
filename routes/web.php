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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',function(){
    return view('frontend.home.home');
})->name('/');

Route::get('/introduction',function(){
    return view('frontend.introduction.introduction');
})->name('introduction');

Route::get('/management',function(){
    return view('frontend.management.management');
})->name('management');

Route::get('/humanresource',function(){
    return view('frontend.humanresource.humanresource');
})->name('humanresource');


Route::get('/mission',function(){
    return view('frontend.mission.mission');
})->name('misson');

Route::get('/messageprincipal',function(){
    return view('frontend.messageprincipal.messageprincipal');
})->name('messageprincipal');

Route::get('/messageexecutive',function(){
    return view('frontend.messageexecutive.messageexecutive');
})->name('messageexecutive');

Route::get('/montessori',function(){
    return view('frontend.montessori.montessori');
})->name('montessori');

Route::get('/rhedon-secondary',function(){
    return view('frontend.rhedonsecondary.rhedonsecondary');
})->name('rhedonsecondary');

Route::get('/rhedon-plus2',function(){
    return view('frontend.rhedonplus2.rhedonplus2');
})->name('rhedonplus2');

Route::get('/rhedonbbs',function(){
    return view('frontend.rhedonbbs.rhedonbbs');
})->name('rhedonbbs');


Route::get('/services',function(){
    return view('frontend.services.services');
})->name('services');

Route::get('/schooladmission',function(){
    return view('frontend.schooladmission.schooladmission');
})->name('schooladmission');

Route::get('/nebadmission',function(){
    return view('frontend.nebadmission.nebadmission');
})->name('nebadmission');

Route::get('/bbsadmission',function(){
    return view('frontend.bbsadmission.bbsadmission');
})->name('bbsadmission');


Route::get('/rhedonianvoice',function(){
    return view('frontend.rhedonianvoice.rhedonianvoice');
})->name('rhedonianvoice');

Route::get('/connect',function(){
    return view('frontend.connect.connect');
})->name('connect');



