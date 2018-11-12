<?php

namespace gta\Http\Controllers;

use Illuminate\Http\Request;
use gta\Http\Requests\CreateApplication;

use gta\Auth;
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
        Auth::user()->authorizeRoles(['SuperAdmin', 'Admin']);

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
        dd($appRequest);
        $user = $aappRequest->user();

        $app = new Application;
        $app->state_id = 2;
        $app->user_id = $user->id ; 
        $app->save();

        $dataAnswers = [];

        $namesForm = ['age','legalcheck','departament','answer1','answer2','answer3','answer4'.'answer5','answer6','answer7'];

        foreach($namesForm as $name){
            $dataAnswers[]= $appRequest->input($name);
        }

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
