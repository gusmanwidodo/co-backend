<?php

Route::group([
    'prefix' => 'admin',
    'as' => 'admin.'
], function() {
    Route::get('/', ['as' => 'dashboard', 'uses' => 'Admin\DashboardController@index']);
});