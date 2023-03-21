<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CatregoryController;
use App\Http\Controllers\Admin\TripController;
use App\Http\Controllers\Admin\ReservationController;
use App\Http\Controllers\User\PublicUserController;
use App\Http\Controllers\User\RegisterUserController;
use App\Http\Controllers\User\LoginUserController;
use App\Http\Controllers\User\PackageDetailsController;
use App\Http\Controllers\User\TripsDetailsController;
use App\Http\Controllers\User\EditBookController;
use App\Http\Controllers\User\BookController;
use App\Http\Controllers\User\ProfileUserController;
use App\Http\Controllers\FeedController;
use App\Http\Controllers\User\Search;


Route::get('/admin/table', function () {
    return view('admin.table');
});

Route::get('/', function () {
    return view('admin.login');
});

Route::get('/dashboard', function () {
    return view('admin.index');

})->middleware(['auth', 'verified','admin'])->name('dashboard');


Route::middleware(['auth','verified','admin'])->name('admin.')->prefix('admin')->group(function()
{
Route::get('/',[AdminController::class,'index'])->name('index');
Route::get('/admin',[AdminController::class,'admin'])->name('show.admin');
Route::resource('/users',UserController::class);
Route::resource('/categories',CatregoryController::class);
Route::resource('/trips',TripController::class);
Route::resource('/reservation',ReservationController::class);
});







Route::get('/user', function () {
    return view('user.home');
});
Route::prefix('user')->name('user.')->group(function () {



    // Route::get('/',[PublicUserController::class,'index'])->name('index');
    Route::get('/categories/{id}',[PublicUserController::class,'show'])->name('categories.show');
    
    Route::get('/about',function(){
        return view('publicUser.about');
    })->name('about');
    
    // Route::get('/contact',function(){
    //     return view('publicUser.contact');
    // })->name('contact');
    
     Route::get('/contact',[FeedController::class,'index'])->name('contact');
     Route::get('/admin/contact',[FeedController::class,'show'])->name('contact.show');
     Route::get('/contact/create',[FeedController::class,'store'])->name('contact.create');
    
    Route::resource('/signup',RegisterUserController::class);
    Route::post('/search' , [Search::class , 'search'])->name('search');
    Route::get('/login',[LoginUserController::class,'index'])->name('login');
    Route::get('/login/check',[LoginUserController::class,'LoginPost'])->name('login.check');
    Route::get('/login/destroy',[LoginUserController::class,'destroy'])->name('login.destroy');
    
    Route::resource('/profile',ProfileUserController::class);
    
    Route::get('/package_details/{id}',[PackageDetailsController::class,'index'])->name('package.details');
    
    Route::get('/trip_details/{id}',[TripsDetailsController::class,'index'])->name('trip.details');
    Route::get('/booking/{id}',[BookController::class,'index'])->name('book')->middleware('CheckLogin');
    Route::get('/booking/create/{id}',[BookController::class,'create'])->name('book.create')->middleware('CheckLogin');
    
    Route::get('/profile/editPook/{id}',[EditBookController::class,'index'])->name('book.edit');
    Route::get('/profile/update/{id}',[EditBookController::class,'update'])->name('book.update');
    });
    require __DIR__.'/auth.php';
