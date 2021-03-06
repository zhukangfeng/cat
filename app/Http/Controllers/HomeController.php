<?php namespace Cat\Http\Controllers;
use Auth;
use Cat\Cat;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$user_id = Auth::id();
		$cats = Cat::getPet($user_id);
		// $cats = Cat::where('created_user_id', '=', $user_id);

		// return var_dump($cats);

		return view('home')->with('cats', $cats);
	}

}
