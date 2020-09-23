<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use SmartContact\TrackingApplicationLog\app\Models\Traits\TrackingApplicationLogs;

class Book extends Model
{
    use TrackingApplicationLogs;

    protected $fillable = [
        'name',
        'pages'
    ];
}
