<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\{
    HomeComponent,
    ShopComponent,
    CartComponent,
    CheckoutComponent,
    ProfileComponent,
    ContactComponent,
    ProductDetailComponent,
};
use App\Http\Livewire\User\UserDashboard;
use App\Http\Livewire\Admin\AdminDashboard;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', HomeComponent::class)->name('home.index');
Route::get('/profile', ProfileComponent::class)->name('profile.index');
Route::get('/contact', ContactComponent::class)->name('contact.index');
Route::get('/shop', ShopComponent::class)->name('shop');
Route::post('/shop', ShopComponent::class);
Route::post('/shop', ShopComponent::class);
Route::get('/shop/like/{id}', [ShopComponent::class, 'likeproduct']);
Route::get('/shop/item/{id}', ProductDetailComponent::class)->name('product.detail');

Route::get('/checkout', CheckoutComponent::class)->name('shop.checkout');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

Route::middleware(['auth'])->group(function(){
    Route::get('/cart', CartComponent::class)->name('shop.cart');
    Route::get('/user/dashboard', UserDashboard::class)->name('user.dashboard');
});
Route::middleware(['auth', 'authadmin'])->group(function(){
    Route::get('/admin/dashboard', AdminDashboard::class)->name('admin.dashboard');
});

require __DIR__.'/auth.php';
