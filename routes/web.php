<?php

use App\Http\Controllers\usercontroller;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\NotificationController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sendmail', function(){
    return view('inputs');
});

Route::post('/sendmail',[usercontroller::class,'userregister'])->name('inputs');

Route::get('/sendNotification',function(){
    return view('notifications');
});
Route::get('/test-notification', function () {
    broadcast(new \App\Events\NotifyUser('This is real time notification'));
    return 'notification sent successfully';
});
