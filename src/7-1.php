<?php

Route::get('/', function () {
    return view('hello-world');
});

Route::post('submit', [
    'as'   => 'form-submission',
    'uses' => 'FormController@submit',
]);

Route::group([
    'prefix'     => 'admin',
    'middleware' => 'auth',
    function () {

        Route::get('/', function () {
            // ...
        });
    }
]);
