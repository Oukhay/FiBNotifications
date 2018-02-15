<?php
/**
 * Created by PhpStorm.
 * User: medlink
 * Date: 14/02/18
 * Time: 2:49 PM
 */
namespace Oukhay\FiBNotifications\Controllers;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Oukhay\FiBNotifications\FiBNotificationBuilder;
use Illuminate\Support\Facades\Validator;
use Oukhay\FiBNotifications\Models\Device;


class FiBDevicesController extends BaseController
{


    public function register(Request $request)
    {
        $validator = Validator::make($request->all(),  [
            'token'             => 'required',
            'user_id'          => 'required|numeric'
        ]);

        if ($validator->fails()) {
            return $validator->errors();
        }
        $device =  new Device();
        $device->token = $request->get("token");
        $device->user_id = $request->get("user_id");
        $device->save();
        return $device;

    }
}