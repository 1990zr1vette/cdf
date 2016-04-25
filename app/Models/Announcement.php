<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Announcement extends Model {

	protected $fillable = array(
		'announcement', 
		'announcement_fr', 
		'active');

}
