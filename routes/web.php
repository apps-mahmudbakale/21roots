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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth']], function ()
{
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('test', [UserController::class, 'test'])->name('test');
    Route::resource('users', UserController::class);
    Route::resource('questions', QuestionController::class);
    Route::get('profile', [UserController::class, 'profile'])->name('profile');
    Route::put('profile/{id}', [UserController::class, 'updateProfile'])->name('update.profile');
    Route::resource('roles', RoleController::class);
    Route::resource('recruites', RecruiteController::class);
    Route::resource('jobs', JobController::class);
    Route::resource('documents', DocumentController::class);
    Route::get('changePassword', [UserController::class, 'changepasswordForm'])->name('password.change');
    Route::post('changepassword', [UserController::class, 'changepassword'])->name('change.password');

});
