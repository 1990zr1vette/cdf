<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use \App\Models\Announcement;

use Input;

use Session;

class AnnouncementController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('admin/announcements/announcements')
			->with('Announcements', Announcement::all());
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin/announcements/addannouncement');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		Announcement::create($request->all());
		return redirect('admin/announcements');
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
		return view('admin/announcements/announcement')
			->with('Announcement', Announcement::find($id));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$Announcement = Announcement::findOrFail($id);
		$Announcement->fill(Input::all())->save();
		return redirect('admin/announcements');
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
	
	// ****************************** ANNOUNCEMENTS ****************************** //
	public function announcements()
	{
		Session::put('lang','EN');
		return $this->announcementsblade();		
	}
	
	public function announcementsfr()
	{
		Session::put('lang','FR');
		return $this->announcementsblade();				
	}

	private function announcementsblade()
	{
		$url_ol = languages(JOURNAL_FR, JOURNAL) . '/' . 
				  languages(replaceAccents(ANNOUNCEMENTS_FR), ANNOUNCEMENTS) . '/';
		
		return view('announcements/announcements')
			->with('title', languages(ANNOUNCEMENTS, ANNOUNCEMENTS))
			->with('description', '')
			->with('keywords', '')
			->with('urlol', $url_ol)	
			->with('Announcements', Announcement::where('active',1)->get());
	}
	// ****************************** ANNOUNCEMENTS ****************************** //	

}
