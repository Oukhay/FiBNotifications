<?php
/**
 * Created by PhpStorm.
 * User: medlink
 * Date: 14/02/18
 * Time: 3:34 PM
 */

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;;
class CreateFiBNotificationsFibnDevicesTable extends Migration
{
    public function up()
    {
        Schema::create('fibn_devices', function(Blueprint $t)
        {
            $t->increments('id')->unsigned();
            $t->text('token');
            $t->string('device_status', 255);
            $t->integer('user_id');
            $t->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('fibn_devices');
    }
}