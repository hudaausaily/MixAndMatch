<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CatregoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\User\PublicUserController;
use App\Http\Controllers\User\RegisterUserController;
use App\Http\Controllers\User\LoginUserController;
use App\Http\Controllers\User\PackageDetailsController;
use App\Http\Controllers\User\productsDetailsController;
use App\Http\Controllers\User\EditBookController;
use App\Http\Controllers\User\BookController;
use App\Http\Controllers\User\ProfileUserController;
use App\Http\Controllers\User\CartController;
use App\Http\Controllers\User\CheckoutController;
use App\Http\Controllers\FeedController;
use App\Http\Controllers\User\ShopController;
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
Route::resource('/products',ProductController::class);
Route::resource('/order',OrderController::class);
Route::get('contact',[FeedController::class,'show'])->name('contact.show');

});







Route::get('/user', function () {
    return view('user.home');
});
Route::prefix('user')->name('user.')->group(function () {

    Route::get('/shop',[ShopController::class,'index'])->name('shop');
    Route::get('/singleProduct/{id}',[ShopController::class,'single'])->name('single');


    Route::post('/place-order', [OrderController::class, 'store'])->name('place-order');


    Route::get('/categories/{id}',[PublicUserController::class,'show'])->name('categories.show');
    
    Route::get('/about',function(){
        return view('user.about');
    })->name('about');
    Route::get('/news',function(){
        return view('user.news');
    })->name('news');
    Route::get('/contact',function(){
        return view('user.contact');
    })->name('contact');
    Route::get('/cart', [CartController::class, 'index'])->name('cart.show');
    Route::get('/checkout/{id}', [CheckoutController::class, 'index'])->name('checkout.index');
    Route::get('/cart/remove/{id}', [CartController::class, 'removeFromCart'])->name('cart.remove');
    Route::post('/cart/{id}', [CartController::class, 'updateCart'])->name('cart.update');
    // Route::patch('/cart/update/{id}', [CartController::class, 'updateCart'])->name('user.cart.update');




    Route::get('/add-to-cart/{id}',[CartController::class,'addToCart'])->name('cart.add');

    
    Route::get('/user',[RegisterUserController::class,'store'])->name('signup.store');
    Route::get('/login/check',[LoginUserController::class,'LoginPost'])->name('login.check');


    
    //  Route::get('/contact',[FeedController::class,'index'])->name('contact');
     Route::get('/contact/create',[FeedController::class,'store'])->name('contact.create');
    
    Route::resource('/signup',RegisterUserController::class);
    Route::post('/search' , [Search::class , 'search'])->name('search');
    Route::get('/login',[LoginUserController::class,'index'])->name('login');
    Route::get('/login/check',[LoginUserController::class,'LoginPost'])->name('login.check');
    Route::get('/login/destroy',[LoginUserController::class,'destroy'])->name('login.destroy');
    
    Route::resource('/profile',ProfileUserController::class);
    
    Route::get('/package_details/{id}',[PackageDetailsController::class,'index'])->name('package.details');
    
    Route::get('/product_details/{id}',[productsDetailsController::class,'index'])->name('product.details');
    Route::get('/booking/{id}',[BookController::class,'index'])->name('book')->middleware('CheckLogin');
    Route::get('/booking/create/{id}',[BookController::class,'create'])->name('book.create')->middleware('CheckLogin');
    
    Route::get('/profile/editPook/{id}',[EditBookController::class,'index'])->name('book.edit');
    Route::get('/profile/update/{id}',[EditBookController::class,'update'])->name('book.update');
    });
    require __DIR__.'/auth.php';
