<?php
/**
 * Created by PhpStorm.
 * User: medlink
 * Date: 14/02/18
 * Time: 1:07 PM
 */
namespace Oukhay\FiBNotifications\Facade;
use Illuminate\Support\Facades\Facade;

class FiBNotification extends Facade
{
    protected static function getFacadeAccessor() {
        return 'fib-notifications';
    }
}