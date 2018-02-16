<?php
/**
 * Created by PhpStorm.
 * User: medlink
 * Date: 16/02/18
 * Time: 1:04 PM
 */

use Tests\TestCase;


class TestFiBNotifications extends TestCase
{

    protected $token = "application-token-got-from-the-mobile-application";
    protected $userId = 102;

    protected function setUp()
    {
        parent::setUp();

    }

    public function testRegisterNewDeviceApi(){
        $device =  [
            "token" => $this->token,
            "user_id" => $this->userId
        ];
        $response = $this->post('/fibnotifications/register',$device);
        $response->assertStatus(201);
    }
    
    

    

    public function testSendNotificationToMultipleDevices()
    {
        $this->assertTrue(true);
    }
    
    

    public function testDeleteNotRegisteredDevices(){
        
    }
}