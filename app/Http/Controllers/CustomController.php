<?php

namespace gta\Http\Controllers;

use Illuminate\Http\Request;
use gta\Http\Requests\StoreCustomPost;
use gta\Customization;
use gta\Customimage;
use gta\Auth;

class CustomController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    
    public function index() {
        $custom = Customization::find(1);
        if($custom) {
            $images = Customimage::where('custom_id', $custom->id)->get();
        }else {
            $images =[];
        }
        //dd($custom);
        //dd($images);
        
        return view('custom.index', compact('custom', 'images'));
    }

    public function store(StoreCustomPost $request) {

        //dd($request->input('color'));
        // dd($request);

        $custom = Customization::find(1);

        if (!$custom) {
            $custom =  new Customization;
        }

        //$custom->user_id = Auth::id();
        $custom->logourl = $request->input('logo');
        $custom->backgroundurl = $request->input('background');
        $custom->videourl = $request->input('video');
        $custom->colorbtn = $request->input('colorbtn');
        $custom->bgcolorbtn = $request->input('bgcolorbtn');
        $custom->hometext = $request->input('editordata');
        
        $custom->save();

        $images = Customimage::where('custom_id', 1)->get();
        //dd($images);
        //dd(empty($images));
        if ( count($images) > 0) {
            $cont = 0;
            foreach ($images as $image) {
                $cont++;
                $image->url = $request->input('image'.$cont);
                $image->save();
            }
        } else {
            for ($i=1; $i < 6 ; $i++) { 
                $image1 = new Customimage();
                $image1->custom_id = 1;
                $image1->url = $request->input('image'.$i);
                $image1->save();
            }
         }
    
        //return 
        return redirect()->route('custom')->with('status', 'Changes saved!');;
    }
}
