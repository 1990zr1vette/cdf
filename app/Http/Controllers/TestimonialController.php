<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use \App\Models\Testimonial;

use Input;

use Session;

class TestimonialController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('admin/testimonials/testimonials')
			->with('Testimonials', Testimonial::all());
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin/testimonials/addtestimonial');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$referer = $_SERVER['HTTP_REFERER'];
		$strpos = strpos($referer, 'experience');

		
		Testimonial::create($request->all());
		
		if (!$strpos)
			return redirect('admin/testimonials/create');
		else
			echo '1';
			
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
		return view('admin/testimonials/testimonial')
			->with('Testimonial', Testimonial::findOrFail($id));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$Testimonial = Testimonial::findOrFail($id);		 
		$Testimonial->fill(Input::all())->save(); 
		return redirect('admin/testimonials');
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
	
	public function addtestimonialen()
	{
		Session::put('lang','EN');
		return $this->addtestimonialblade();
		
	}
	
	public function addtestimonialfr()
	{
		Session::put('lang','FR');
		return $this->addtestimonialblade();
	}

	public function addtestimonialblade()
	{
		$urlol = languages('temoignages/ajoutetemoignage', 'testimonials/addtestimonial');
		
		return view('testimonials/addtestimonial')
			->with('title', languages('Add testimonial', 'ajouter temoignage'))
			->with('description','')
			->with('keywords','')
			->with('urlol', $urlol);		
	}

}
