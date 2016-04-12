<?php namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

use Input;

use \App\Models\Announcement;
use \App\Models\Brand;
use \App\Models\Editorial;
use \App\Models\Event;
use \App\Models\Inventory;
use \App\Models\Team;

abstract class Controller extends BaseController {

	use DispatchesCommands, ValidatesRequests;

	// ********** NEW RECORD ********** //
	public function newRecord($object, $request, $image, $redirect)
	{
		$data = $request->all();
		
		if ($image)
		{
			$imageName = Input::file('image')->getClientOriginalName();
			$request->file('image')->move(MOVETO, $imageName);			
			$data['image'] = $imageName;
		}
		
		switch($object)
		{
			case 'Brand':
				Brand::create($data);
			break;
			case 'Editorial':
				Editorial::create($data);
			break;
			case 'Event':
				Event::create($data);
			break;
			case 'Inventory':
				Inventory::create($data);
			break;
			case 'Team':
				Team::create($data);
			break;			
		}
		
		return redirect($redirect);
	}
	// ********** NEW RECORD ********** //
	
	// ********** UPDATE RECORD ********** //
	public function updateRecord($object, $request, $id, $redirect)
	{
		$data = Input::all();
		
		if (Input::file('image'))
		{
			$imageName = Input::file('image')->getClientOriginalName();
			$request->file('image')->move(MOVETO, $imageName);
			$data['image'] = $imageName;
		}
		
		switch($object)
		{
			case 'Brand':
				$Brand = Brand::findOrFail($id);
				$Brand->fill($data)->save();
			break;
			case 'Editorial':
				$Editorial = Editorial::findOrFail($id);
				$Editorial->fill($data)->save();
			break;
			case 'Event':
				$Event = Event::findOrFail($id);
				$Event->fill($data)->save();
			break;
			case 'Inventory':
				$Inventory = Inventory::findOrFail($id);
				$Inventory->fill($data)->save();
			break;
			case 'Team':
				$Team = Team::findOrFail($id);
				$Team->fill($data)->save();
			break;			
		}
		
		return redirect($redirect);
	}
	// ********** UPDATE RECORD ********** //	
	
}
