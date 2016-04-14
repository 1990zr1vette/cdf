<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model {

	protected $fillable = array(
		'name', 
		'email', 
		'telephone', 
		'title', 
		'testimonial', 
		'language', 
		'active');

}
