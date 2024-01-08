<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeviceUser extends Model
{
    use HasFactory;

    protected $guarded = array('id');
    protected $table = 'device_user';

    public function device()
    {

        return $this->belongsTo(Device::class);
    }

    public function user()
    {

        return $this->belongsTo(User::class);
    }
    public function city()
    {

        return $this->belongsTo(City::class);
    }
}
