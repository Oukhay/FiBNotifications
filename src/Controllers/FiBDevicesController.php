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
use Oukhay\FiBNotifications\Repositories\DeviceRepository;

class FiBDevicesController extends BaseController
{


    /**
     * FiBDevicesController constructor.
     */
    protected $deviceRepository;

    public function __construct(DeviceRepository $deviceRepository)
    {
        $this->deviceRepository = $deviceRepository;
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(),  [
            'token'            => 'required',
            'user_id'          => 'required|numeric'
        ]);

        if ($validator->fails()) {
            return $validator->errors();
        }
        $token  = $request->get('token');
        $userId = $request->get('user_id');

        $device = $this->deviceRepository->registerNewDevice($token,$userId);

        return $device;
    }
}