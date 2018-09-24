<?php
$namespace = 'App\Modules\Backend\Authorize';
Route::group(
    ['module'=>'Authorize', 'namespace' => $namespace],
    function() {
        Route::get('admin/authorize', [
            # middle here
            'as' => 'index',
            'uses' => 'AuthorizeController@index'
        ]);
		Route::get('admin/', [
            # middle here
            'as' => 'index',
            'uses' => 'AuthorizeController@index'
        ]);
		Route::post('/getData', [
            # middle here
            'as' => 'index',
            'uses' => 'AuthorizeController@getData'
        ]);
		Route::get('/setData', [
            # middle here
            'as' => 'index',
            'uses' => 'AuthorizeController@setData'
        ]);
    }
);