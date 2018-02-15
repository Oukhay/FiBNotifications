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

        $fields = json_encode ( $data );
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