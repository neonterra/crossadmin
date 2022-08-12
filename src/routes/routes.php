<?php

Route::group(['prefix' => 'crossadmin'], function() {
    Route::get('demo', 'Webjhin\Crossadmin\Http\Controllers\CrossadminController@demo');
});
