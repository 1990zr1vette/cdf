<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use \App\Models\Brand;

use Session;
use Input;

class BrandController extends Controller {


	//public function __construct(Request $request)
	//{
		//$this->middleware('auth');
		//$this->request = $request;
	//}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		echo 'INDEX';
		die();
		
		//print_r(Brand::all());
		
		//return view('admin/brands/brands')->with('brands',Brand::all());
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		echo 'CREATE';
		die();
		
		return view('admin/brands/addbrand');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		echo 'STORE';
		die();
		
		$moveTo = base_path() . '/public/images/';				  
		$imageName = Input::file('image')->getClientOriginalName();
		
		$Brand = new Brand(		
			array('brand' 	 => $request->get('brand'), 
				  'about' 	 => $request->get('about'),
				  'about_fr' => $request->get('about_fr'), 				  
				  'image' 	 => $imageName)
		);
		
		if ($request->file('image')->move($moveTo, $imageName))
		{
			if ($Brand->save())
				echo '1';
			else
				echo '0';
		}
		else 
		{
			echo '-1';
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		echo 'SHOW';
		die();
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		echo 'EDIT';
		die();
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		echo 'UPDATE';
		die();
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		echo 'DESTROY';
		die();
	}

}
