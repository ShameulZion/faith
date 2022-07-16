<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{
    ContactController,
    DashboardController,
    RoleController,
    UserController,
    SettingController,
    EventController,
    MeetingController,
    ProjectController,
    ReportController
};

/*
|--------------------------------------------------------------------------
| Bbackend Routes
|--------------------------------------------------------------------------
|
| Here is where you can register backend routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "backend" middleware group. Now create something great!
|
*/


Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

// Roles and Users
Route::resource('role', RoleController::class)->except(['show']);
Route::resource('user', UserController::class);

Route::resource('event', EventController::class);
Route::resource('meeting', MeetingController::class);
Route::resource('project', ProjectController::class);
Route::resource('report', ReportController::class);
Route::resource('contact', ContactController::class);



Route::get('setting', [SettingController::class, 'index'])->name('setting.index');
Route::patch('setting/appearance',[SettingController::class,'appearance'])->name('setting.appearance.update');
Route::patch('setting/social',[SettingController::class,'social'])->name('setting.social.update');
Route::patch('setting/socialite',[SettingController::class,'socialite'])->name('setting.socialite.update');
Route::patch('setting/mail',[SettingController::class,'mail'])->name('setting.mail.update');