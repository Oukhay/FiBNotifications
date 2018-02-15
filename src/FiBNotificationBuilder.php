<?php
/**
 * Created by PhpStorm.
 * User: medlink
 * Date: 14/02/18
 * Time: 1:05 PM
 */

namespace Oukhay\FiBNotifications;
use HttpClient;


class FiBNotificationBuilder
{

    private $notificationBody =[];
    private $notification;
    private $data;
    private $to;

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
    public function build(){
        $this->notificationBody['notification'] = $this->notification;
        $this->notificationBody['data'] = $this->data;
        $this->notificationBody['to'] = $this->to;
        return $this->notificationBody;

    }


}