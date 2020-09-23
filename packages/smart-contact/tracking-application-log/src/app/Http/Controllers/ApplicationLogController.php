<?php

namespace SmartContact\TrackingApplicationLog\app\Http\Controllers;

use App\ApplicationLog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApplicationLogController extends Controller
{
    public function index()
    {
        return view('tracking-application-log::application-log.index');
    }

    public function show($applicationLog)
    {
        return view('tracking-application-log::application-log.show', compact('applicationLog'));
    }
}
