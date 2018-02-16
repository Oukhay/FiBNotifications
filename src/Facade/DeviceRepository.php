<?php
/**
 * Created by PhpStorm.
 * User: medlink
 * Date: 16/02/18
 * Time: 1:20 PM
 */
namespace  Oukhay\FiBNotifications\Facade;
use Illuminate\Support\Facades\Facade;
use Oukhay\FiBNotifications\Models\Device;
use Oukhay\FiBNotifications\Utils\Constants;
class DeviceRepository extends Facade
{


    protected static function getFacadeAccessor() {
        return 'deviceRepository';
    }

}