<?php
class userController extends Controller {
	
	public function login() {
		
		if($this->isPostRequest()){
			$validator = $this->getLoginValidator();

			if($validator->passes()){
				$credentials = $this->getLoginCredentials();

				if(Auth::attempt($credentials)) {
					return Redirect::route("dashboard/index");
				}

				return Redirect::back()->withErrors([
					"password" => ["Dados inválidos."]
				]);

			} else {
				return Redirect::back()
					->withinput()
					->withErrors($validator);
			}
		}

		return View::make("user/login");
	}

	public function request() {

		if($this->isPostRequest()) {

			$response = $this->getPasswordRemindResponse();

			if($this->isInvalidUser($response)) {
				return Redirect::back()
					->withInput()
					->with('error', Lang::get($response));
			}

			return Redirect::back()
				->with('status', Lang::get($response));
		}

		return View::make('user/request', compact("token"));
	}

	public function reset($token) {

		if($this->isPostrequest()) {

			$credentials = Input::only(
				'email',
				'password',
				'password_confirmation'
			) + compact('token');

			$response = $this->resetPassword($credentials);

			if($response === Password::PASSWORD_RESET) {
				return Redirect::route("dashboard/index");
			}

			return Redirect::back()
				->withInput()
				->with("error", Lang::get($response));
		}
		return View::make('user/reset', compact('token'));
	}

	public function logout() {
		Auth::logout();
		return Redirect::route('user/login');
	}

	protected function getPasswordRemindResponse(){
		return Password::remind(Input::only('email'));
	}

	protected function isInvalidUser($response) {
		return $response === Password::INVALID_USER;
	}

	protected function resetPassword($credentials) {
		return Password::reset($credentials, function($user, $pass) {
			$user->password = Hash::make($pass);
			$user->save();
		});
	}

	protected function isPostRequest(){
		return Input::server("REQUEST_METHOD") == "POST";
	}

	protected function getLoginValidator() {
		return Validator::make(Input::all(), [
			"username" => "required",
			"password" => "required"
			]);
	}

	protected function getLoginCredentials(){
		return [
			"username" => Input::get("username"),
			"password" => Input::get("password")
		];
	}
}