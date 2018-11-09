<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreCustomPost;
use App\Customomization;
use App\Customimage;

class CustomController extends Controller
{
    public function index() {
        $custom = Customomization::find(1);
        //dd($custom);
        $images = Customimage::where('custom_id', $custom->id)->first();
        //dd($images);
        return view('custom.index', compact('custom', 'images'));
    }

    public function store(StoreCustomPost $request) {

        $custom =  new Customomization();
        //$custom->user_id = Auth::id();
        $custom->logourl = $request->input('logo');
        $custom->backgroundurl = $request->input('background');
        $custom->videourl = $request->input('video');
        $custom->color = $request->input('color');
        $custom->save();

        $image = new Customimage();
        $image->custom_id = 1;
        $image->url = $request->input('image1');
        $image->save();

        //return $request->input('color');
        return redirect()->route('custom');
    }
}
