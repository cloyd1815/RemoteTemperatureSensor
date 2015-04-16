<?php namespace App\Http\Controllers;

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
		//find current user for use in finding all tempsensors needed
		$userID = \Auth::id();
		//find all the tempsensors using the userID
		$sensors = \app\User::find($userID)->tempsensors;
		//find all the temps from the sensor and store them...where? Maybe move to view?
/*		foreach($sensors as $sensor) {
			\app\Tempsensors::find($sensor)->temps;
		}
*/
		return view('home', ["userid" => $userID, "sensors" => $sensors]);
	}

}
