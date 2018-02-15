<?php
/**
 * Created by PhpStorm.
 * User: medlink
 * Date: 14/02/18
 * Time: 1:05 PM
 */

namespace Oukhay\FiBNotifications;
use Oukhay\FiBNotifications\Utils\HttpClient;


class FiBNotification
{

    public function sendNotification($notificationBody){

        $url = 'https://fcm.googleapis.com/fcm/send';
        $headers = array (
            'Authorization: key=' . config('fib-notifications.main.fire_base_key'),
            'Content-Type: application/json'
        );
        $httpClient = new HttpClient();
        $response =  $httpClient->post($url,$notificationBody,$headers);
        return $response;
    }
}