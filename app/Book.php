<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use SmartContact\TrackingApplicationLog\app\Models\ApplicationLog;
use SmartContact\TrackingApplicationLog\app\Models\Traits\TrackingApplicationLogs;
use SmartContact\TrackingApplicationLog\app\Models\Traits\TrackingUserLogin;

class Book extends Model
{
    use TrackingApplicationLogs;

    protected $fillable = [
        'name',
        'pages'
    ];
}
