<?php 
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

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
			->with('description','')
			->with('keywords','')
			->with('urlol', languages(ABOUTUS_FR, ABOUTUS));		
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
			->with('description','')
			->with('keywords','')
			->with('urlol', languages(ABOUTUS_FR, ABOUTUS) . '/culture');
	}
	// ****************************** CULTURE ****************************** //
	
	// ****************************** EXPERIENCE ****************************** //
		public function experience()
	{
		Session::put('lang','EN');
		return $this->experienceblade();		
	}

	public function experiencefr()
	{
		Session::put('lang','FR');
		return $this->experienceblade();		
	}
	
	public function experienceblade()
	{
		return view('aboutus/experience')
			->with('description','')
			->with('keywords','')
			->with('urlol', languages(ABOUTUS_FR, ABOUTUS) . '/culture');
	}	
	// ****************************** EXPERIENCE ****************************** //
}
