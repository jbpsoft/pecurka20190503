<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function live(){
		return Redirect::to("AdminOptions::findSession('firma', 'web_sajt')");
	}

	public function showWelcome($id=0){        
        Session::forget('jezik.AdminOptions::server()');
        Session::forget('log_sesija.AdminOptions::server()');
        Session::forget('brojac');
        if ($id == 1) {
	        Session::put('dash', 1);
	    }
    	return View::make('login');
	}

	public function preWelcome(){        	
		Session::put('jezik.AdminOptions::server()', $_POST['jezik']);
		return View::make('login');
	}

	public function welcome(){
		return View::make('welcome');
	}

	public function litleTable(){
		return View::make('litleTable');
	}

	public function bigTable(){
		return View::make('bigTable');
	}


	public function home(){
		return View::make('pages.home');
	}

}
