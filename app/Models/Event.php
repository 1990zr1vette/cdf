<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model {

		protected $fillable = array(
		'title', 
		'title_fr', 
		'event', 
		'event_fr', 
		'image',		
		'current',
		'active');

}
