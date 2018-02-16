<?php
/**
 * Created by PhpStorm.
 * User: medlink
 * Date: 14/02/18
 * Time: 1:05 PM
 */

namespace Oukhay\FiBNotifications;
use Oukhay\FiBNotifications\Models\Device;
use Oukhay\FiBNotifications\Utils\Constants;
use Oukhay\FiBNotifications\Utils\HttpClient;


class FiBNotification
{

    // send one notification
    public function sendNotification(FiBNotificationBuilder $notificationBody){
        $headers = $this->createHeaders();

        $httpClient = new HttpClient();

        $response =  $httpClient->post(Constants::$FIREBASE_URL,$notificationBody,$headers);

        return $response;
    }


   // send multiple notifications
    public function sendNotificationsToMultipleDevices(FiBNotificationBuilder $notificationBody){
        $headers = $this->createHeaders();

        $httpClient = new HttpClient();

        $response =  $httpClient->post(Constants::$FIREBASE_URL,$notificationBody,$headers);


        return $response;
    }

    private function createHeaders(){
        $headers = array (
            'Authorization: key=' . config('fib-notifications.main.fire_base_key'),
            'Content-Type: application/json'
        );
        return $headers;
    }
}