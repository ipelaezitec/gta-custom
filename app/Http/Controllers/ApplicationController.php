<?php

namespace gta\Http\Controllers;

use Illuminate\Http\Request;
use gta\Http\Requests\CreateApplication;

use Auth;
use gta\Application;
use gta\Answer;
use gta\Question;

class ApplicationController extends Controller
{
    // public function __construct() {
    //     $this->middleware('auth');
    // }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {

        // todo : if user has application redirect '/'
        Auth::user()->authorizeRoles(['SuperAdmin', 'Admin','User']);

        return view('application.application');
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createApp(CreateApplication $appRequest)
    {
        // dd($appRequest);
        $user = $appRequest->user();
        
        $app = new Application;
        $app->state_id = 2;
        $app->user_id = $user->id ; 
        $app->explanation = '';
        $app->save();
        
        
        $dataAnswers = [];

        // dd($appRequest->input('answer5'));
        
        $namesForm = ['answer1',
            'age',
            'answer2',
            'departament',
            'legalcheck',
            'answer3',
            'answer4',
            'answer5',
            'answer6',
            'answer7'];
        
        // dd($appRequest->input('answer5'));
        
        foreach($namesForm as $name){
            if ($name == 'legalcheck' && $appRequest->input('legalcheck') == null ){
                $dataAnswers[]= 0;
            }else{
                $dataAnswers[]= $appRequest->input($name);
            }
        }
        // dd($dataAnswers);

        $counter = 0; 
        foreach($dataAnswers as $data){
            $counter++;
            $answer = New Answer ; 
            $answer->text = $data;
            $answer->application_id = $app->id;
            $answer->question_id = $counter;
            $answer->save();   
        }

 
         return redirect('/');
    }
}
