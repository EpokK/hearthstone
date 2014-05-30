<?php

class AccountController extends BaseController {
	protected $layout = 'layouts.account';

	public function showLogin() {
		// show the form
		$this->layout->content = View::make('login');
	}

	public function doLogin()
	{
		// validate the info, create rules for the inputs
		$rules = array(
			'email'    => 'required|email', // make sure the email is an actual email
			'password' => 'required|alphaNum|min:3' // password can only be alphanumeric and has to be greater than 3 characters
		);

		// run the validation rules on the inputs from the form
		$validator = Validator::make(Input::all(), $rules);

		// if the validator fails, redirect back to the form
		if ($validator->fails()) {
			return Redirect::to('login')
				->withErrors($validator) // send back all errors to the login form
				->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
		} else {

			// create our user data for the authentication
			$userdata = array(
				'email' 	=> Input::get('email'),
				'password' 	=> Input::get('password')
			);

			// attempt to do the login
			if (Auth::attempt($userdata)) {
				return Redirect::to('deck');
			} else {
				// validation not successful, send back to form
				return Redirect::to('login');
			}
		}
	}

	public function doLogout()
	{
		Auth::logout();
		return Redirect::to('login');
	}

	public function showSubscribe() {
		$this->layout->content = View::make('subscribe');
	}

	public function doSubscribe() {
		// validate the info, create rules for the inputs
		$rules = array(
			'email'    => 'required|email', // make sure the email is an actual email
			'password' => 'required|alphaNum|min:3' // password can only be alphanumeric and has to be greater than 3 characters
		);

		// run the validation rules on the inputs from the form
		$validator = Validator::make(Input::all(), $rules);

		// if the validator fails, redirect back to the form
		if ($validator->fails()) {
			return Redirect::to('subscribe')
				->withErrors($validator) // send back all errors to the login form
				->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
		} else {
			// create a new user
			$newUser = new User();
			$newUser->email = Input::get('email');
			$newUser->password = Input::get('password');
			$newUser->save();

			Redirect::to('login');
		}
	}
}