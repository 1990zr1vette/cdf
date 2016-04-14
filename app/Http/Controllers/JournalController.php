<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use \App\Models\Announcement;
use \App\Models\Editorial;
use \App\Models\Event;

use Session;

class JournalController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
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

	// ****************************** JOURNAL ****************************** //
	public function journal()
	{
		Session::put('lang','EN');
		return $this->journalblade();
	}
	
	public function journalfr()
	{
		Session::put('lang','FR');
		return $this->journalblade();
	}	
	
	public function journalblade()
	{

		return view('journal/journal')
			->with('title', languages(JOURNAL, JOURNAL_FR))	
			->with('description', '')
			->with('keywords', '')
			->with('urlol', languages(JOURNAL_FR, JOURNAL))		
			->with('Announcement', Announcement::where('current',1)->first())
			->with('Editorial', Editorial::where('current',1)->first())			
			->with('Event', Event::where('current',1)->first());
	}
	// ****************************** JOURNAL ****************************** //
	
	
	// ****************************** EVENT ****************************** //
	public function event($id)
	{
		Session::put('lang','EN');
		return $this->eventblade($id);
	}
	
	public function evenement($id)
	{
		Session::put('lang','FR');
		return $this->eventblade($id);
	}	
	
	private function eventblade($id)
	{
		$url_ol = languages(JOURNAL_FR, JOURNAL) . '/' . 
				  languages(rtrim(EVENTS, 's'), rtrim(EVENTS_FR, 's')) . $id;
		
		return view('events/event')
			->with('description', '')
			->with('keywords', '')
			->with('urlol', $url_ol)	
			->with('Event', Event::find($id));
	}
	// ****************************** EVENT ****************************** //
	
	// ****************************** EVENTS ****************************** //
	public function events()
	{
		Session::put('lang','EN');
		return $this->eventsblade();		
	}
	
	public function evenements()
	{
		Session::put('lang','FR');
		return $this->eventsblade();				
	}

	private function eventsblade()
	{
		$url_ol = languages(JOURNAL_FR, JOURNAL) . '/' . 
				  languages(replaceAccents(EVENTS_FR), EVENTS) . '/';
		
		return view('events/events')
			->with('description', '')
			->with('keywords', '')
			->with('urlol', $url_ol)	
			->with('Events', Event::where('active',1)->get());
	}
	// ****************************** EVENTS ****************************** //	
	
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
			->with('description', '')
			->with('keywords', '')
			->with('urlol', $url_ol)	
			->with('Announcements', Announcement::where('active',1)->get());
	}
	// ****************************** ANNOUNCEMENTS ****************************** //	
	
}
