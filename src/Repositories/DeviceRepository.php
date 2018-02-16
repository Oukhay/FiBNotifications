<?php
/**
 * Created by PhpStorm.
 * User: medlink
 * Date: 16/02/18
 * Time: 1:20 PM
 */
namespace  Oukhay\FiBNotifications\Repositories;
use Oukhay\FiBNotifications\Models\Device;
use Oukhay\FiBNotifications\Utils\Constants;
class DeviceRepository
{


    public function registerNewDevice($token,$userId){
        $device =  new Device();
        $device->token = $token;
        $device->user_id = $userId;
        $device->device_status = Constants::$DEVICE_REGISTERED;
        $device->save();
        return $device;
    }

}