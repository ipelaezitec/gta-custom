<?php

namespace gta\Http\Controllers;


use gta\Http\Requests\AppReview;


use Illuminate\Http\Request;
use gta\Application;
use Auth;
use gta\User;
use gta\Answer;
use gta\Role;



class AppReceivedController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    
    public function showAppsReceived()
    {
        Auth::user()->authorizeRoles(['SuperAdmin', 'Admin']);

        $appsReceived = Application::where('state_id','=',2)->paginate(50);
        
        
        // foreach ($users as $user){
        //     $states[] = $user->state;
        // }
        return view('panel.appreceived',compact('appsReceived'));
        //     'appsReceived'=>$appsReceived,

        // ]);

        // return view('panel.appreceived',[]);
    }

    public function showSingleApp($applicationId)
    {

        Auth::user()->authorizeRoles(['SuperAdmin', 'Admin']);

        $user=User::find($applicationId);

        if (isset($user->application->id)) {
            $answers = Answer::where('application_id',$user->application->id)->get();
        }

        return view('panel.singleapp',compact('user','answers'));
    }

    public function changeState(AppReview $request){
        Auth::user()->authorizeRoles('SuperAdmin');
    

        
        $app = Application::find($request->input('application'));
        $app->explanation = $request->input('explanation');
       
        switch ($request->input('action')) {
            case '1':
                // 3 = accept
                $app->state_id = 3;
                break;

            case '2':
                // 4 = denied
                $app->state_id = 4;
                break;
        }
        $app->save();
        
        return redirect('/panel/appreceived');
       

    }
}
