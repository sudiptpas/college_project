<?php

class LoginController extends BaseController {

	public function getIndex(){
		return View::make('home.index');
	}
	public function getAuth()
	{
		$error = '';
		if(Session::get('error')){
			$error = Session::get('error');
		}
		return View::make('user.login')->withError($error);
	}
	public function postAuthenticate(){
		$validator = Validator::make(Input::all(),array(
			'username' => 'required',
			'password' => 'required'
			));
		if($validator->fails()){
			return Redirect::to('login/auth')
					->withInput()
					->withErrors($validator);
		}else{
			$field = filter_var(Input::get('username'), FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
			$user = array(
			$field => Input::get('username'),
			'password' => Input::get('password'));
			$remember = (Input::has('remember'))? true : false;
			$userdata = User::where('username', Input::get('username'))->orWhere('email', Input::get('username'))->first();
			if($userdata->status == 2){
				return Redirect::to('/login/auth')->withError('The '.$field.' provided has been disabled.');
			}elseif($userdata->status == 0){
				return Redirect::to('/login/auth')->withError('The '.$field.' provided is not activated.');
			}
			if(Auth::attempt($user)) {
				if(Auth::user()->status == 1){
					return Redirect::to('login/auth')
						->withError('The username '.Input::get('username').' has been disabled.')
						->withInput();
				}
				Session::put('company_id', Auth::user()->company_id);

				return Redirect::to('/home');
			}else{
				return Redirect::to('login/auth')
					->withError('The email or password provided is incorrect.')
					->withInput();
			}
			Redirect::to('login/auth')->withError('There was a problem signing you in.');
		}

	}
}
