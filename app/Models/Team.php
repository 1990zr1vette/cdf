<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model {

	protected $table = 'team';
	
	protected $fillable = array(
		'first_name', 
		'last_name', 
		'position', 
		'position_fr',
		'description', 
		'description_fr',
		'image', 
		'active');

}
