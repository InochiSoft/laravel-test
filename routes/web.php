<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardDesignerController;
use App\Http\Controllers\DashboardAudienceController;
use App\Http\Controllers\DashboardInvitationController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\InvitationController;
use App\Http\Controllers\LoginController;
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
    $expire_time = strtotime("+1 months", strtotime("2022-09-22"));
    return view('welcome', [
        'expired_registration' => $expire_time // date('m/d/Y', $expire_time)
    ]);
});

Route::get('/invitation/{code}', [InvitationController::class, 'show']);
Route::post('/invitation/{code}', [InvitationController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])
    ->name('login')
    ->middleware('guest');

Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])
    ->name('logout');

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard')
    ->middleware('auth');

Route::resource(
    '/dashboard/invitations',
    DashboardInvitationController::class)
    ->middleware('auth')
;

Route::resource(
    '/dashboard/users',
    DashboardUserController::class)
    ->middleware('auth');

Route::resource(
    '/dashboard/audiences',
    DashboardAudienceController::class)
    ->middleware('auth');

Route::resource(
    '/dashboard/designers',
    DashboardDesignerController::class)
    ->middleware('auth');
