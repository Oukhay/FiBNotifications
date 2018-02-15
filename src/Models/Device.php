<?php
/**
 * Created by PhpStorm.
 * User: medlink
 * Date: 14/02/18
 * Time: 3:41 PM
 */
namespace  Oukhay\FiBNotifications\Models;
use Illuminate\Database\Eloquent\Model;
class Device extends  Model
{
    protected $table = 'fibn_devices';
    protected $fillable = [
        'token',
        'user_id'
    ];
}