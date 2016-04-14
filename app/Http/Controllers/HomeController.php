<?php 
namespace App\Http\Controllers;

use \App\Models\Product;
use \App\Models\Brand;
use \App\Models\Editorial;
use \App\Models\Event;

use Session;

class HomeController extends Controller {

	protected $urlol;
	
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
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('home/home')
			->with('title', languages(HOME, HOME_FR))		
			->with('description','')
			->with('keywords','')
			->with('urlol', $this->urlol)
			->with('Editorial',Editorial::where('current',1)->first())
			->with('Event',Event::where('current',1)->first())
			->with('Brands',Brand::where('active',1)->get());
	}
	
	public function home()
	{
		Session::put('lang','EN');
		$this->urlol = HOME_FR;
		return $this->index();
	}
	
	public function acceuil()
	{
		Session::put('lang','FR');
		$this->urlol = HOME;
		return $this->index();
	}

}
