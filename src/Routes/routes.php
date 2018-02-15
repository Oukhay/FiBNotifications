<?php
/**
 * Created by PhpStorm.
 * User: medlink
 * Date: 14/02/18
 * Time: 2:44 PM
 */




Route::get('fibnotifications/config', function () {
    return config('fib-notifications-main.hello');

});
Route::post('fibnotifications/register', 'Oukhay\FiBNotifications\Controllers\FiBDevicesController@register');
Route::get('fibnotifications/send', 'Oukhay\FiBNotifications\Controllers\FiBNotificationsController@send');
