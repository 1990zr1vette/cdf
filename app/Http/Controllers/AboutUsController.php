<?php 
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use \App\Models\Team;
use \App\Models\Artist;
use \App\Models\Boutique;
use \App\Models\Professional;
use \App\Models\Restaurant;
use \App\Models\Testimonial;

use Session;

class AboutUsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}
	

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


	// ****************************** ABOUT US ****************************** //
	public function aboutus()
	{
		Session::put('lang','EN');
		return $this->aboutusblade();
	}

	public function aboutusfr()
	{
		Session::put('lang','FR');
		return $this->aboutusblade();
	}
	
	public function aboutusblade()
	{
		return view('aboutus/aboutus')
			->with('title', languages(ABOUTUS, ABOUTUS_FR))
			->with('description', '')
			->with('keywords', '')
			->with('urlol', languages(ABOUTUSURL_FR, ABOUTUSURL));		
	}	
	// ****************************** ABOUT US ****************************** //

	// ****************************** CULTURE ****************************** //
	public function culture()
	{
		Session::put('lang','EN');
		return $this->cultureblade();		
	}

	public function culturefr()
	{
		Session::put('lang','FR');
		return $this->cultureblade();		
	}	
	
	public function cultureblade()
	{
		return view('aboutus/culture')
			->with('title', languages(ABOUTUS, ABOUTUS_FR))
			->with('description','')
			->with('keywords','')
			->with('urlol', languages(ABOUTUS_FR, ABOUTUS) . '/culture');
	}
	// ****************************** CULTURE ****************************** //
	
	// ****************************** EXPERIENCE ****************************** //
	public function experience()
	{	
		Session::put('lang','EN');
		return $this->experienceblade(1);		
	}

	public function experiencefr()
	{
		Session::put('lang','FR');
		return $this->experienceblade(0);		
	}
	
	public function experienceblade($language)
	{
		$Testimonials = Testimonial::where('language', $language)
			->where('active', 1)
			->get();
			
		return view('aboutus/experience')
			->with('title', languages(ABOUTUS, ABOUTUS_FR))
			->with('description','')
			->with('keywords','')
			->with('urlol', languages(EXPERIENCEURL_FR, EXPERIENCEURL))
			->with('Artists', Artist::where('active', 1)->get())
			->with('Boutiques', Boutique::where('active', 1)->get())
			->with('Professionals', Professional::where('active', 1)->get())
			->with('Restaurants', Restaurant::where('active', 1)->get())
			->with('Testimonials', $Testimonials);
			
	}	
	// ****************************** EXPERIENCE ****************************** //
	
	// ****************************** TEAM ****************************** //
	public function team()
	{
		Session::put('lang','EN');
		return $this->teamblade();		
	}

	public function teamfr()
	{
		Session::put('lang','FR');
		return $this->teamblade();		
	}
	
	public function teamblade()
	{
		return view('aboutus/team')
			->with('title', languages(ABOUTUS, ABOUTUS_FR))
			->with('description','')
			->with('keywords','')
			->with('urlol', languages(TEAMURL_FR, TEAMURL))
			->with('Members', Team::where('active', 1)->get());
	}	
	// ****************************** TEAM ****************************** //	
	
	// ****************************** STUDIO AND SERVICES ****************************** //		
	public function services()
	{
		Session::put('lang','EN');
		return $this->servicesblade();		
	}

	public function servicesfr()
	{
		Session::put('lang','FR');
		return $this->servicesblade();		
	}
	
	public function servicesblade()
	{
		return view('aboutus/services')
			->with('title', languages(ABOUTUS, ABOUTUS_FR))
			->with('description','')
			->with('keywords','')
			->with('urlol', languages(STUDIOSRERVICESURL_FR, STUDIOSRERVICESURL));
	}	
	// ****************************** STUDIO AND SERVICES ****************************** //	
}
