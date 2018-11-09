<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppReceivedController extends Controller
{
    public function showAppsReceived()
    {

        return view('panel.appreceived',[]);
    }

    public function showSingleApp($applicationId)
    
    {
        return view('panel.singleapp',[]);
    }
}
