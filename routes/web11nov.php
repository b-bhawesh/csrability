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
/*--------- for manual user  ------------------*/

Route::post('/users/storeUser', 'Admin\UserController@storeUser')->name('storeUser');

Route::get('/', 'HomeController@index')->name('home');
Route::get('/jobs', 'JobController@jobList')->name('jobs');
Route::get('/application/{id}', 'JobController@jobApply');
Route::post('/store', 'JobController@jobStore')->name('job.store');

Route::get('/user/login', 'JobController@login')->name('user.login');
Route::post('/user/login', 'JobController@loginAccess')->name('user.login.access');
Route::get('/user/dashboard', 'JobController@dashboard')->name('user.dashboard');

Route::group(['prefix'=>'administrator', 'namespace'=>'Admin', 'middleware'=>['web']], function(){
    
    Route::get('/', 'LoginController@index')->name('login');
    Route::get('/login', 'LoginController@index')->name('admin_login');
    Route::post('/secure/login', 'LoginController@secure_login')->name('admin_secure_login');
    Route::get('/forgot/password', 'LoginController@forgot_password')->name('admin_forgot_password');
    Route::get('/reset/password/{token}', 'LoginController@reset_password')->name('admin_reset_password');
    Route::get('/logout', 'LoginController@logout')->name('admin.logout');
    
    Route::group(['middleware'=>'auth'], function(){
        Route::get('/dashboard', 'HomeController@index')->name('auth.dashboard');
        Route::get('/users', 'UserController@index')->name('auth.users.index');
        Route::get('/users/create', 'UserController@create')->name('auth.users.create');
        Route::post('/users/store', 'UserController@store')->name('auth.users.store');
        Route::get('/users/delete/{userId}', 'UserController@delete')->name('auth.users.delete');
        Route::get('/users/reset/password/{userId}', 'UserController@resetPassword')->name('auth.users.reset.password');
        
        Route::get('/social/users', 'UserController@social')->name('auth.users.social.index');
        
        /* Jobs Listing */
        
        Route::group(['prefix'=>'jobs'], function(){
            
            Route::get('/', 'JobController@index')->name('auth.job.index');
            Route::get('/create', 'JobController@create')->name('auth.job.create');
            
            Route::post('/store', 'JobController@store')->name('auth.job.store');
            
            Route::get('/edit/{jobId}', 'JobController@edit')->name('auth.job.edit');
            Route::post('/update/{jobId}', 'JobController@update')->name('auth.job.update');
        });
        
        
        /* Settings */
        
        Route::group(['prefix'=>'setting'], function(){
            
            Route::get('/', 'SettingController@index')->name('auth.setting.index');
            Route::get('/create', 'SettingController@create')->name('auth.setting.create');
            Route::get('/scrape-jobs', 'SettingController@index')->name('auth.setting.scrape-job');
            Route::get('/scrape/start', 'SettingController@startScrapping')->name('auth.setting.scrape.website');
            Route::get('/temp/job/edit/{jobId}', 'SettingController@editTempJob')->name('auth.temp.job.edit');
        });


        /* Advertisements Listing */
        
        Route::group(['prefix'=>'advertisements'], function(){
            
            Route::get('/', 'AdvertisementController@index')->name('auth.advertisement.index');
            Route::get('/create', 'AdvertisementController@create')->name('auth.advertisement.create');
            
            Route::post('/store', 'AdvertisementController@store')->name('auth.advertisement.store');
            
           Route::get('/edit/{advertisementId}', 'AdvertisementController@edit')->name('auth.advertisement.edit');
            Route::post('/update/{advertisementId}', 'AdvertisementController@update')->name('auth.advertisement.update');
        });


        /* Application Listing */
        
        Route::group(['prefix'=>'applications'], function(){
            
            Route::get('/', 'ApplicationController@index')->name('auth.application.index');
        });
        
        
        
    });
    
});

    /*--------------------------social login ---------------------------------------------------*/
    Route::get('auth/facebook', 'SocialController@redirectToFacebook')->name('facebook');
    Route::get('/facebook/callback', 'SocialController@handleFacebookCallback');
    Route::get('auth/google', 'SocialController@redirectToGoogle')->name('googleLogin');
    Route::get('auth/google/callback', 'SocialController@handleGoogleCallback');
    Route::get('auth/linkedin', 'SocialController@redirectToLinkedin');
    Route::get('/linkedin/callback', 'SocialController@handleLinkedinCallback');
    Route::get('users/updateProfile', 'SocialController@updateProfile')->name('updateProfile');
    
    



    Route::post('/user/register', 'JobController@register')->name('user.register');
    Route::post('users/update/profile', 'HomeController@update')->name('updateProfile.update');
    Route::post('users/save/profile', 'JobController@saveProfile')->name('profile.save');
    Route::post('users/save/profile1', 'JobController@saveProfile1')->name('profile1.save');
    Route::post('users/save/profile2', 'JobController@saveProfile2')->name('profile2.save');
    Route::post('users/save/profile3', 'JobController@saveProfile3')->name('profile3.save');
    Route::post('users/save/profile4', 'JobController@saveProfile4')->name('profile4.save');

    Route::post('users/save/profile/image', 'JobController@updateImage')->name('profile.image.save');
    
/*
Route::group(['prefix'=>'administrator', 'namespace'=>'Admin', 'middleware'=>['web']], function(){
    
    
});
*/