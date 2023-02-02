<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Admin\Experience\Experience;
use App\Http\Controllers\Admin\Skills\Skills;
use App\Http\Controllers\Admin\Educations\Educations;
use App\Http\Controllers\Admin\SocialMedia\SocialMediaController;
use App\Http\Controllers\Admin\User\UserController;
use App\Http\Controllers\Admin\UserAccess\UserAccessController;
use App\Http\Controllers\Admin\Organization\OrganizationController;


Route::get('/', function () {
    return view('welcome');
});

Route::view('/admin','admin.admin');
Route::view('login','admin.auth.signin');
// Route::post('user/update', [UserController::class, 'update'])->name('user.update');



Route::view('/try','modal-edit');
Route::resource(('organizations'),OrganizationController::class);
Route::resource(('useraccess'),UserAccessController::class);
Route::resource('user',UserController::class)->middleware('web');
Route::resource(('socialmedia'),SocialMediaController::class);
Route::resource(('educations'),Educations::class);
Route::resource(('skills'),Skills::class);
Route::resource(('dashboard'),DashboardController::class);
Route::resource(('experience'),Experience::class);