<?php

class SessionsController extends \BaseController {

	public function create()
	{
		return View::make('auth.login');
	}

	public function store()
	{
        if(Auth::attempt(Input::only(['email', 'password']), Input::get('remember_me'), true)) {
            return Redirect::route('sessions.index');
        }

        return Redirect::route('sessions.create')->withInput(Input::all());
	}


	public function logout()
	{
        Auth::logout();

        return Redirect::to('/');
	}


}
