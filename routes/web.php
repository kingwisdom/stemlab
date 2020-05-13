<?php

use Gloudemans\Shoppingcart\Facades\Cart;

Route::get('/', 'PagesController@index')->name('main');
Route::get('/contact-us', 'PagesController@contact')->name('contact');
Route::post('/contact-us', 'PagesController@postcontact')->name('contact');
Route::get('/about-us', 'PagesController@about')->name('about');
Route::get('/return-policy', 'PagesController@returnPolicy')->name('returnPolicy');
Route::post('/mailling-lists', 'PagesController@mailling')->name('mailling');

Route::get('/all-products', 'ProductController@allProducts')->name('allProducts');
Route::get('/product/{product}', 'ProductController@show')->name('product');
//blog
Route::get('/blog/{blog}', 'BlogController@show')->name('blog');
Route::get('/blogs', 'BlogController@index')->name('all_blogs');


//cart route
Route::get('/shopping-cart', 'CartController@index')->name('cart');
Route::post('/shopping-cart', 'CartController@store')->name('save-cart');
Route::delete('/cart/{product}', 'CartController@destroy')->name('destroy');
Route::patch('/cart/update/{product}', 'CartController@update')->name('upadate');
Route::post('/cart/switch/{id}', 'CartController@saveForLater')->name('saveForLater');

Route::delete('/save-for-later/{product}', 'SaveForLaterController@destroy')->name('sfl.destroy');
Route::post('/save-for-later/{product}', 'SaveForLaterController@switchToCart')->name('switchToCart');


//checkout route
Route::get('/checkout', 'CheckoutController@index')->name('checkout.index')->middleware('auth');

Route::post('/checkout', 'CheckoutController@store')->name('checkout.store');




// Laravel 5.1.17 and above
Route::post('/pay', 'PaymentController@redirectToGateway')->name('pay');
Route::get('/payment/callback', 'PaymentController@handleGatewayCallback');
Route::post('/shipping', 'PaymentController@shipping')->name('shipping');
Route::get('/overview', 'PaymentController@overview')->name('overview');
Route::get('/payment', 'PaymentController@payment')->name('payment');
Route::get('/complete', 'PaymentController@complete')->name('complete');
Route::get('/thank-you', 'PaymentController@thankyou')->name('thankyou');

//serch route
Route::get('/search', 'ProductController@search')->name('search');

//  Admin routes
Route::get('/admin/dashboard', 'Admin\AdminController@dashboard')->name('dashboard');
Route::resource('/admin/category/create', 'Admin\CategoryController');
Route::resource('/admin/product', 'Admin\ProductsController');


//user account
Route::middleware('auth')->group(function(){
    Route::get('/account', 'UsersController@edit')->name('users.edit');
    Route::patch('/update-account', 'UsersController@update')->name('users.update');

    Route::get('/my-orders', 'OrdersController@index')->name('order.view');
    Route::get('/community-stem-program', 'CommunityController@index')->name('csp');
    Route::post('/community-stem-program', 'CommunityController@store')->name('csp');

    //add and remove gluegun

Route::post('/product/glue', 'CheckoutController@addGlue')->name('addGlue');

Route::delete('/product/removeglue', 'CheckoutController@removeGlue')->name('removeGlue');

});



Auth::routes();


Route::get('empty', function(){
    Cart::destroy();
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::get('/mailable', function(){
    $order = App\Order::find(1);

    return new App\Mail\Orderplaced($order);
});
