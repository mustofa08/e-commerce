<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WishlistController;
use App\Http\Middleware\AuthAdmin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/shop/search', [ShopController::class, 'search'])->name('shop.search');

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/shop', [ShopController::class, 'index'])->name('shop.index');
Route::get('/shop/{product_slug}',[ShopController::class, 'product_details'])->name('shop.product.details');

Route::get('/cart',[CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add',[CartController::class, 'add_to_cart'])->name('cart.add');
Route::put('/cart/increase-quantity/{rowId}', [CartController::class, 'increase_cart_quantity'])->name('cart.qty.increase');
Route::put('/cart/decrease-quantity/{rowId}', [CartController::class, 'decrease_cart_quantity'])->name('cart.qty.decrease');
Route::delete('/cart/remove/{rowId}',[CartController::class, 'remove_item'])->name('cart.item.remove');
Route::delete('/cart/clear',[CartController::class, 'empty_cart'])->name('cart.empty');

Route::post('/cart/apply-coupon',[CartController::class, 'apply_coupons_code'])->name('cart.coupons.apply');
Route::delete('/cart/remove-coupon',[CartController::class, 'remove_coupon_code'])->name('cart.coupon.remove');

Route::post('/wishlist/add',[WishlistController::class, 'add_to_wishlist'])->name('wishlist.add');
Route::get('/wishlist',[WishlistController::class, 'index'])->name('wishlist.index');
Route::delete('/whistlist/remove/{rowId}',[WishlistController::class, 'remove_item'])->name('whistlist.item.remove');
Route::delete('/whislist/clear',[WishlistController::class, 'empty_whistlist'])->name('whislist.items.clear');

Route::get('/checkout',[CartController::class, 'checkout'])->name('cart.checkout');
Route::post('/place-an-order',[CartController::class, 'place_an_order'])->name('cart.place.an.order');
Route::get('/order-confirmation',[CartController::class, 'order_confirmation'])->name('cart.order.confirmation');

Route::get('/search',[HomeController::class, 'search'])->name('home.search');

Route::middleware(['auth'])->group(function(){
    Route::get('/account-dashboard', [UserController::class, 'index'])->name('user.index');
    Route::get('/account-orders', [UserController::class, 'orders'])->name('user.orders');
    Route::get('/account-orders/{order_id}/details', [UserController::class, 'order_details'])->name('user.order.details');
    Route::put('/account-orders/cancel-order', [UserController::class, 'order_cancel'])->name('user.order.cancel');


});

Route::middleware(['auth',AuthAdmin::class])->group(function(){
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/admin/brands',[AdminController::class, 'brands'])->name('admin.brands');
    Route::get('/admin/brand/add',[AdminController::class, 'add_brand'])->name('admin.brand.add');
    Route::post('/admin/brand/store',[AdminController::class, 'brand_store'])->name('admin.brand.store');
    Route::get('/admin/brand/{id}/edit', [AdminController::class, 'brand_edit'])->name('admin.brand.edit');
    Route::put('/admin/brand/update',[AdminController::class, 'brand_update'])->name('admin.brand.update');
    Route::delete('admin/brand/{id}/delete', [AdminController::class, 'brand_delete'])->name('admin.brand.delete');

    Route::get('/admin/categories', [AdminController::class, 'categories'])->name('admin.categories');
    Route::get('/admin/category/add',[AdminController::class, 'category_add'])->name('admin.category.add');
    Route::post('/admin/category/store',[AdminController::class, 'category_store'])->name('admin.category.store');
    Route::get('/admin/category/{id}/edit',[AdminController::class, 'category_edit'])->name('admin.category.edit');
    Route::put('/admin/category/update',[AdminController::class, 'category_update'])->name('admin.category.update');
    Route::delete('admin/category/{id}/delete', [AdminController::class, 'category_delete'])->name('admin.category.delete');

    Route::get('/admin/products',[AdminController::class, 'products'])->name('admin.products');
    Route::get('/admin/product/add',[AdminController::class, 'product_add'])->name('admin.product.add');
    Route::post('/admin/product/store',[AdminController::class, 'product_store'])->name('admin.product.store');
    Route::get('/admin/product/{id}/edit',[AdminController::class, 'product_edit'])->name('admin.product.edit');
    Route::put('/admin/product/update',[AdminController::class, 'product_update'])->name('admin.product.update');
    Route::delete('admin/product/{id}/delete', [AdminController::class, 'product_delete'])->name('admin.product.delete');

    Route::get('/admin/coupons',[AdminController::class, 'coupons'])->name('admin.coupons');
    Route::get('/admin/coupon/add',[AdminController::class, 'coupon_add'])->name('admin.coupon.add');
    Route::post('/admin/coupon/store',[AdminController::class, 'coupon_store'])->name('admin.coupon.store');
    Route::get('/admin/coupont/{id}/edit',[AdminController::class, 'coupon_edit'])->name('admin.coupon.edit');
    Route::put('/admin/coupon/update',[AdminController::class, 'coupon_update'])->name('admin.coupon.update');
    Route::delete('admin/coupon/{id}/delete', [AdminController::class, 'coupon_delete'])->name('admin.coupon.delete');

    Route::get('/admin/orders',[AdminController::class, 'orders'])->name('admin.orders');
    Route::get('/admin/order/{order_id}/details',[AdminController::class, 'order_details'])->name('admin.order.details');
    Route::put('/admin/order/update-status',[AdminController::class, 'update_order_status'])->name('admin.order.status.update');
    
    Route::get('/admin/slides', [AdminController::class, 'slides'])->name('admin.slides');
    Route::get('/admin/slide-add', [AdminController::class, 'slide_add'])->name('admin.slide.add');
    Route::post('/admin/slide-store', [AdminController::class, 'slide_store'])->name('admin.slide.store');
    Route::get('/admin/slide/{id}/edit', [AdminController::class, 'slide_edit'])->name('admin.slide.edit');
    Route::put('/admin/slide/update', [AdminController::class, 'slide_update'])->name('admin.slide.update');
    Route::delete('/admin/slide/{id}/delete', [AdminController::class, 'slide_delete'])->name('admin.slide.delete');

    Route::get('/admin/search', [AdminController::class, 'search'])->name('admin.search');
});