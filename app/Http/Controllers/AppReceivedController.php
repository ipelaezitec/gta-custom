<?php

namespace gta\Http\Controllers;

use Illuminate\Http\Request;
use gta\Application;
use gta\Customization;

class AppReceivedController extends Controller
{
    public function showAppsReceived()
    {

        $appsReceived = Application::where('state_id','=',2)->paginate(50);
        
        
        // foreach ($users as $user){
        //     $states[] = $user->state;
        // }
        $custom = Customization::find(1);

        return view('panel.appreceived',compact('custom','appsReceived'));
        //     'appsReceived'=>$appsReceived,

        // ]);

        // return view('panel.appreceived',[]);
    }

    public function showSingleApp($applicationId)
    
    {

        $custom = Customization::find(1);
        
        return view('panel.singleapp',compact('custom'));
    }
}
