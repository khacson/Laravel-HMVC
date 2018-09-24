<?php
$namespace = 'App\Modules\Frontend\Home';
Route::group(
    ['module'=>'Home', 'namespace' => $namespace],
    function() {
        Route::get('home', [
            # middle here
            'as' => 'index',
            'uses' => 'HomeController@index'
        ]);
		Route::get('/', [
            # middle here
            'as' => 'index',
            'uses' => 'HomeController@index'
        ]);
		Route::post('/getData', [
            # middle here
            'as' => 'index',
            'uses' => 'HomeController@getData'
        ]);
		Route::get('/setData', [
            # middle here
            'as' => 'index',
            'uses' => 'HomeController@setData'
        ]);
    }
);