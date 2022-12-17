<?php

use App\Http\Controllers\SslCommerzPaymentController;

Route::get('/',[
    'uses' => 'NewShopController@index',
    'as' => '/',
]); 

Route::get('/category-product/{id}',[
    'uses' => 'NewShopController@categoryProduct',
    'as' => 'category-product',
]);

Route::get('/product-details/{id}/{name}',[
    'uses' => 'NewShopController@productDetails',
    'as'   => 'product-details'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' => ['NewShop']], function () {

        # All Categories Routes  Start

        Route::get('/category/add',[
            'uses' => 'CategoryController@index',
            'as' => 'add-category',
        ]);

        Route::get('/category/manage',[
            'uses' => 'CategoryController@manageCategoryInfo',
            'as' => 'manage-category',
        ]);

        Route::post('/category/save',[
            'uses' => 'CategoryController@saveCategoryInfo',
            'as' => 'new-category',
        ]);

        Route::get('/category/unpublished/{id}',[
            'uses' => 'CategoryController@unpublishedCategoryInfo',
            'as' => 'unpublished-category',
        ]);

        Route::get('/category/published/{id}',[
            'uses' => 'CategoryController@publishedCategoryInfo',
            'as' => 'published-category',
        ]);

        Route::get('/category/edit/{id}',[
            'uses' => 'CategoryController@editCategoryInfo',
            'as' => 'edit-category',
        ]);

        Route::post('/category/update',[
            'uses' => 'CategoryController@updateCategoryInfo',
            'as' => 'update-category',
        ]);

        Route::get('/category/delete/{id}',[
            'uses' => 'CategoryController@deleteCategoryInfo',
            'as' => 'delete-category',
        ]);

        # All Categories Routes  End

        #==================================================================

        # All Brands Routes  Start


        Route::get('/brand/add',[
            'uses' => 'BrandController@create',
            'as' => 'add-brand',
        ]);

        Route::get('/brand/manage',[
            'uses' => 'BrandController@index',
            'as' => 'manage-brand',
        ]);
        Route::post('/brand/save',[
            'uses' => 'BrandController@store',
            'as' => 'new-brand',
        ]);
        Route::get('/brand/unpublished/{id}',[
            'uses' => 'BrandController@unpublishedBrandInfo',
            'as' => 'unpublished-brand',
        ]);

        Route::get('/brand/published/{id}',[
            'uses' => 'BrandController@publishedBrandInfo',
            'as' => 'published-brand',
        ]);

        Route::get('/brand/edit/{id}',[
            'uses' => 'BrandController@edit',
            'as' => 'edit-brand',
        ]);

        Route::post('/brand/update',[
            'uses' => 'BrandController@update',
            'as' => 'update-brand',
        ]);

        Route::get('/brand/delete/{id}',[
            'uses' => 'BrandController@destroy',
            'as' => 'delete-brand',
        ]);

        # All Brands Routes Close

        #==================================================================

        # All Products Routes  Start


        Route::get('/product/add', [
            'uses'  =>  'ProductController@create',
            'as'    =>  'add-product'
            ]);
        Route::post('/product/save', [
            'uses'  =>  'ProductController@store',
            'as'    =>  'new-product'
        ]);
        Route::get('/product/manage', [
            'uses'  =>  'ProductController@index',
            'as'    =>  'manage-product'
        ]);
        Route::get('/product/unpublished/{id}',[
            'uses' => 'ProductController@unpublishedProductInfo',
            'as' => 'unpublished-product',
        ]);

        Route::get('/product/published/{id}',[
            'uses' => 'ProductController@publishedProductInfo',
            'as' => 'published-product',
        ]);
        Route::get('/product/edit/{id}', [
            'uses'  =>  'ProductController@edit',
            'as'    =>  'edit-product'
        ]);
        Route::post('/product/update', [
            'uses'  =>  'ProductController@update',
            'as'    =>  'update-product'
        ]);
        Route::get('/product/delete/{id}',[
                'uses' => 'ProductController@destroy',
                'as' => 'delete-product',
        ]);


        # All Products Routes  End
});

#==================================================================

# All Cart Routes  Start

Route::post('/cart/add', [
    'uses'  =>  'CartController@addToCart',
    'as'    =>  'add-to-cart'
]);
Route::get('/cart/show', [
    'uses'  =>  'CartController@showCart',
    'as'    =>  'show-cart'
]);
Route::get('/cart/delete/{rowId}', [
    'uses'  =>  'CartController@deleteCart',
    'as'    =>  'delete-cart-item'
]);
Route::post('/cart/update', [
    'uses'  =>  'CartController@updateCart',
    'as'    =>  'update-cart'
]);

# All Cart Routes  End

#==================================================================

# All Checout, Customer & Shipping Routes  Start

Route::get('/checkout', [
    'uses'  =>  'CheckoutController@index',
    'as'    =>  'checkout'
]);
Route::get('/checkout/shipping', [
    'uses'  =>  'CheckoutController@shippingForm',
    'as'    =>  'checkout-shipping'
]);
Route::get('/checkout/payment', [
    'uses'  =>  'CheckoutController@paymentForm',
    'as'    =>  'checkout-payment'
]);


Route::post('/customer/registration', [
    'uses'  =>  'CheckoutController@customerSignUp',
    'as'    =>  'customer-sign-up'
]);
Route::post('/checkout/customer-login', [
    'uses'  =>  'CheckoutController@customerLoginCheck',
    'as'    =>  'customer-login'
]);
Route::post('/checkout/customer-logout', [
    'uses'  =>  'CheckoutController@customerLogout',
    'as'    =>  'customer-logout'
]);
Route::get('/checkout/new-customer-login', [
    'uses'  =>  'CheckoutController@newCustomerLogin',
    'as'    =>  'new-customer-login'
]);
Route::post('/shipping/save', [
    'uses'  =>  'CheckoutController@saveShippingInfo',
    'as'    =>  'new-shipping'
]);

Route::post('/checkout/order', [
    'uses'  =>  'CheckoutController@newOrder',
    'as'    =>  'new-order'
]);

Route::post('/stripe/payment', [
    'uses'  =>  'CheckoutController@stripePayment',
    'as'    =>  'stripe-payment'
]);

Route::get('/complete/order', [
    'uses'  =>  'CheckoutController@completeOrder',
    'as'    =>  'complete-order'
]);



Route::get('/ajax-email-check/{email}', [
    'uses'  =>  'CheckoutController@ajaxEmailcheck',
    'as'    =>  'ajax-email-check'
]);


# All Checout, Customer & Shipping Routes  End

#==================================================================

# All  Routes Order Start

Route::group(['middleware' => ['NewShop']], function () {
    Route::get('/order/manage-order', [
        'uses'  =>  'OrderController@completeOrder',
        'as'    =>  'manage-order',
        //'middleware' => 'NewShop'
    ]);
    Route::get('/order/view-order-detail/{id}', [
        'uses'  =>  'OrderController@viewOrderDetail',
        'as'    =>  'view-order-detail'
    ]);
    Route::get('/order/view-order-invoice/{id}', [
        'uses'  =>  'OrderController@viewOrderInvoice',
        'as'    =>  'view-order-invoice'
    ]);
    Route::get('/order/download-order-invoice/{id}', [
        'uses'  =>  'OrderController@downloadOrderInvoice',
        'as'    =>  'download-order-invoice'
    ]);
});




// SSLCOMMERZ Start
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END



# All Order Routes  End

#==================================================================

# All  Routes  Start