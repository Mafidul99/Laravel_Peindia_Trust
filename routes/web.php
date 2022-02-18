<?php

use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\ServicesController;
use App\Http\Controllers\Frontend\PrgghyController;
use App\Http\Controllers\Frontend\MyBlogController;
use App\Http\Controllers\Frontend\OurteamController;
use App\Http\Controllers\Frontend\CommingSoonController;
use App\Http\Controllers\Frontend\TermsConditionController;
use App\Http\Controllers\Frontend\PrivacyPolicyController;
use App\Http\Controllers\Frontend\DonateController;

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

//Route::get('/', function () {
    //return view('welcome');
//});

//Auth::routes();

//Frontend Link///
Route::get('/', [HomeController::class, 'index']);
Route::get('/about',[AboutController::class,'about']);
Route::get('/contact',[ContactController::class,'contact']);
Route::get('/services',[ServicesController::class,'services']);
Route::get('/prgghy',[PrgghyController::class,'prgghy']);
Route::get('/blog',[MyBlogController::class,'blog']);
Route::get('/ourteam',[OurteamController::class,'ourteam']);
Route::get('/comming',[CommingSoonController::class,'comming']);
Route::get('/privacy',[PrivacyPolicyController::class,'privacy']);
Route::get('/terms',[TermsConditionController::class,'terms']);
Route::get('/donate',[DonateController::class,'Donate']);
