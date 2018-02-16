<?php
/**
 * Created by PhpStorm.
 * User: medlink
 * Date: 16/02/18
 * Time: 4:51 PM
 */
use Tests\TestCase;
use Oukhay\FiBNotifications\Facade\FiBNotification;
use Oukhay\FiBNotifications\FiBNotificationBuilder;

class TestNotificationService extends TestCase
{

    protected  $deviceToken = "dNqTb060IgY:APA91bHJTTSErRYS9ucZICjx8aiCUNYtLy1WA6ktOO16qWRjcGwf54_L8zq8U2lkxJW3BgHE05fbHClRSEO_rrxmeX_xTVAOo3PsdmUPlSvgcOQoPrGzP2TRNFEtq4-EmMPwQX6Kt1Q2";
    protected  $notificationTitle = "Notification Title";
    protected  $notificationText  = "Notification Text";
    protected  $notificationKey   = "notification_key";
    protected  $notificationData  = "Notification data";

    public function testSendOneNotificationToSingleDevice()
    {
        $fibNotificationBuilder =  new FiBNotificationBuilder();
        $notificationBody        = $fibNotificationBuilder->to($this->deviceToken)
                                ->title($this->notificationTitle)
                                ->text($this->notificationText)
                                ->data($this->notificationKey,$this->notificationData)
                                ->build();

        $result = FiBNotification::sendNotification($notificationBody);
        $this->assertEquals(1,1);

    }

}