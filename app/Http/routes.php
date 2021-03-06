<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/welcome', ['as' => 'url_welcome', function () {
    return view('welcome');
}]);





Route::get('/condition-de-vente', ['as' => 'url_vers_cgv', function () {
    return view('cgv');
}]);


Route::get('/test', [
    'uses' => 'MainController@essai'
]);

Route::get('/test-tableau', [
    'uses' => 'MainController@tableau',
    'as' => 'route_test_tableau'
]);

Route::get('/notre-equipe', [
    'uses' => 'MainController@equipe',
    'as' => 'route_equipe'
]);


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
    /* any = GET ET POST */
    Route::any('/contactez-nous', [
        'uses' => 'MainController@contact',
        'as' => 'contact'
    ]);

    Route::get('/', [
        "uses" => "MainController@home",
        "as" => "home"
    ]);


});
