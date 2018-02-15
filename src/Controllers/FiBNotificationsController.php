<?php
/**
 * Created by PhpStorm.
 * User: medlink
 * Date: 14/02/18
 * Time: 2:49 PM
 */
namespace Oukhay\FiBNotifications\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Oukhay\FiBNotifications\FiBNotificationBuilder;


class FiBNotificationsController extends BaseController
{


    public function send()
    {
        $builder = new FiBNotificationBuilder();
        $to ='dNqTb060IgY:APA91bHJTTSErRYS9ucZICjx8aiCUNYtLy1WA6ktOO16qWRjcGwf54_L8zq8U2lkxJW3BgHE05fbHClRSEO_rrxmeX_xTVAOo3PsdmUPlSvgcOQoPrGzP2TRNFEtq4-EmMPwQX6Kt1Q2';
        $notificationBody = $builder->title("hello")->data("key","value")->text("text")->to($to)->build();
        return \Oukhay\FiBNotifications\Facade\FiBNotification::sendOneNotification($notificationBody) . ' from controller.';
    }
}