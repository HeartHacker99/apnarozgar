<?php

use App\Http\Controllers\CheckoutController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\GigController;
use \App\Http\Controllers\PurchaseController;
use \App\Http\Controllers\SearchController;
use \App\Http\Controllers\ProfileController;
use \App\Http\Controllers\BidController;
use \App\Http\Controllers\IndexController;
use App\Http\Middleware\RoleWiseRoutes;
use \App\Http\Controllers\SubmitRequestController;
use Illuminate\Support\Facades\Auth;
use \App\Http\Middleware\empRoleWiseRoute;
use \App\Http\Controllers\AdminController;
use App\Http\Middleware\adminMiddleware;
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

/*
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');*/


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/error', [HomeController::class, 'error']);

Route::resource('gigs', GigController::class);
Route::get('/search', [SearchController::class, 'index']);
Route::get('/freelancers', [SearchController::class, 'freelancers']);

Route::prefix('admin')->group(function () {
    Route::middleware(['auth:sanctum', 'verified'])->group( function () {
        Route::middleware([adminMiddleware::class])->group(function() {
            Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard')->middleware('status');
            Route::resource('/admin', AdminController::class);
            Route::get('/buyers', [AdminController::class, 'buyers'])->name('buyers');
            Route::get('/sellers', [AdminController::class, 'sellers'])->name('sellers');
            Route::get('/user_status/{status}/{id}', [AdminController::class, 'user_status'])->name('user_status');
        });
    });
});
    Route::middleware(['auth:sanctum', 'verified'])->group( function () {
        Route::middleware([empRoleWiseRoute::class])->group(function() {

            Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard')->middleware('status');
            Route::resource('purchases', PurchaseController::class);
            Route::get('/assigned_projects', [PurchaseController::class, 'assigned_projects'])->name('assigned_projects');
            Route::get('/my_order/{status}/{id}', [GigController::class, 'orderstatus']);
            Route::get('/transection',[CheckoutController::class, 'index']);
            Route::post('/checkout',[CheckoutController::class, 'DoCheckout']);
            Route::post('/paymentStatus',[CheckoutController::class, 'paymentStatus']);
            Route::get('my_orders/{order}/{user_id}/{to_user_id}', [PurchaseController::class, 'show_single'])->name('show_single');
            Route::get('download/{file}', [IndexController::class, 'download']);
            Route::get('/request_create', [SubmitRequestController::class, 'create_buyer_request'])->name('request_create');
            Route::Post('/request_store', [SubmitRequestController::class, 'request_store'])->name('request_store');
            Route::get('/my_requests', [SubmitRequestController::class, 'index'])->name('my_requests');
            Route::get('/my_requests/{id}', [SubmitRequestController::class, 'index']);
            Route::PUT('/my_requests/{id}', [SubmitRequestController::class, 'update']);
            Route::DELETE('/my_requests/{id}', [SubmitRequestController::class, 'destroy']);
            Route::get('/my_requests/{status}/{id}', [SubmitRequestController::class, 'status']);
            Route::get('/Check_offers', [BidController::class, 'Check_offers'])->name('Check_offers');
            Route::get('/bids_on_requests', [BidController::class, 'bids_on_requests'])->name('bids_on_requests');

        });




        Route::middleware([RoleWiseRoutes::class])->group(function() {
 //           Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
            Route::get('my_orders', [PurchaseController::class, 'orders'])->name('my_orders');
            Route::get('my_sellings', [PurchaseController::class, 'sellings'])->name('my_sellings');
            Route::get('/my_gigs', [GigController::class, 'index'])->name('my_gigs');
            Route::get('/gigs_create', [GigController::class, 'create'])->name('gigs_create');
            Route::get('/gig_details', [GigController::class, 'show'])->name('gig_details');
            Route::Post('/gigs_store', [GigController::class, 'store'])->name('gigs_store');
            Route::get('/my_gigs/{status}/{id}', [GigController::class, 'status']);
            Route::post('/upload',[indexController::class, 'upload']);
            Route::get('/buyer_requests', [SubmitRequestController::class, 'buyer_requests'])->name('buyer_requests');
            Route::post('/create_bid/{id}', [BidController::class, 'create_bid'])->name('create_bid');
            Route::get('/send_requests', [BidController::class, 'send_requests'])->name('send_requests');
            Route::DELETE('/my_bids/{id}', [BidController::class, 'my_bids'])->name('my_bids');
            Route::PUT('/edit_bid/{id}', [BidController::class, 'edit_bid'])->name('edit_bid');
            Route::delete('/delete_bid/{id}', [BidController::class, 'delete_bid'])->name('delete_bid');

        });

});
