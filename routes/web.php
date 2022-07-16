<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    FrontendController
};

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




Route::get('/',[FrontendController::class,'index']);

Route::get('/about-us',[FrontendController::class,'about'])->name('about');
Route::get('/ec-members',[FrontendController::class,'leadership'])->name('leadership');
Route::get('/policy-and-guidelines',[FrontendController::class,'guidelines'])->name('guidelines');
Route::get('/where-we-work',[FrontendController::class,'work'])->name('work');
Route::get('/stories-of-the-most-significant-changes',[FrontendController::class,'significant'])->name('significant');
Route::get('/annual-reports',[FrontendController::class,'reports'])->name('reports');


Route::get('/disaster-risk-reduction-and-climate-change-adaptation',[FrontendController::class,'drrAndCca'])->name('drr-and-cca');
Route::get('/livelihoods-development-and-economic-empowerment',[FrontendController::class,'empowerment'])->name('empowerment');
Route::get('/health-nutrition-and-wash',[FrontendController::class,'healthNutritionWash'])->name('health-nutrition-wash');
Route::get('/child-and-adolescent-wellbeing-rights-and-protection',[FrontendController::class,'childRights'])->name('child-rights');
Route::get('/humanitarian-response',[FrontendController::class,'humanitarianResponse'])->name('humanitarian-response');
Route::get('/tearfund-australia',[FrontendController::class,'tearfund'])->name('tearfund');
Route::get('/world-renew',[FrontendController::class,'worldRenew'])->name('world-renew');
Route::get('/knh-germany',[FrontendController::class,'germany'])->name('knh-germany');
Route::get('/canadian-food-grain-bank',[FrontendController::class,'canadian'])->name('canadian');
Route::get('/entrust-foundation-australia',[FrontendController::class,'australia'])->name('australia');
Route::get('/acts-church-singapore',[FrontendController::class,'singapore'])->name('singapore');
Route::get('/hoffnungszeichen-sign-of-hope',[FrontendController::class,'hoffnungszeichen'])->name('hoffnungszeichen');
Route::get('/bangladesh-govt',[FrontendController::class,'bangladeshGovt'])->name('bangladeshGovt');
Route::get('/usaid',[FrontendController::class,'usaid'])->name('usaid');
Route::get('/commitment-of-fia',[FrontendController::class,'commitment'])->name('commitment');
Route::get('/legal-status',[FrontendController::class,'legal'])->name('legal');
Route::get('/emerge-of-fia',[FrontendController::class,'emerge'])->name('emerge');




Route::get('/scan-bangladesh',[FrontendController::class,'scanBangladesh'])->name('scan-bangladesh');
Route::get('/micah-global',[FrontendController::class,'micahGlobal'])->name('micah-global');

Route::get('/donate',[FrontendController::class,'donate'])->name('donate');

Route::get('/our-events',[FrontendController::class,'events'])->name('events');
Route::get('/our-meetings',[FrontendController::class,'meetings'])->name('meetings');
Route::get('/our-projects',[FrontendController::class,'projects'])->name('projects');

Route::get('/contact',[FrontendController::class,'contact'])->name('contact');
Route::post('/contact',[FrontendController::class,'contactData']);
Route::get('/join-us',[FrontendController::class,'join'])->name('join-us');
Route::post('/join-us',[FrontendController::class,'joinData']);

Route::get('/comming-soon',[FrontendController::class,'comming'])->name('comming');


Auth::routes(['register' => false]);



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('{slug}',[FrontendController::class,'slug']);



