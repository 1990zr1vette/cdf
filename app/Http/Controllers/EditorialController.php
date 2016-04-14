<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use \App\Models\Editorial;

use Input;
use Session;

class EditorialController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('admin/editorials/editorials')
			->with('Editorials', Editorial::all());
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin/editorials/addeditorial');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		return $this->newRecord('Editorial', $request, true, ADMIN . 'editorials');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{

	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return view('admin/editorials/editorial')
			->with('Editorial', Editorial::find($id));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		return $this->updateRecord('Editorial', $request, $id, ADMIN . 'editorials');
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
	
	public function updateCurrent($id)
	{
		\DB::table('editorials')
			->update(array('current' => 0));
			
		\DB::table('editorials')
			->where('id', $id)
			->update(array('current' => 1));
		
		echo '1';
	}
	
	// ****************************** EDITORIAL ****************************** //
	public function editorial($id)
	{
		Session::put('lang','EN');
		return $this->editorialblade($id);
	}
	
	public function article($id)
	{
		Session::put('lang','FR');
		return $this->editorialblade($id);
	}	
	
	private function editorialblade($id)
	{
		$url_ol = languages('article/', 'editorial/') . $id;
		
		return view('editorials/editorial')
			->with('title', languages(EDITORIALS, EDITORIALS_FR))
			->with('description', '')
			->with('keywords', '')
			->with('urlol', $url_ol)	
			->with('Editorial', Editorial::find($id));
	}
	// ****************************** EDITORIAL ****************************** //
	
	// ****************************** EDITORIALS ****************************** //
	public function editorials()
	{
		Session::put('lang','EN');
		return $this->editorialsblade();		
	}
	
	public function editorialsfr()
	{
		Session::put('lang','FR');
		return $this->editorialsblade();				
	}

	private function editorialsblade()
	{
		$url_ol = languages(replaceAccents(EDITORIALSURL_FR), EDITORIALSURL);
		
		return view('editorials/editorials')
			->with('title', languages(EDITORIALS, EDITORIALS_FR))
			->with('description', '')
			->with('keywords', '')
			->with('urlol', $url_ol)	
			->with('Editorials', Editorial::where('active',1)->get());
	}
	// ****************************** EDITORIALS ****************************** //	

}
