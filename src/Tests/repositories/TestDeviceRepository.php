<?php
/**
 * Created by PhpStorm.
 * User: medlink
 * Date: 16/02/18
 * Time: 1:04 PM
 */

use Tests\TestCase;
use Oukhay\FiBNotifications\Facade\DeviceRepository;
use Oukhay\FiBNotifications\Models\Device;

class TestDeviceRepository extends TestCase
{

    protected $token = "application-token-got-from-the-mobile-application";
    protected $userId = 101;

    protected function setUp()
    {
        parent::setUp();

    }

    public function testRegisterNewDevice(){
        $count = Device::all()->count();
        DeviceRepository::registerNewDevice($this->token,$this->userId);
        $this->assertEquals($count+1,Device::all()->count());
    }

}