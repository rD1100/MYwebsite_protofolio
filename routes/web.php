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
    return view('welcome');
});

// Route::view('/dashboard','dashboard.dashboard');
Route::view('/admin','admin.admin');
Route::view('login','admin.auth.signin');
Route::view('/exprience','admin.experience');
Route::view('user','admin.user');
Route::view('educations','admin.education');
Route::view('socialMedias','admin.socialMedia');
Route::view('skills','admin.skills');
Route::view('visitors','admin.visitors');

Route::view('/table','try');
Route::resource(('organizations'),OrganizationController::class);
Route::resource(('useraccess'),UserAccessController::class);
Route::resource(('user'),UserController::class);
Route::resource(('socialmedia'),SocialMediaController::class);
Route::resource(('educations'),Educations::class);
Route::resource(('skills'),Skills::class);
Route::resource(('dashboard'),DashboardController::class);
Route::resource(('experience'),Experience::class);