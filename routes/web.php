<?php

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
Auth::routes();

///Route::post('/login', 'Auth\LoginController@login');
//Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login'); 
Route::post('/register', 'Auth\RegisterController@register');  
Route::post('/logout', 'Auth\LoginController@logout')->name('logout'); 


Route::get('/', 'Pages\PagesController@index')->name('home');





Route::get('/inauguration', 'Pages\InaugurationController@inauguration')->name('inauguration');
Route::get('/about', 'Pages\PagesController@about')->name('about');
Route::get('/events', 'Pages\EventsController@index')->name('events');
Route::get('/buildings', 'Pages\PagesController@buildings')->name('buildings');
Route::get('/contact', 'Pages\PagesController@contact')->name('contact');
Route::get('/faq', 'Pages\PagesController@faq')->name('faqs');
Route::get('/newsletters', 'Pages\PagesController@newsletters')->name('newsletters');
Route::get('/privacy', 'Pages\PagesController@privacys')->name('privacy');
Route::get('/products', 'Pages\ProductsController@index')->name('products');
Route::get('/shopping', 'Pages\ShoppingsController@index')->name('shoppings');
Route::get('/customers', 'Pages\CustomersController@index')->name('customers');      
Route::get('/checkout', 'Pages\ShoppingsController@checkout')->name('checkouts');
Route::get('/wishlist', 'Pages\WishlistsController@index')->name('wishlists');
Route::post('/purchase', 'Pages\ShoppingsController@purchase')->name('purchase');
Route::post('/payments', 'Pages\PaymentsController@payments')->name('payments');
Route::post('/inaugurations/inscribeds/storage', 'Pages\InaugurationController@storage')->name('inauguration.storage');

Route::get('/print', 'Pages\SalesController@print')->name('sales.print');

Route::get('/menu', 'Pages\ProductsController@menu')->name('menu');
Route::get('/promotions', 'Pages\ProductsController@promotions')->name('promotions');
Route::get('/clear/shoppingcart', 'Pages\UtilitiesController@clearShoppingcard')->name('chear');
Route::post('/shipping/provinces', 'Pages\UtilitiesController@getShippingProvinces')->name('shipping.provinces');
Route::post('/shipping/cities', 'Pages\UtilitiesController@getShippingCities')->name('shipping.cities');
Route::post('/billing/provinces', 'Pages\UtilitiesController@getBillingProvinces')->name('billing.provinces');
Route::post('/billing/cities', 'Pages\UtilitiesController@getBillingCities')->name('billing.cities');

Route::get('/payments/payu', 'Pages\PaymentsController@responsePayu')->name('payments.payu');
//Route::get('/payments/paypal', 'Pages\PaymentsController@responsePaypal')->name('payments.paypal');
Route::post('/payments/response', 'Pages\PaymentsController@getResponsePayu')->name('payments.response');
Route::post('/payments/confirmation', 'Pages\PaymentsController@purchase')->name('payments.confirmation');
Route::get('/payments/completed', 'Pages\PaymentsController@completed')->name('payments.completed');
Route::get('/payments/failed', 'Pages\PaymentsController@failed')->name('payments.failed');
Route::post('/payments/get', 'Pages\PaymentsController@getPayments')->name('payments.get');

Route::post('/purchase/calculate', 'Pages\ShoppingsController@getCalculate')->name('purchase.calculate');
Route::post('/purchase/shopping', 'Pages\ShoppingsController@getShoppings')->name('purchase.shopping');
Route::post('/purchase/purchases', 'Pages\ShoppingsController@getPurchases')->name('purchase.purchases');

Route::post('/purchase/update', 'Pages\ShoppingsController@update')->name('purchase.update');
Route::post('/purchase/destroy', 'Pages\ShoppingsController@destroy')->name('purchase.destroy');

Route::get('/products/{slug}', 'Pages\ProductsController@slug')->name('products.slug');
Route::get('/events/{slug}', 'Pages\EventsController@slug')->name('events.slug');

Route::get('/products/chosen/{chosen}', 'Pages\ProductsController@chosen')->name('products.chosen');
Route::get('/products/categorie/{search}', 'Pages\ProductsController@categories')->name('products.categories');
Route::get('/events/sorting/{search}', 'Pages\EventsController@sorting')->name('events.sorting');
Route::get('/products/tags/{search}', 'Pages\ProductsController@tag')->name('products.tags');
Route::get('/events/tags/{search}', 'Pages\EventsController@event')->name('events.tags');
Route::get('/products/show/{slug}', 'Pages\ProductsController@show')->name('products.show');
Route::get('/events/show/{slug}', 'Pages\EventsController@show')->name('events.show');
Route::get('/newsletter/unsubscribe', 'Pages\NewsletterController@unsubscribe')->name('newsletter.unsubscribe');

/*
Route::get('payments/paypal', 'PayPalController@index')->name('paypal.index');
Route::get('payments/paypal/express-checkout-success', 'PayPalController@getExpressCheckoutSuccess');
Route::get('payments/paypal/express-checkout', 'PayPalController@getExpressCheckout')->name('paypal.express-checkout');

Route::get('login/{service}', 'Auth\LoginController@redirectToProvider');
Route::get('login/{service}/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('storage/app/public/{id}/{conversion}/{filename?}', 'UploadController@storage');

*/

Route::prefix('managers')->middleware('auth')->namespace('Managers')->as('managers.')->group(function () {

    Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
    Route::get('/dashboard', 'UserController@dashboard')->name('dashboard');
    Route::get('/profile', 'UserController@profile')->name('users.profile');

    Route::get('users/profile', 'UserController@profile')->name('users.profile');
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');

        Route::post('uploads/store', 'UploadController@store')->name('medias.create');
        Route::get('uploads/all/{collection?}', 'UploadController@all');
        Route::get('uploads/collectionsNames', 'UploadController@collectionsNames');
        Route::post('uploads/clear', 'UploadController@clear')->name('medias.delete');
        Route::get('medias', 'UploadController@index')->name('medias');
        Route::get('uploads/clear-all', 'UploadController@clearAll');
        Route::get('permissions/role-has-permission', 'PermissionController@roleHasPermission');
        Route::get('permissions/refresh-permissions', 'PermissionController@refreshPermissions');
        Route::post('permissions/give-permission-to-role', 'PermissionController@givePermissionToRole');
        Route::post('permissions/revoke-permission-to-role', 'PermissionController@revokePermissionToRole');
            Route::resource('permissions', 'PermissionController');
            Route::resource('roles', 'RoleController');
            Route::resource('customFields', 'CustomFieldController');
            Route::post('users/remove-media', 'UserController@removeMedia');
            Route::get('users/login-as-user/{id}', 'UserController@loginAsUser')->name('users.login-as-user');
            Route::resource('users', 'UserController');
            //Route::patch('update', 'AppSettingController@update');
           // Route::patch('translate', 'AppSettingController@translate');
           // Route::get('sync-translation', 'AppSettingController@syncTranslation');
            // disable special character and number in route params
            //Route::get('/{type?}/{tab?}', 'AppSettingController@index')
               // ->where('type', '[A-Za-z]*')->where('tab', '[A-Za-z]*')->name('app-settings');

    Route::post('restaurants/remove-media', 'RestaurantController@removeMedia');
    Route::resource('restaurants', 'RestaurantController');

    Route::post('categories/remove-media', 'CategoryController@removeMedia');
    Route::resource('categories', 'CategoryController');

    Route::resource('faqcategories', 'FaqCategoryController');

    Route::resource('orderStatuses', 'OrderStatusController');

    Route::post('foods/remove-media', 'FoodController@removeMedia');
    Route::resource('foods', 'FoodController');

    Route::post('galleries/remove-media', 'GalleryController@removeMedia');
    Route::resource('galleries', 'GalleryController');

    Route::resource('foodreviews', 'FoodReviewController');


    Route::resource('nutrition', 'NutritionController');

    Route::post('extras/remove-media', 'ExtraController@removeMedia');
    Route::resource('extras', 'ExtraController');

    Route::resource('payments', 'PaymentController');

    Route::resource('faqs', 'FaqController');

    Route::resource('restaurantreviews', 'RestaurantReviewController');

    Route::resource('favorites', 'FavoriteController');

    Route::resource('orders', 'OrderController');

    Route::resource('foodOrders', 'FoodOrderController');

    Route::post('notificationTypes/remove-media', 'NotificationTypeController@removeMedia');
    Route::resource('notificationTypes', 'NotificationTypeController');

    Route::resource('notifications', 'NotificationController');

    Route::resource('carts', 'CartController');
    Route::resource('currencies', 'CurrencyController');
    Route::resource('deliveryAddresses', 'DeliveryAddressController');
});



Route::prefix('restaurants')->middleware('auth')->namespace('Restaurants')->as('restaurants.')->group(function () {

    Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
    Route::get('dashboard', 'UserController@dashboard')->name('dashboard');

    Route::post('uploads/store', 'UploadController@store')->name('medias.create');
    Route::get('uploads/all/{collection?}', 'UploadController@all');
    Route::get('uploads/collectionsNames', 'UploadController@collectionsNames');
    Route::post('uploads/clear', 'UploadController@clear')->name('medias.delete');
    Route::get('medias', 'UploadController@index')->name('medias');
    Route::get('uploads/clear-all', 'UploadController@clearAll');
           
    Route::get('/configuracion', 'RestaurantController@configuracion')->name('configuracion');
    Route::post('/configuracion/update/{id}', 'RestaurantController@update')->name('configuracion.update');

    Route::get('/faqs', 'FaqsController@responsePayu')->name('faqs');
	Route::get('/faqs/show/{token}', 'FaqsController@show')->name('faqs.show');

    Route::get('/reviews', 'RestaurantReviewController@index')->name('reviews');
    Route::get('/reviews/show/{token}', 'RestaurantReviewController@show')->name('reviews.show');
    
    Route::get('/extras', 'ExtrasController@index')->name('extras');
    Route::get('/extras/create', 'ExtrasController@create')->name('extras.create');
    Route::post('/extras/store', 'ExtrasController@store')->name('extras.store');
    Route::get('/extras/edit/{id}', 'ExtrasController@edit')->name('extras.edit');
    Route::post('/extras/update/{id}', 'ExtrasController@update')->name('extras.update');
    Route::get('/extras/destroy/{id}', 'ExtrasController@destroy')->name('extras.destroy');

    Route::get('/payments', 'PaymentController@index')->name('payments');
    Route::get('/payments/create', 'PaymentController@create')->name('payments.create');
    Route::post('/payments/store', 'PaymentController@store')->name('payments.store');
    Route::get('/payments/edit/{id}', 'PaymentController@edit')->name('payments.edit');
    Route::post('/payments/update/{id}', 'PaymentController@update')->name('payments.update');
    Route::get('/payments/destroy/{id}', 'PaymentController@destroy')->name('payments.destroy');

    Route::get('/delivery', 'DeliveryController@index')->name('deliverys');
    Route::get('/delivery/create', 'DeliveryController@create')->name('deliverys.create');
    Route::post('/delivery/store', 'DeliveryController@store')->name('deliverys.store');
    Route::get('/delivery/show/{id}', 'DeliveryController@show')->name('deliverys.show');
    Route::get('/delivery/edit/{id}', 'DeliveryController@edit')->name('deliverys.edit');
    Route::post('/delivery/update/{id}', 'DeliveryController@update')->name('deliverys.update');
    Route::get('/delivery/destroy/{id}', 'DeliveryController@destroy')->name('deliverys.destroy');
    
    Route::get('/orders', 'OrderController@index')->name('orders');
    Route::get('/orders/create', 'OrderController@create')->name('orders.create');
    Route::post('/orders/store', 'OrderController@store')->name('orders.store');
    Route::get('/orders/edit/{id}', 'OrderController@edit')->name('orders.edit');
    Route::get('/orders/show/{id}', 'OrderController@show')->name('orders.show');
    Route::post('/orders/update/{id}', 'OrderController@update')->name('orders.update');
    Route::get('/orders/destroy/{id}', 'OrderController@destroy')->name('orders.destroy');

    Route::get('/foods', 'FoodController@index')->name('foods');
    Route::get('/foods/create', 'FoodController@create')->name('foods.create');
    Route::post('/foods/store', 'FoodController@store')->name('foods.store');
    Route::get('/foods/show/{id}', 'FoodController@show')->name('foods.show');
    Route::get('/foods/edit/{id}', 'FoodController@edit')->name('foods.edit');
    Route::post('/foods/update/{id}', 'FoodController@update')->name('foods.update');
    Route::get('/foods/destroy/{id}', 'FoodController@destroy')->name('foods.destroy');



    
    Route::post('notificationTypes/remove-media', 'NotificationTypeController@removeMedia');
    Route::resource('notificationTypes', 'NotificationTypeController');
    Route::resource('notifications', 'NotificationController');

});




