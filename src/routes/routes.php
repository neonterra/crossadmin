<?php

Route::group(['prefix' => 'crossadmin'], function() {
    Route::get('demo', 'Neonterra\Crossadmin\Http\Controllers\CrossadminController@demo');
});
