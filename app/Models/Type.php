<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use \App\Models\Inventory;

class Type extends Model 
{

	protected $fillable = array('product_id', 'type', 'type_fr', 'keywords', 'keywords_fr', 'description', 'description_fr', 'active');

    public function InventoryItems()
    {
        return $this->hasMany('\App\Models\Inventory');
    }
	
}
