<?php
/**
 * Created by PhpStorm.
 * User: medlink
 * Date: 14/02/18
 * Time: 3:46 PM
 */
namespace Oukhay\FiBNotifications\Utils;
class HttpClient
{

    public  function post($url,$data,$headers=array()){

//        $url = 'https://fcm.googleapis.com/fcm/send';

//        $fields = array (
//            'registration_ids' => array (
//                $id
//            ),
//            'data' => array (
//                "message" => $message
//            )
//        );
        $fields = json_encode ( $data );

//        $headers = array (
//            'Authorization: key=' . "YOUR_KEY_HERE",
//            'Content-Type: application/json'
//        );

        $ch = curl_init ();
        curl_setopt ( $ch, CURLOPT_URL, $url );
        curl_setopt ( $ch, CURLOPT_POST, true );
        curl_setopt ( $ch, CURLOPT_HTTPHEADER, $headers );
        curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, true );
        curl_setopt ( $ch, CURLOPT_POSTFIELDS, $fields );

        $result = curl_exec ( $ch );

        curl_close ( $ch );
        return $result;
    }

}