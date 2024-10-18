<?php

use App\Livewire\BlogComponent;
use App\Livewire\CartComponent;
use App\Livewire\HomeComponent;
use App\Livewire\ShopComponent;
use App\Livewire\CheckoutComponent;
use App\Livewire\ThankyouComponent;
use App\Livewire\WishlistComponent;
use App\Livewire\ContactUsComponent;
use App\Livewire\MyAccountComponent;
use Illuminate\Support\Facades\Route;
use App\Livewire\AllCategoryComponent;
use App\Livewire\ProductDetailComponent;
use App\Livewire\ProductCategoryComponent;
use App\Http\Controllers\ProfileController;
use App\Livewire\User\UserDashboardComponent;
use App\Livewire\Admin\AdminDashboardComponent;
use App\Livewire\Admin\Order\OrderListComponent;
use App\Livewire\Admin\Product\ProductComponent;
use App\Livewire\Admin\Category\CategoryComponent;
use App\Livewire\Admin\Order\OrderDetailsComponent;
use App\Livewire\Admin\Product\AddProductComponent;
use App\Livewire\Admin\Product\EditProductComponent;
use App\Livewire\Admin\Category\AddCategoryComponent;
use App\Livewire\Admin\Category\EditCategoryComponent;

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

Route::get('/',HomeComponent::class)->name('home.index');
Route::get('/shop',ShopComponent::class)->name('shop');
// Route::get('productDetail',ProductDetailComponent::class)->name('productdetails');
Route::get('cart',CartComponent::class)->name('cart');
Route::get('checkout',CheckoutComponent::class)->name('checkout');
Route::get('myaccount',MyAccountComponent::class)->name('myaccount');
Route::get('wishlist',WishlistComponent::class)->name('wishlist');
Route::get('blog',BlogComponent::class)->name('blog');
Route::get('allcategory',AllCategoryComponent::class)->name('productcategory');
Route::get('contact',ContactUsComponent::class)->name('contact');
Route::get('thankyou', ThankyouComponent::class)->name('thankyou');

Route::get('view-product/{slug}',ProductDetailComponent::class)->name('view-product');
Route::get('productcategory/{category_slug}',ProductCategoryComponent::class)->name('user.category');


Route::middleware(['auth'])->group(function(){
    Route::get('user/dashboard',UserDashboardComponent::class)->name('user.dashboard');

});


Route::middleware(['auth','authadmin'])->group(function(){
    Route::get('admin/dashboard',AdminDashboardComponent::class)->name('admin.dashboard');

    //category
    Route::get('admin/category',CategoryComponent::class)->name('admin.category');
    Route::get('admin/addcategory',AddCategoryComponent::class)->name('admin.addcategory');
    Route::get('admin/editcategory/{category_slug}',EditCategoryComponent::class)->name('admin.category.edit');

    //Product
    Route::get('admin/product',ProductComponent::class)->name('admin.product');
    Route::get('admin/addproduct',AddProductComponent::class)->name('admin.addproduct');
    Route::get('admin/editproduct/{product_id}',EditProductComponent::class)->name('admin.product.edit');

    //order
    Route::get('admin/order',OrderListComponent::class)->name('admin.order');
    Route::get('/admin-user/order-detail/{order_id}',OrderDetailsComponent::class)->name('admin.orderDetails');

});


require __DIR__.'/auth.php';
