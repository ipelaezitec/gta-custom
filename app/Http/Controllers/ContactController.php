<?php

Namespace gta\Http\Controllers;

use gta\Notifications\InboxMessage;
use gta\Http\Controllers\Controller;
use gta\Http\Requests\ContactFormRequest;
use gta\Admin;

Class ContactController extends Controller
{
	public function show() 
	{
		return view('layouts.contact');
	}

	public function mailToAdmin(ContactFormRequest $message, Admin $admin)
	{        //send the admin an notification
		$admin->notify(new InboxMessage($message));
		// redirect the user back
		return redirect()->back()->with('message', 'thanks for the message! We will get back to you soon!');
	}
}