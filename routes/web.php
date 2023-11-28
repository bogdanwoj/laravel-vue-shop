<?php

    use App\Http\Controllers\Auth\LogoutController;
    use App\Http\Controllers\CartsController;
    use App\Http\Controllers\AdminDashboardsController;
    use App\Http\Controllers\ContactsController;
    use App\Http\Controllers\ProductsController;
    use App\Models\Product;
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

//Route::get('/productsList', [ProductsController::class, 'indexProducts'])->name('productsList');
Route::get('/productsList', [ProductsController::class, 'indexProducts'])->name('productsList');

Route::get('/products', [ProductsController::class, 'adminIndexProducts']);
Route::get('/products/{id}/edit', [ProductsController::class, 'edit'])->name('products.edit');
Route::put('/products/{id}', [ProductsController::class, 'update'])->name('products.update');
Route::delete('/products/{id}', [ProductsController::class, 'destroy'])->name('products.destroy');



Route::get('/contact', [ContactsController::class, 'indexPage'])->name('contacts.index');
Route::post('/contact/store', [ContactsController::class, 'store'])->name('storeContact');


//Route::get('/admin/dashboard', [AdminDashboardsController::class, 'index'])->name('admin.dashboard');
    Route::middleware(['auth'])->group(function () {
        Route::get('/admin/dashboard', [AdminDashboardsController::class, 'index'])->name('admin.dashboard');

        Route::get('/contacts', [ContactsController::class, 'index']);
        Route::get('/contacts/{id}/edit', [ContactsController::class, 'edit'])->name('contacts.edit');
        Route::put('/contacts/{id}', [ContactsController::class, 'update'])->name('contacts.update');
        Route::delete('/contacts/{id}', [ContactsController::class, 'destroy'])->name('contacts.destroy');
    });
