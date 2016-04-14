<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Editorial extends Model {

	protected $fillable = array(
		'title', 
		'title_fr', 
		'editorial', 
		'editorial_fr', 
		'image', 
		'active', 
		'current');

}
