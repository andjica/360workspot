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

Route::get('/', 'FrontController@index')->name('index');
Route::get('/pricing', 'FrontController@pricing')->name('pricing');
Route::get('/jobs', 'FrontController@jobs')->name('jobs');
Route::get('/job/{id}', 'FrontController@job')->name('job');
Route::get('/jobscategory/{id}', 'FrontController@jobcategory');
Route::get('/jobsajax', 'FrontController@jobsajax');
Route::get('/search', 'FrontController@search')->name('search');
Route::get('/blogs-all', 'FrontController@blogs')->name('blogs-all');
Route::get('/jobs-all', 'FrontController@jobsall')->name('jobs-all');

Auth::routes();

//company - jobs
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['checkcompany']], function () 
{
    Route::get('/tables', 'HomeController@tables')->name('tables');
    Route::post('/create-job', 'JobController@create')->name('create-job');
    Route::get('/edit-job/{id}', 'JobController@edit')->name('edit-job');
    Route::post('/update-job/{id}', 'JobController@update')->name('update-job');
});


//user - posts
Route::get('/user-panel', 'PostController@index');


Route::group(['middleware' => ['checkaccount']], function () 
{
    //admin jobs
    Route::get('/jobs-admin', 'JobController@index')->name('jobs-admin');

    //admin users
    Route::get('/users', 'HomeController@users')->name('users');
    Route::get('/user-buy/{id}', 'HomeController@userbought')->name('user-buy');
    //city
    Route::get('/cities', 'CityController@index')->name('cities');
    Route::get('/create-city', 'CityController@create')->name('create-city');
    Route::post('/insert-city', 'CityController@store')->name('insert-city');
    Route::get('/edit-city/{id}', 'CityController@edit')->name('edit-city');
    Route::post('/update-city/{id}', 'CityController@update')->name('update-city');
    Route::get('/delete-city/{id}', 'CityController@destroy')->name('delete-city');

    //category
    Route::get('/categories', 'CategoryController@index')->name('categories');
    Route::get('/create-category', 'CategoryController@create')->name('create-category');
    Route::post('/insert-category', 'CategoryController@store')->name('insert-category');
    Route::get('/edit-category/{id}', 'CategoryController@edit')->name('edit-category');
    Route::post('/update-category/{id}', 'CategoryController@update')->name('update-category');
    Route::get('/delete-category/{id}', 'CategoryController@destroy')->name('delete-category');

    //blog
    Route::get('/blogs', 'BlogController@index')->name('blogs');
    Route::get('/blog/{id}', 'BlogController@show')->name('blog-one');
    Route::get('/create-blog', 'BlogController@create')->name('create-blog');
    Route::post('/insert-blog', 'BlogController@store')->name('insert-blog');
    Route::get('/edit-blog/{id}', 'BlogController@edit')->name('edit-blog');
    Route::post('/update-blog/{id}','BlogController@update')->name('update-blog');
    Route::get('/delete-blog/{id}', 'BlogController@destroy')->name('delete-blog');
});

//paypal routes
Route::post('/upgrade-pro', 'PaymentController@paypro')->name('upgrade-pro'); 
Route::post('/upgrade-professional', 'PaymentController@payprofessional')->name('upgrade-professional');
Route::post('/upgrade-exclusive', 'PaymentController@payexclusive')->name('upgrade-exclusive'); 

Route::get('/status-pro', 'PaymentController@getPaymentStatusPro'); 
Route::get('/status-professional', 'PaymentController@getPaymentStatusProfessional');
Route::get('/status-excl', 'PaymentController@getPaymentStatusExclusive');

//for email - apply for a job and contact
Route::post('/email-apply', 'EmailController@send')->name('email-apply');
Route::post('/email-contact', 'EmailController@contact')->name('email-contact');
Route::get('/user-contact', 'HomeController@usercontact')->name('user-contact');
Route::get('/contact', 'FrontController@contact')->name('contact');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');


