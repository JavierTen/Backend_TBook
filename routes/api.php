<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});


Route::post('login', 'API\UserAPIController@login');
Route::post('register', 'API\UserAPIController@register');
Route::post('send_reset_link_email', 'API\UserAPIController@sendResetLinkEmail');
Route::get('user', 'API\UserAPIController@user');
Route::get('logout', 'API\UserAPIController@logout');
Route::get('settings', 'API\UserAPIController@settings');

Route::get('applications', 'API\ApplicationAPIController@index');
Route::get('applications/{id}', 'API\ApplicationAPIController@show');
//-------------
Route::get('books', 'API\BookAPIController@index');
Route::get('books/show/{id}', 'API\BookAPIController@show');
//-------------
Route::get('categories', 'API\CategoriesAPIController@index');
Route::get('categories/show/{id}', 'API\CategoriesAPIController@show');
//-------------
Route::get('faculties', 'API\FacultiesAPIController@index');
Route::get('faculties/{id}', 'API\FacultieAPIController@show');
//-------------
Route::get('gives', 'API\GiveAPIController@index');
Route::get('gives/{id}', 'API\GiveAPIController@show');
//-------------
Route::get('payments', 'API\PaymentAPIController@index');
Route::get('payments/{id}', 'API\PaymentAPIController@show');
//-------------
Route::get('users', 'API\UserAPIController@index');
Route::get('users/{id}', 'API\UserAPIController@show');

/*
Route::middleware('auth:api')->group(function () {
    Route::group(['middleware' => ['role:driver']], function () {
        Route::prefix('driver')->group(function () {
            Route::resource('orders', 'API\OrderAPIController');
            Route::resource('notifications', 'API\NotificationAPIController');
        });
    });
    Route::post('users/{id}', 'API\UserAPIController@update');
    Route::resource('restaurants', 'API\RestaurantAPIController');

    Route::resource('categories', 'API\CategoryAPIController');

    Route::resource('faq_categories', 'API\FaqCategoryAPIController');

    Route::resource('order_statuses', 'API\OrderStatusAPIController');

    Route::resource('foods', 'API\FoodAPIController');

    Route::resource('galleries', 'API\GalleryAPIController');

    Route::resource('food_reviews', 'API\FoodReviewAPIController');

    Route::resource('nutrition', 'API\NutritionAPIController');

    Route::resource('extras', 'API\ExtraAPIController');

    Route::get('payments/byMonth', 'API\PaymentAPIController@byMonth')->name('payments.byMonth');
    Route::resource('payments', 'API\PaymentAPIController');

    Route::resource('faqs', 'API\FaqAPIController');

    Route::resource('restaurant_reviews', 'API\RestaurantReviewAPIController');

    Route::get('favorites/exist', 'API\FavoriteAPIController@exist');
    Route::resource('favorites', 'API\FavoriteAPIController');

    Route::resource('orders', 'API\OrderAPIController');

    Route::resource('food_orders', 'API\FoodOrderAPIController');

    Route::resource('notification_types', 'API\NotificationTypeAPIController');

    Route::resource('notifications', 'API\NotificationAPIController');

    Route::get('carts/count', 'API\CartAPIController@count')->name('carts.count');
    Route::resource('carts', 'API\CartAPIController');

    Route::resource('currencies', 'API\CurrencyAPIController');
    Route::resource('delivery_addresses', 'API\DeliveryAddressAPIController');
});



*/