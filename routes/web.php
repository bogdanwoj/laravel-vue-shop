<?php

    use App\Http\Controllers\Auth\LogoutController;
    use App\Http\Controllers\CartsController;
    use App\Http\Controllers\ContactsController;
    use App\Http\Controllers\ProductsController;
    use Illuminate\Support\Facades\Auth;
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

Route::get('/', [ProductsController::class, 'index']);

Route::get('/logout', [LogoutController::class, 'logout']);;
Auth::routes();

Route::post('/cart', [CartsController::class, 'store'])->name('cart');
Route::get('/checkout', [CartsController::class, 'index'])->name('checkout');
Route::get('/checkout/get/items', [CartsController::class, 'getCartItemsForCheckout']);
Route::post('/process/user/payment', [CartsController::class, 'processPayment']);
Route::get('/countCartItems', [CartsController::class, 'countCartItems'])->name('countCartItems');

//Route::get('/contacts/create', [ContactsController::class, 'create'])->name('contacts.create');
//Route::post('/contacts', [ContactsController::class, 'store'])->name('contacts.store');

    Route::get('/contact', [ContactsController::class, 'index'])->name('contacts.index');
    Route::post('/contact/store', [ContactsController::class, 'store'])->name('storeContact');

