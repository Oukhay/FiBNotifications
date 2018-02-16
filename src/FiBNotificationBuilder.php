<?php
/**
 * Created by PhpStorm.
 * User: medlink
 * Date: 14/02/18
 * Time: 1:05 PM
 */

namespace Oukhay\FiBNotifications;
use HttpClient;
use Oukhay\FiBNotifications\Models\Device;


class FiBNotificationBuilder
{

    private $notificationBody =[];
    private $notification;
    private $data;
    private $to;
    private $registration_ids = [];
    private $to_multiple_devices = false;

    /**
     * FiBNotificationBuilder constructor.
     */
    public function __construct()
    {
    }


    public function title($title){
        $this->notification['title'] = $title;
        return $this;

    }
    public function text($text){
        $this->notification['text'] = $text;
        return $this;

    }
    public function data($key,$value){
        $this->data[$key] = $value;
        return $this;

    }
    public function to($to){
        $this->to = $to;
        return $this;

    }
    public function users_ids($usersIds){

        $this->registration_ids = $this->getRegistrationIdsFromUsersIds($usersIds);
        return $this;

    }

    public function to_multiple_devices($isToMultipleDevices = true){
        $this->to_multiple_devices = $isToMultipleDevices;
        return $this;
    }

    public function build(){
        $this->notificationBody['notification'] = $this->notification;
        $this->notificationBody['data'] = $this->data;

        if ($this->to_multiple_devices):
            $this->notificationBody['registration_ids'] = $this->registration_ids;
        else:
            $this->notificationBody['to'] = $this->to;
        endif;

        return $this->notificationBody;

    }

    private function getRegistrationIdsFromUsersIds($usersIds){
        $registrationsIds = Device::whereIn('user_id',$usersIds)->pluck('token')->toArray();
        return $registrationsIds;
    }


}